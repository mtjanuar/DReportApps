<aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
           <div class="user-panel">
            <div class="row row-centered">
              <img style=""src="/assets/AdminLTE-2.0.5/dist/img/user2-160x160.jpg" class="img-circle text-center" align="middle" alt="User Image" />
               </div><br>
               <p style="color:white;font-size:18px">Alexander Pierce</p>
               
          </div>

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="<?php echo base_url('index.php/coordinator/cdashboard') ?>"><i class='each-menu fa fa-home'></i> <span>Dashboard</span></a></li>
            <li><a href="<?php echo base_url('index.php/coordinator/cprofile') ?>"><i class='each-menu fa fa-user'></i> <span>Profile</span></a></li>
            <li><a href="<?php echo base_url('index.php/coordinator/cdepartement') ?>"><i class='each-menu fa fa-building'></i> <span>Departement</span></a></li>
            <li><a href="<?php echo base_url('index.php/coordinator/cemployee') ?>"><i class='each-menu fa fa-group'></i> <span>Employee</span></a></li>
            <li class="treeview">
              <a href="#"><i class='each-menu fa fa-file-text'></i> <span>Report</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url('index.php/coordinator/ccreatereport') ?>">Create Report</a></li>
                <li><a href="<?php echo base_url('index.php/coordinator/cviewreport') ?>">View Report</a></li>
              </ul>
            </li>
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">