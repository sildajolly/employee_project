    <?php
    $this->load->view('header');
    ?>

    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">

            <?php
            $this->load->helper('url');
            echo anchor('employee/create', 'Employee Create', ['class' => 'btn btn-success']);
            ?>
            
            <!-- <a class="btn btn-success" href="<?php base_url('employee/create'); ?>">
                Employee Create
            </a> -->
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Employee List
        </div>
        <div class="card">
            <div class="card-header">

            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class=" table table-bordered table-striped table-hover datatable datatable-Category">
                        <thead>
                            <tr>
                                
                                <th>
                                    Code
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Department
                                </th>
                                <th>
                                    Age
                                </th>
                                <th>
                                    Experience
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($employee as $emp) {

                            ?>
                                <tr data-entry-id="<?php $emp->code; ?>">
                                    <td>
                                        <?php echo $emp->code; ?>
                                    </td>
                                    <td>
                                        <?php echo $emp->name; ?>
                                    </td>
                                    <td>
                                        <?php echo $emp->department; ?>
                                    </td>
                                    <td>
                                        <?php

                                //         $userDob = $emp->dob;
                                //         $dob = strtotime("$userDob");
                                //         $now = new DateTime();
                                //        $difference = $now - $dob;

                                // //There are 31556926 seconds in a year.
                                // $age = floor($difference / 31556926);
                                        echo $emp->dob; ?>

                                    </td>
                                    <td>
                                        <?php echo $emp->join_date; ?>
                                    </td>



                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>




                    <?php
                    $this->load->view('footer');
                    ?>