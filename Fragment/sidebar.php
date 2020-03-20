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
        <li class="treeview">
          <a href="#">
            <i class="fa fa-database"></i>
            <span>Inventory</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="newInventory.php"><i class="fa fa-dropbox"></i> New Inventory</a></li>
            <li><a href="inventoryList.php"><i class="fa fa-cubes"></i> Inventory List</a></li>
            <li><a href=""><i class="fa fa-folder"></i> Manage Request</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-exchange"></i>
            <span>Transaction</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-cart-plus"></i>Request Items</a></li>
            <li><a href=""><i class="fa fa-suitcase"></i> Request List</a></li>
          </ul>
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