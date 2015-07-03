<?php 
$this->load->view('coordinator_view/template/head');
?>
<!--tambahkan custom css disini-->
<?php
$this->load->view('coordinator_view/template/topbar');
$this->load->view('coordinator_view/template/sidebar');
?>
<!-- Content Header (Page header) -->

        <section class="content-header">
          <h1>
            Report
            <small>Create Report</small>
          </h1>
          
        </section>

        <!-- Main content -->
        <section class="content">
            <br>
            <br>
                <div class="box box-primary">
                    <div style="width: 60%; margin-left: 200px;" class="box-header">
                    <br><br>
                    <h3 class="box-title">Create Report</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div style="width: 60%; margin-left: 200px;" class="box-body">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input class="form-control" id="title" placeholder="Enter title" name="title" type="text">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" name="description" rows="3" placeholder="Enter Description"></textarea>
                            </div>
                        </div><!-- /.box-body -->

                        <div style="text-align: right; margin-right: 240px;" class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <br><br><br><br>
                        </div>
                    </form>
                </div>
          <!-- Your Page Content Here -->

        </section><!-- /.content -->

<?php 
$this->load->view('coordinator_view/template/js');
?>
<!--tambahkan custom js disini-->
<?php
$this->load->view('coordinator_view/template/foot');
?>