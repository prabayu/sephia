 <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
          <!-- <img src="http://10.194.7.73/maincc147/images/avatars/gallery/089.gif" class="img-circle" alt="User Image" /> -->
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('user2');?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> <?php echo $this->session->userdata('stts');?></a>
        </div>
      </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">MAIN NAVIGATION</li>
          <li>
            <a href="<?=base_url('agent');?>">
              <i class="fa fa-dashboard"></i> <span>Home</span>
            </a>
          </li>
             <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Data tiket</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class=""><a href="<?=base_url('agent/create');?>"><i class="fa fa-circle-o"></i> Input data</a></li>
                <li class=""><a href="<?=base_url('agent/list_dt');?>"><i class="fa fa-circle-o"></i> List data</a></li>
              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <?php echo $judul; ?>
            <small><?php echo $sub_judul; ?></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> <?php echo $judul; ?></a></li>
            <li class="active"><?php echo $sub_judul; ?></li>
          </ol>
        </section>
        
     <!--  -->