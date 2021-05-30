<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
class EmployeeModel extends CI_model
{


    function __construct()
    {
        parent::__construct();
        $this->load->database();

    }
    function catlist()
    {
        $qry = $this->db->query("SELECT * FROM `userdata` ORDER BY id DESC");
        return $qry->result();
    }

    function isIdExist($code)
    {
        $this->db->where('code', $code);
        $query = $this->db->get('userdata');
        if (!empty($query->result_array())) {
            return 1;
        } else {
            return 0;
        }

    }
    function save($data)

    {

    	
    	if($this->db->insert('userdata',$data))
    		{
    			return true;

    		}
    		else
            {

    			return false;
    		}
    
    }
}
?>