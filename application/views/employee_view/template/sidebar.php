<aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
           <div class="user-panel">
            <div class="row row-centered">
              <img style=""src="<?php echo base_url('assets/AdminLTE-2.0.5/dist/img/user2-160x160.jpg')?>" class="img-circle text-center" align="middle" alt="User Image" />
               </div><br>
               <p style="color:white;font-size:18px"><?php echo $this->session->userdata('username') ?></p>
               
          </div>

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            
            <!-- Optionally, you can add icons to the links -->
            <li><a href="#"><i class='fa fa-home'></i> <span>Dashboard</span></a></li>
            <li><a href="<?=site_url('index.php/employee/ereport/profile_user')?>"><i class='fa fa-user'></i> <span>Profile</span></a></li>
            <li class="treeview">
              <a href=""><i class='fa fa-file-text'></i> <span>Report</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?=site_url('index.php/employee/ereport/create_laporan')?>">Create Report</a></li>
                <li><a href="<?=site_url('index.php/employee/ereport/view_laporan')?>">View Report</a></li>
              </ul>
            </li>
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">