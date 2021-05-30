<?php
$this->load->view('header');
?>


<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-12">
            <?php echo form_open('employee/save'); ?>
            <!-- <form class="form-horizontal" method="post" enctype="multipart/form-data"  action="" -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Add New Employee </strong> Or<strong> Upload CSV</strong>
                    </h3>

                </div>

                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Employee Code</label>
                        <div class="col-md-6 col-xs-12">
                            <div class="input-group">
                                </span></span>
                                <input type="text" name="code" required="" class="form-control" />
                            </div>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Employee Name</label>
                        <div class="col-md-6 col-xs-12">
                            <div class="input-group">
                                </span></span>
                                <input type="text" name="ename" required="" class="form-control" />
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Employee Department</label>
                        <div class="col-md-6 col-xs-12">
                            <div class="input-group">
                                </span></span>
                                <input type="text" name="dep" required="" class="form-control" />
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Date of Birth</label>
                        <div class="col-md-6 col-xs-12">
                            <div class="input-group">
                                </span></span>
                                <input type="date" name="dob" required="" class="form-control dob-date" />
                            </div>

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Joining Date</label>
                        <div class="col-md-6 col-xs-12">
                            <div class="input-group">
                                </span></span>
                                <input type="date" name="join" required="" class="form-control join-date" />
                            </div>

                        </div>
                    </div>

                    <div></div>
                    <div class="panel-footer">

                        <button class="btn btn-primary pull-right" name="submit">Submit</button>
                    </div>
                </div>
                <!-- </form> -->
                <?php echo form_close(); ?>
            </div>
        </div><?php
                $this->load->view('footer');
                ?>

        <script>
            $("input[type=date]").datepicker({
                dateFormat: 'yy-mm-dd',
                onSelect: function(dateText, inst) {
                    $(inst).val(dateText); // Write the value in the input
                }
            });

            // Code below to avoid the classic date-picker
            $("input[type=date]").on('click', function() {
                return false;
            });
        </script>