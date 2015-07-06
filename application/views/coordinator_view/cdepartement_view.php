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
        Departement Profile
        
    </h1>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"></h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
             <?php
                    foreach($query as $row){
                    ?>
            <h3> Departement Name </h3>
            <input class="form-control input-lg" type="text" value="<?= $row->nama ?>" >
            <h3> Description </h3>
            <textarea class="form-control" rows="5" value=""><?= $row->deskripsi ?></textarea><br>
            
            <button class="btn pull-right btn-primary btn-lg">Update Profile</button>
        </div><!-- /.box-body -->
        <div class="box-footer">
           <?php
                    }
            ?>
        </div><!-- /.box-footer-->
    </div><!-- /.box -->

</section><!-- /.content -->

<?php 
$this->load->view('coordinator_view/template/js');
?>
<!--tambahkan custom js disini-->
<?php
$this->load->view('coordinator_view/template/foot');
?>