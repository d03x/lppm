<div class="main-header" data-background-color="purple">
    <!-- Logo Header -->
    <div class="logo-header">
        
        <a href="index.html" class="logo">
            <img src="{{ asset('admin-assets/img/logoazzara.svg') }}" alt="navbar brand" class="navbar-brand">
        </a>
        <button class="ml-auto navbar-toggler sidenav-toggler" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="fa fa-bars"></i>
            </span>
        </button>
        <button class="topbar-toggler more"><i class="fa fa-ellipsis-v"></i></button>
        <div class="navbar-minimize">
            <button class="btn btn-minimize btn-rounded">
                <i class="fa fa-bars"></i>
            </button>
        </div>
    </div>
    <!-- End Logo Header -->

    <!-- Navbar Header -->
    <nav class="navbar navbar-header navbar-expand-lg">
        
        <div class="container-fluid">
           
            <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
             
                <li class="nav-item dropdown hidden-caret">
                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                        <div class="avatar-sm">
                            <img src="../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-user animated fadeIn">
                        <li>
                            <div class="user-box">
                                <div class="avatar-lg"><img src="{{ asset('admin-assets') }}/img/profile.jpg" alt="image profile" class="rounded avatar-img"></div>
                                <div class="u-text">
                                    <h4>{{ auth()->user()->name }}</h4>
                                    <p class="text-muted">{{ auth()->user()->email }}</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Inbox</a>
                        </li>
                    </ul>
                </li>
                
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
</div>

<!-- Sidebar -->
<div class="sidebar">
    
    <div class="sidebar-background"></div>
    <div class="sidebar-wrapper scrollbar-inner">
        <div class="sidebar-content">
         
            <ul class="nav">
                <li class="nav-item">
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                        <span class="badge badge-count">5</span>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">MENU UTAMA</h4>
                </li>

                <li class="nav-item">
                    <a data-toggle="collapse" href="#base">
                        <i class="fas fa-layer-group"></i>
                        <p>Modul Berita</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="base">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.berita.index') }}">
                                    <span class="sub-item">List Berita</span>
                                </a>
                            </li>
                            <li>
                                <a href="components/avatars.html">
                                    <span class="sub-item">Tambah Berita</span>
                                </a>
                            </li>
                            <li>
                                <a href="components/buttons.html">
                                    <span class="sub-item">Sstatistik</span>
                                </a>
                            </li> 
                        </ul>
                    </div>
                </li>
              
                <li class="nav-item">
                    <a data-toggle="collapse" href="#pengumuman">
                        <i class="fas fa-layer-group"></i>
                        <p>Modul Pengumuman</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="pengumuman">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="components/avatars.html">
                                    <span class="sub-item">List Pengumuman</span>
                                </a>
                            </li>
                            <li>
                                <a href="components/avatars.html">
                                    <span class="sub-item">Tambah Pengumuman</span>
                                </a>
                            </li>                           
                        </ul>
                    </div>
                </li>
                
                <li class="nav-item">
                    <a href="widgets.html">
                        <i class="fas fa-desktop"></i>
                        <p>Pengaturan Web</p>
                    </a>
                </li>
               
                <li class="nav-item">
                    <a href="widgets.html">
                        <i class="fas fa-download"></i>
                        <p>Download</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="widgets.html">
                        <i class="fas fa-desktop"></i>
                        <p>Penelitian</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->