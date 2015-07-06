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
            <small>Report Menu</small>
          </h1>
          
        </section>

        <!-- Main content -->
        <section class="content">
            <br>
            <br>
                <div class="box box-primary">
                    <br><br><br>
                    <a data-toggle="modal" data-target="#modal_before" style="margin-left: 300px; width: 100px; height: 80px; " class="btn btn-app" onClick="open_container();">
                        <i style="margin-top: 8px;" class="fa fa-plus"></i> Before
                    </a>
                    <a data-toggle="modal" data-target="#modal_progress" style="margin-left: 100px; width: 100px; height: 80px;" class="btn btn-app" onClick="open_container();">
                        <i style="margin-top: 8px;" class="fa fa-plus"></i> On Progress
                    </a>
                    <a data-toggle="modal" data-target="#modal_after" style="margin-left: 100px; width: 100px; height: 80px;" class="btn btn-app" onClick="open_container();">
                        <i style="margin-top: 8px;" class="fa fa-plus"></i> After
                    </a>
                    <br><br><br><br>
                </div>
            
            
            <div id="modal_before" class="modal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Create Report Before</h4>
                  </div>
                  <div class="modal-body">
                    <form role="form">
                        <label>Title</label>
                        <br>
                        <div class="form-group">
                            <textarea class="form-control" name="description" rows="3" placeholder="Enter Description"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="videoBefore">Upload Video</label>
                            <input id="videoBefore" type="file">
                            <p class="help-block">Max 40 MB</p>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            
            <div id="modal_progress" class="modal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Create Report On Progress</h4>
                  </div>
                  <div class="modal-body">
                    <form role="form">
                        <label>Title</label>
                        <br>
                        <div class="form-group">
                            <textarea class="form-control" name="description" rows="3" placeholder="Enter Description"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="videoProgress">Upload Video</label>
                            <input id="videoProgress" type="file">
                            <p class="help-block">Max 40 MB</p>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            
            <div id="modal_after" class="modal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Create Report After</h4>
                  </div>
                  <div class="modal-body">
                    <form role="form">
                        <label>Title</label>
                        <br>
                        <div class="form-group">
                            <textarea class="form-control" name="description" rows="3" placeholder="Enter Description"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="videoAfter">Upload Video</label>
                            <input id="videoAfter" type="file">
                            <p class="help-block">Max 40 MB</p>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          <!-- Your Page Content Here -->

        </section><!-- /.content -->

<?php 
$this->load->view('employee_view/template/js');
?>
<!--tambahkan custom js disini-->
<?php
$this->load->view('employee_view/template/foot');
?>