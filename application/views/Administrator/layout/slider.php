<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">      
      <ul class="sidebar-menu">
        <li class="header"><h4 class="text-center">Database Administrator</h4></li>
        <li class="active treeview">
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>            
          </a>          
        </li>
    <li><a href="<?php echo base_url(); ?>index.php/UserControler/Adduser"><i class="fa fa-user"></i> <span>Data User</span></a></li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i>
            <span>Data Stok Material</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">1</span>
            </span>
          </a>
          
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>index.php/UserControler/Searchpart3" ><i class="fa fa-circle-o"></i>Search Part</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/UserControler/Addpart" ><i class="fa fa-circle-o"></i>Add Part</a></li>
			
          </ul>
        </li>                                  
                                                                            
        <li><a href="<?=site_url('Home/Logout')?>"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
 