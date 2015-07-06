<?php 
$this->load->view('admin_view/template/head');
?>
<!--tambahkan custom css disini-->
<?php
$this->load->view('admin_view/template/topbar');
$this->load->view('admin_view/template/sidebar');
?>

<section class="content-header">
    <h1>
        Welcome, Admin
    </h1>
          
</section>

    <!-- Main content -->
<section class="content">

  <!-- Your Page Content Here -->

</section><!-- /.content -->

<?php 
$this->load->view('coordinator_view/template/js');
?>
<!--tambahkan custom js disini-->
<?php
$this->load->view('coordinator_view/template/foot');
?>