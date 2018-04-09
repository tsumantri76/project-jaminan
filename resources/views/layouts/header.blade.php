@php
  use Carbon\Carbon;

  $gabung = Auth::user()->created_at;
@endphp
<!-- Logo -->
<nav class="navbar navbar-static-top">
  <div class="container">
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse pull-left hidden-md hidden-xs hidden-sm" id="navbar-collapse">
      <ul class="nav navbar-nav">        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong> TENDER MONITORING </strong> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#"><strong> TENDER ON PROGRES </strong></a></li>
            <li><a href="#"><strong> FINALIZED TENDER </strong></a></li>                     
          </ul>
        </li>        
        <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong> DATA TRANSAKSI </strong> <span class="caret"></span></a>
              <ul class="dropdown-menu multi-level">                                     
                 <li class="dropdown-submenu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong> JAMINAN PENAWARAN </strong> </a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ url('admin/penawaran_tunai') }}"><strong> TUNAI </strong></a></li>
                        <li><a href="{{ url('admin/penawaran_bg') }}"><strong> BANK GARANSI </strong></a></li>
                      </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong> JAMINAN PELAKSANAAN </strong> </a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ url('admin/pelaksanaan_tunai') }}"><strong> TUNAI </strong></a></li>
                          <li><a href="{{ url('admin/pelaksanaan_bg') }}"><strong> BANK GARANSI </strong></a></li>
                      </ul>
                  </li>
              </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong> REPORT </strong> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#"><strong> JAMINAN PENAWARAN </strong></a></li>
            <li><a href="#"><strong> JAMINAN PELAKSANAAN </strong></a></li>                      
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong> MANAJEMEN DATA </strong><span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ url('admin/setting_user') }}"><strong> PENGGUNA </strong></a></li>
            <li><a href="{{ url('admin/setting_bandara') }}"> <strong> BANDARA </strong></a></li>
            <li><a href="{{ url('admin/setting_unit') }}"> <strong> UNIT </strong></a></li>
            <li><a href="{{ url('admin/setting_profit') }}"> <strong> PROFIT CENTER </strong></a></li>
            <li><a href="{{ url('admin/setting_rekening') }}"> <strong> REKENING </strong></a></li>
            <li><a href="{{ url('admin/setting_bank') }}"> <strong> VENDOR </strong></a></li>            
          </ul>
        </li>
      </ul>
      
    </div>
    <!-- /.navbar-collapse -->
    <!-- Navbar Right Menu -->
    <div class="navbar-custom-menu hidden-xs hidden-sm">
      <ul class="nav navbar-nav">       
        <!-- User Account Menu -->
        <li class="dropdown user user-menu">
          <!-- Menu Toggle Button -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <!-- The user image in the navbar-->
            <img src="/frontend/images/img_header/profil.png" class="user-image" alt="User Image">
            <!-- hidden-xs hides the username on small devices so only the image appears. -->
            <span class="hidden-xs"><strong>{{ Auth::user()->nama }} </strong></span>
          </a>
          <ul class="dropdown-menu">
            <!-- The user image in the menu -->
            <li class="user-header">
              <img src="/frontend/images/img_header/profil.png" class="img-circle" alt="User Image">
              <p>
                {{ Auth::user()->nama }}
                <small>Bergabung pada : {{ $gabung->format('h-m-Y') }}</small>
              </p>
            </li>            
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Ubah Password</a>
              </div>
              <div class="pull-right">
                <a href="{{ url('/logout') }}" class="btn btn-default btn-flat">Keluar</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.navbar-custom-menu -->
  </div>
  <!-- /.container-fluid -->
</nav>