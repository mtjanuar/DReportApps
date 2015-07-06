<?php 
$this->load->view('employee_view/template/head');
?>
<!--tambahkan custom css disini-->
<?php
$this->load->view('employee_view/template/topbar');
$this->load->view('employee_view/template/sidebar');
?>
<!-- Content Header (Page header) -->

        <section class="content-header">
          <h1>
            Profile
            <small>My Profile</small>
          </h1>
          
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="box box-primary">
              <br>
              <img style="margin-left: 430px; border: 4px solid #222D32;" src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/img/user2-160x160.jpg')?>" class="img-circle text-center" alt="User Image" align="middle">
              <br><br><br>
                <div class="row">
                <div class="col-md-6">
                    <label style="font-size: 20px; margin-left: 270px;">Name</label><br><br>
                    <label style="font-size: 20px; margin-left: 270px;">Gender</label><br><br>
                    <label style="font-size: 20px; margin-left: 270px;">Phone</label><br><br>
                </div>
                <div class="col-md-6">
                    <label style="font-size: 20px; margin-left: 110px;">Date of Birth</label><br><br>
                    <label style="font-size: 20px; margin-left: 110px;">Email</label><br><br>
                </div>
                </div>
                <br><br>
                <button class="btn btn-block btn-info" style="width: 230px; margin-left: 400px;">Update Profile</button>
                <br>
                <button class="btn btn-block btn-danger" style="width: 230px; margin-left: 400px;">Change Password</button>
                <br>
                <br>
            </div>
          <!-- Your Page Content Here -->

        </section><!-- /.content -->

<?php 
$this->load->view('employee_view/template/js');
?>
<!--tambahkan custom js disini-->
<?php
$this->load->view('employee_view/template/foot');
?>