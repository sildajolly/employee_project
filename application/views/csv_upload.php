<?php
$this->load->view('header');
?>


<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">
            <?php echo form_open_multipart('employee/savefile'); ?>
            <!-- <form class="form-horizontal" method="post" enctype="multipart/form-data"  action="" -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>CSV</strong> File Upload<strong>
                    </h3>

                </div>

                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Upload Employee Details File</label>
                        <div class="col-md-6 col-xs-12">
                            <div class="input-group">
                                </span></span>
                                <input type="file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" name="employeeFile"  class="form-control" />
                                <!-- <input type="text" name="code" required="" class="form-control" /> -->
                            </div>

                        </div>
                    </div>





                    <div></div>
                    <div class="panel-footer">

                        <button class="btn btn-primary pull-right" name="submit">Upload</button>
                    </div>
                </div>
                <!-- </form> -->
                <?php echo form_close(); ?>
            </div>
        </div><?php
                $this->load->view('footer');
                ?>