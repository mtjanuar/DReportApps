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
            Report
            <small>View Report</small>
          </h1>
            
        </section>
          
        <!-- Main content -->
        <section class="content">                
           <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Your Report</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; ?>
                        <?php foreach($query as $row){ ?> 
                      <tr>
                        <td><?=$no?></td>
                        <td><?php echo $row->judul_laporan; ?></td>
                        <td><?php echo $row->deskripsi; ?></td>
                        <td><?php echo $row->tgl; ?></td>
                        <td><a href="#" class='fa fa-eye'></a> &nbsp&nbsp&nbsp <a href="#" class='fa fa-edit'></a> &nbsp&nbsp&nbsp <a href="#" class='fa fa-times'></a></td>  
                      </tr>
                        <?php $no++; }?>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
          <!-- Your Page Content Here -->

        </section><!-- /.content -->

<?php 
$this->load->view('employee_view/template/js');
?>
<script type="text/javascript">
      $(document).ready(function() {
        $("#example1").dataTable();
      });
</script>
<!--tambahkan custom js disini-->
<?php
$this->load->view('employee_view/template/foot');
?>