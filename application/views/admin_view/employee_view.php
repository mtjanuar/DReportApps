<?php 
$this->load->view('template/head');
?>
<!--tambahkan custom css disini-->
<?php
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Blank page
        <small>it all starts here</small>
    </h1>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">List Employee</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            
            
            
            <?php
                $jumlahEmployee = $listEmployee ->num_rows();
            ?>
            
            <table class="table table-bordered table-hover dataTable" >
                <thead>
                    <tr>
                    <th>No.</th>    
                    <th>Employee ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i=1;
                    foreach($listEmployee->result() as $row){
                    ?>
                    
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $row->emp_ID ?></td>
                        <td><?= $row->emp_name ?></td>
                        <td><?= $row->emp_phone ?></td>
                        <td>
							<!-- Akan melakukan update atau delete sesuai dengan id yang diberikan ke controller -->
							<a href="<?= base_url() ?>products/updateProduct/<?= $row->emp_ID ?>">Update</a>
							|
							<a href="<?= base_url() ?>products/deleteProductDb/<?= $row->emp_ID ?>">Delete</a>
						</td>
                    
                    </tr>
                    <?php
                    $i++;
                    }
                    ?>
                </tbody>
            
            
            
            
            
            </table>





        </div><!-- /.box-body -->
        <div class="box-footer">
            Footer
        </div><!-- /.box-footer-->
    </div><!-- /.box -->

</section><!-- /.content -->

<?php 
$this->load->view('template/js');
?>
<!--tambahkan custom js disini-->
<?php
$this->load->view('template/foot');
?>