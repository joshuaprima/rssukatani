<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <!-- <div class="pull-left image">
          <img src="images/superadmin.png" class="img-circle" alt="User Image">
        </div> -->
        <div class="pull-left info">
          
          <!-- <a><i class="fa fa-circle text-success"></i> Online</a> -->
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <!-- <li class="header">MAIN NAVIGATION</li> -->
        <li>
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="Diklat/Siswa.php">
            <i class="fa fa-laptop"></i> <span>Data Siswa</span>
          </a>
        </li>
        <?php
            if ($_SESSION['unit'] == "Administrator") {
              include 'sidebaradmin.php';
             }
            else {
            }
        ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>