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
        Blank page
        <small>it all starts here</small>
    </h1>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">List Report</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            
            Sort by Departement &nbsp&nbsp
            
            <form action="<?php echo base_url('coordinator/cviewreport/sort_Departement'); ?>" method="post">
            <select name="kode">
               <option value="1011" > All Departement</option>
                <option value="1011" > Dep A</option>
                <option value="1021" > Dep B</option>
            
            </select>
            <input type="submit" name="submit" value="Show">
            <p></p><br><br>
            
            
            <table id="example1" class="table table-bordered table-striped" >
                <thead>
                    <tr>
                    <th>No.</th>    
                    <th>Tittle</th>
                    <th>Date</th>
                    <th>Author</th>
                    <th> Departement</th>
                    <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i=1;
                    if(!empty($query)){
                    foreach($query as $row){
                    ?>
                    
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $row->namaL ?></td>
                        <td><?= $row->tanggal ?></td>
                        <td><?= $row->nama ?></td>
                        <td><?= $row->namaD ?></td>
                        <td><a href="#" class='fa fa-eye'></a> &nbsp&nbsp&nbsp <a href="#" class='fa fa-edit'></a> &nbsp&nbsp&nbsp <a href="#" class='fa fa-times'></a></td>  
                       
                    
                    </tr>
                    <?php
                    $i++;
                    }}else{}
                    ?>
                </tbody>
            
            
            
            
            
            </table>





        </div><!-- /.box-body -->
        <div class="box-footer">
            
        </div><!-- /.box-footer-->
    </div><!-- /.box -->

</section><!-- /.content -->

<?php 
$this->load->view('coordinator_view/template/js');
?>
<script type="text/javascript">
      $(document).ready(function() {
        $("#example1").dataTable();
      });
</script>

<!--tambahkan custom js disini-->
<?php
$this->load->view('coordinator_view/template/foot');
?>