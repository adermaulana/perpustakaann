<!-- ========== Library Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="/admin" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="/assets/images/library-logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="/assets/images/library-logo-dark.png" alt="" height="17">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="/admin" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="/assets/images/library-logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="/assets/images/library-logo-light.png" alt="" height="17">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">
                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu Utama</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="/admin">
                                <i class="ri-home-3-line"></i> <span data-key="dashboard">Dasbor</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="/admin/buku">
                                <i class="ri-book-2-fill"></i> <span data-key="databuku">Manajemen Buku</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="/admin/anggota">
                                <i class="ri-user-fill"></i> <span data-key="dataanggota">Data Anggota</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="/admin/peminjaman">
                                <i class="ri-exchange-line"></i> <span data-key="datapeminjaman">Daftar Peminjaman</span>
                            </a>
                        </li>
                        <li class="menu-title"><span data-key="t-menu">Manajemen Akun</span></li>
                        
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="/admin/pustakawan">
                                <i class="ri-add-circle-line"></i> <span data-key="pustakawan">Tambah Akun Pustakawan</span>
                            </a>
                        </li>

                        <li class="menu-title"><span data-key="t-lain">Lain-lain</span></li>
                        <li class="nav-item">
                                <a class="nav-link menu-link" href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="ri-reply-line"></i> <span data-key="logout">Keluar</span>
                                </a>
                                <form id="logout-form" action="/logout" method="post" style="display: none;">
                                    @csrf
                                </form>
                        </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->