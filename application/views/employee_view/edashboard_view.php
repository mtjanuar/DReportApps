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
            Dashboard
            <small>Employee's Dashboard</small>
          </h1>
          
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Your Page Content Here -->

        </section><!-- /.content -->

<?php 
$this->load->view('employee_view/template/js');
?>
<!--tambahkan custom js disini-->
<?php
$this->load->view('employee_view/template/foot');
?>