<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
  <header class="app-header navbar">
    <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>

    <ul class="nav navbar-nav d-md-down-none">
      <li class="nav-item px-3">
        <a class="nav-link" href="<?php echo base_url('/c_customer/home');?>">Dashboard</a>
      </li>
    </ul>
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <img src="img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="dropdown-header text-center">
            <strong>Account</strong>
          </div>
          <a class="dropdown-item" href="#"><i class="fa fa-bell-o"></i> Updates<span class="badge badge-info">42</span></a>
          <a class="dropdown-item" href="#"><i class="fa fa-envelope-o"></i> Messages<span class="badge badge-success">42</span></a>
          <a class="dropdown-item" href="#"><i class="fa fa-tasks"></i> Tasks<span class="badge badge-danger">42</span></a>
          <a class="dropdown-item" href="#"><i class="fa fa-comments"></i> Comments<span class="badge badge-warning">42</span></a>
          <div class="dropdown-header text-center">
            <strong>Settings</strong>
          </div>
          <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
          <a class="dropdown-item" href="#"><i class="fa fa-wrench"></i> Settings</a>
          <a class="dropdown-item" href="#"><i class="fa fa-usd"></i> Payments<span class="badge badge-secondary">42</span></a>
          <a class="dropdown-item" href="#"><i class="fa fa-file"></i> Projects<span class="badge badge-primary">42</span></a>
          <div class="divider"></div>
          <a class="dropdown-item" href="#"><i class="fa fa-shield"></i> Lock Account</a>
          <a class="dropdown-item" href="#"><i class="fa fa-lock"></i> Logout</a>
        </div>
      </li>
    </ul>

  </header>

  <div class="app-body">
    <div class="sidebar">
      <nav class="sidebar-nav">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/c_customer/home');?>"><i class="icon-speedometer"></i>Vendor Dashboard </a>
          </li>

          <li class="nav-title">
            Menu
          </li>
          <li class="nav-item nav-dropdown">
          <li class="nav-item">
            <a class="nav-link" href="widgets.html"><i class="icon-calculator"></i> Kelola Pesanan </a>
          </li>
          <li class="divider"></li>

        </ul>
      </nav>
      <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>

    <!-- Main content -->
    <main class="main">

      <!-- Breadcrumb -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item"><a href="#">Customer</a></li>
        <li class="breadcrumb-item active">Dashboard</li>

        <!-- Breadcrumb Menu-->
      </ol>

      <div class="container-fluid">
        <div class="animated fadeIn">
             <div class="card-footer">
              <ul>
                <li>
                  <div class="text-muted">Visits</div>
                  <strong>29.703 Users (40%)</strong>
                  <div class="progress progress-xs mt-2">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </li>
                <li class="d-none d-md-table-cell">
                  <div class="text-muted">Unique</div>
                  <strong>24.093 Users (20%)</strong>
                  <div class="progress progress-xs mt-2">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </li>
                <li>
                  <div class="text-muted">Pageviews</div>
                  <strong>78.706 Views (60%)</strong>
                  <div class="progress progress-xs mt-2">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </li>
                <li class="d-none d-md-table-cell">
                  <div class="text-muted">New Users</div>
                  <strong>22.123 Users (80%)</strong>
                  <div class="progress progress-xs mt-2">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </li>
                <li class="d-none d-md-table-cell">
                  <div class="text-muted">Bounce Rate</div>
                  <strong>40.15%</strong>
                  <div class="progress progress-xs mt-2">
                    <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </li>
              </ul>
            </div>
        </div>
      </div>
      <!-- /.conainer-fluid -->
    </main>



  </div>