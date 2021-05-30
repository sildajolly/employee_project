<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller 
{
	function __construct()
    {
   parent::__construct();
    $this->load->library('session');
   $this->load->helper('url');
    $this->load->helper('form');
   $this->load->model('EmployeeModel');
    
    }
	public function index()
	{
	
		  $qry = $this->EmployeeModel->catlist();
          $data['employee']=$qry;
          $this->load->view('employee',$data);
 
		
  }
  function uploadfile()
  {
    $this->load->view('csv_upload');
  }

  function savefile()
  {
    $config['upload_path']          = './uploads/';
    $config['allowed_types']        = 'csv';
    // $config['max_size']             = 100;
  

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('employeeFile')) {
       $error = array('error' => $this->upload->display_errors());
       $this->load->view('csv_upload', $error);
    } else {
      $data = array('upload_data' => $this->upload->data());
    // echo $this->upload->data('file_name');

      $fileD = fopen('uploads/'.$this->upload->data('file_name'), "r");
      $column = fgetcsv($fileD);
      while (!feof($fileD)) {
        $rowData[] = fgetcsv($fileD);
      
      }
      if(count($rowData)>20)
      {
          $this->session->set_flashdata('message', "Maximum 20 rows Can be Added");
        redirect('employee/index', 'refresh');
      }
     
      foreach ($rowData as $key => $value) {
          if (count(array($value)) > 5) { 
              $this->session->set_flashdata('message', "Columns are five so data is correpted");
          redirect('employee/index', 'refresh');
            }
          if($value[0]=="" || $value[1] == "" || $value[3]=="" || $value[4]=="")
          {
          // $this->session->set_flashdata('message', $value[0] . "Emp Code No ".$value[0].'Missing Some Fields. Fill All Data Except Department');
          redirect('employee/index', 'refresh');
          } 
         
           if(DateTime::createFromFormat('d-m-Y', $value[3]) === false || DateTime::createFromFormat('d-m-Y', $value[4]) === false) 
          {
          $this->session->set_flashdata('message',   " Employee with Code ".$value[0]." Dob Or Join Date format is Incorrect.It Must d-m-y format");
          redirect('employee/index', 'refresh'); 
          }
        $dob = $value[3];

         if(DateTime::createFromFormat('d-m-Y', $value[3]) === false || DateTime::createFromFormat('d-m-Y', $value[4]) === false) 
          {
          $this->session->set_flashdata('message',   " Employee with Code ".$value[0]." Dob Or Join Date format is Incorrect.It Must d-m-y format");
          redirect('employee/index', 'refresh'); 
          }
        $parts = explode('-', $dob);
        $formated_dob = $parts[2] . '-' . $parts[1] . '-' . $parts[0];
        // if(count($parts)>=3)
        // {
        
        //       if (checkdate($parts[1], $parts[0], $parts[2])) {
        //     $this->session->set_flashdata('message',   " Employee with Code " . $value[0] . " DOB Date format is Incorrect.It Must d-m-y format");
        //   redirect('employee/index', 'refresh');
        //       }
        // }

        $join = $value[4];
        $parts = explode('-', $join);
        $formated_join_date = $parts[2] . '-' . $parts[1] . '-' . $parts[0];
      //   if (count($parts) >= 3)
      //   {
      //   if (checkdate($parts[1], $parts[0], $parts[2])) {
      //     $this->session->set_flashdata('message',   " Employee with Code " . $value[0] . " Join Date format is Incorrect.It Must d-m-y format");
      //     redirect('employee/index', 'refresh');
      //   }
      // }
         $inserted_data = array(
          'code'=> $value[0],
          'name' => $value[1],
          'department' => $value[2],
          'dob' => $formated_dob,
          'join_date' => $formated_join_date,
        );
        if($this->EmployeeModel->isIdExist($value[0]))
        {
          $this->session->set_flashdata('message', $value[0]. ' Alreay Existed Uploading failed.');
          redirect('employee/index', 'refresh');
        }else{
          $this->session->set_flashdata('message', 'Uploaded Successfully.');
          $this->EmployeeModel->save($inserted_data);
          

        }
       
      }

     redirect('employee/index', 'refresh');
     // $this->load->view('employee');
    }
  }
	function create()
   {
  
        $this->load->view('add_employee');
        
   }
    function save()
   {
      $code=$this->input->post('code');
      $name=$this->input->post('ename');
      $department=$this->input->post('dep');
      $dob=$this->input->post('dob');
      
      $parts = explode('-',$dob);
$formated_dob = $parts[2] . '-' . $parts[1] . '-' . $parts[0];
      $join=$this->input->post('join');
    $parts = explode('-', $join);
    $formated_join_date = $parts[2] . '-' . $parts[1] . '-' . $parts[0];
      $data=array(
        'code'=>$code,
        'name'=>$name,
        'department'=> $department,
        'dob'=>$dob,
        'join_date'=> $join
      );
    

     $this->EmployeeModel->save($data);
      $this->session->set_flashdata('message', 'Employee Details Successfully Saved.');
      redirect('employee/index', 'refresh');
      // redirect(base_url().'employee');


}
}
?>