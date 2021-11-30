<header class="topbar">
    <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header">
            <a class="navbar-brand" href="/dashboard">
                <!-- Logo icon --><b>
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->

                    <!-- Light Logo icon -->
                    <img src="<?= base_url() ?>/assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                </b>
                <!--End Logo icon -->
                <!-- Logo text --><span>

                    <!-- Light Logo text -->
                    <img src="<?= base_url() ?>/assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                </span>
            </a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse ">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            <ul class="navbar-nav my-lg-0">
                <!-- ============================================================== -->
                <!-- Profile -->



                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class=" nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?= base_url() ?>/assets/images/users/1.jpg" alt="user" class="profile-pic m-r-10" /><span><?php echo session()->get('name') ?></span></a>
                </li>

                <ul class="navbar-nav my-lg-0">
                    <!-- ============================================================== -->
                    <!-- Profile -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown " style="padding-left: 200PX; padding-top:15px;">
                        <h2 class="text-white">RUMAH SAKIT UMUM MAGETAN</h2>
                    </li>
                </ul>
            </ul>
        </div>
    </nav>
</header>
<!-- ============================================================== -->
<!-- End Topbar header -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li> <a class="waves-effect waves-dark" href="/dashboard" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="/umum" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">Data Pasien</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="/riwayatumum" aria-expanded="false"><i class="mdi mdi-book-open-variant"></i><span class="hide-menu">Riwayat Sakit <br> Pasien</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="/dokter" aria-expanded="false"><i class="mdi mdi-hospital"></i><span class="hide-menu">Dokter Jaga</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="/poli" aria-expanded="false"><i class="mdi mdi-hospital-building"></i><span class="hide-menu">Spesialis</span></a>
            </ul>



        </nav>

        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <div class="sidebar-footer">
        <!-- item--><a href="#" class="link" data-toggle="tooltip"><i class=""></i></a>

        <!-- item--><a href="/logout" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
        <!-- item--><a href="#" class="link" data-toggle="tooltip"><i class=""></i></a>

    </div>
    <!-- End Bottom points-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor"><?= $nav; ?></h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item active"><?= $nav; ?></li>
                </ol>
            </div>
            <div class="col-md-7 col-4 align-self-center">
                <a href="/register" class="btn waves-effect waves-light btn-info pull-right hidden-sm-down mdi mdi-library-plus"> Tambah Admin </a>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- Row -->