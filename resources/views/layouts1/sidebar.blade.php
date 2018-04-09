<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/backend/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->nama }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      @if(Auth::user()->id_role == 1)
      {
        <ul class="sidebar-menu">
            <li class="header">MENU UTAMA</li>
            <li class="">
              <a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-desktop"></i> <span>Tender Monitoring</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="../../index.html"><i class="fa fa-circle-o"></i>Manajemen User</a></li>
                <li><a href="{{ route('setting_vendor.index') }}"><i class="fa fa-circle-o"></i>Manajemen Unit</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-file-archive-o"></i> <span>Penawaran</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
              <li><a href="{{ url('admin/penawaran_bg') }}"><i class="fa fa-circle-o"></i>Bank Garansi</a></li>
                <li><a href=""><i class="fa fa-circle-o"></i>Tunai</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-file-archive-o"></i> <span>Pelaksanaan</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="../../index.html"><i class="fa fa-circle-o"></i>Bank Garansi</a></li>
                <li><a href="{{ route('setting_vendor.index') }}"><i class="fa fa-circle-o"></i>Tunai</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-file-pdf-o"></i> <span>Report</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="../../index.html"><i class="fa fa-circle-o"></i>Manajemen User</a></li>
                <li><a href="{{ route('setting_vendor.index') }}"><i class="fa fa-circle-o"></i>Manajemen Unit</a></li>
                <li><a href="{{ route('setting_vendor.index') }}"><i class="fa fa-circle-o"></i>Manajemen Bandara</a></li>
                <li><a href="{{ route('setting_vendor.index') }}"><i class="fa fa-circle-o"></i>Manajemen Bank</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-archive"></i> <span>Manajemen Data</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('setting_bandara.index') }}"><i class="fa fa-circle-o"></i>Manajemen Bandara</a></li>
                <li><a href="{{ route('setting_unit.index') }}"><i class="fa fa-circle-o"></i>Manajemen Unit</a></li>
                <li><a href="{{ url('admin/setting_proyek') }}"><i class="fa fa-circle-o"></i>Manajemen Proyek</a></li>
                <li><a href="{{ url('admin/setting_profit') }}"><i class="fa fa-circle-o"></i>Manajemen Profit Center</a></li>
                <li><a href="{{ url('admin/setting_bank') }}"><i class="fa fa-circle-o"></i>Manajemen Bank</a></li>
                <li><a href="{{ route('setting_vendor.index') }}"><i class="fa fa-circle-o"></i>Manajemen Vendor</a></li>
              </ul>
            </li>
            <li class="">
              <a href=""><i class="fa fa-user"></i> <span>Setting User</span></a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      }
      @elseif(Auth::user()->id_role == 2)
      {
        <ul class="sidebar-menu">
            <li class="header">MENU UTAMA</li>
            <li class="">
              <a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-file-archive-o"></i> <span>Penawaran</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
              <li><a href="{{ url('admin/penawaran_bg') }}"><i class="fa fa-circle-o"></i>Bank Garansi</a></li>
              <li><a href="{{ url('admin/penawaran_tunai') }}"><i class="fa fa-circle-o"></i>Tunai</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-file-archive-o"></i> <span>Pelaksanaan</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('admin/pelaksanaan_bg') }}"><i class="fa fa-circle-o"></i>Bank Garansi</a></li>
                <li><a href="{{ url('admin/pelaksanaan_tunai') }}"><i class="fa fa-circle-o"></i>Tunai</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-file-pdf-o"></i> <span>Report</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="../../index.html"><i class="fa fa-circle-o"></i>Manajemen User</a></li>
                <li><a href="{{ route('setting_vendor.index') }}"><i class="fa fa-circle-o"></i>Manajemen Unit</a></li>
                <li><a href="{{ route('setting_vendor.index') }}"><i class="fa fa-circle-o"></i>Manajemen Bandara</a></li>
                <li><a href="{{ route('setting_vendor.index') }}"><i class="fa fa-circle-o"></i>Manajemen Bank</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-archive"></i> <span>Manajemen Data</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('admin/setting_bandara') }}"><i class="fa fa-circle-o"></i>Manajemen Bandara</a></li>
                <li><a href="{{ route('setting_unit.index') }}"><i class="fa fa-circle-o"></i>Manajemen Unit</a></li>
                <li><a href="{{ url('admin/setting_proyek') }}"><i class="fa fa-circle-o"></i>Manajemen Proyek</a></li>
                <li><a href="{{ url('admin/setting_profit') }}"><i class="fa fa-circle-o"></i>Manajemen Profit Center</a></li>
                <li><a href="{{ url('admin/setting_bank') }}"><i class="fa fa-circle-o"></i>Manajemen Bank</a></li>
                <li><a href="{{ route('setting_vendor.index') }}"><i class="fa fa-circle-o"></i>Manajemen Vendor</a></li>
              </ul>
            </li>
            <li class="">
              <a href=""><i class="fa fa-user"></i> <span>Setting User</span></a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      }
      @elseif(Auth::user()->id_role == 3)
      {
        <ul class="sidebar-menu">
          <li class="header">MENU UTAMA</li>
            <li class="">
              <a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-desktop"></i> <span>Tender Monitoring</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="../../index.html"><i class="fa fa-circle-o"></i>Manajemen User</a></li>
                <li><a href="{{ route('setting_vendor.index') }}"><i class="fa fa-circle-o"></i>Manajemen Unit</a></li>
              </ul>
            </li>
            <li class="">
              <a href=""><i class="fa fa-user"></i> <span>Setting User</span></a>
            </li>
        </ul>
      }
      @endif
</aside>