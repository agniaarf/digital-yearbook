<html>

<head>
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
    <title>@yield('title')</title>
    @yield('header')
    <script src="https://kit.fontawesome.com/4be914391d.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/4be914391d.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>

</head>


<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <img src="/sudebar.png" width="170" height="150" alt="Responsive image">
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#">Dashboard</a>
                </li>
                <li class="">
                    <div class="d-flex justify-content-between align-items-center" style="width: 100%;">
                        <a href="#homeSubmenu" data-bs-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle  d-flex align-items-center justify-content-between"
                            style="width: 100%;">
                            <span>Sambutan</span>
                            <i class="fa-solid fa-caret-down p-2"></i>
                        </a>
                    </div>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Kepala Sekolah</a>
                        </li>
                        <li>
                            <a href="#">Ketua OSIS</a>
                        </li>
                        <li>
                            <a href="#">Ketua Pelaksana</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Tentang Sekolah </a>
                </li>
                <li>
                <div class="d-flex justify-content-between align-items-center" style="width: 100%;">
                <a href="#pageSubmenu" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle d-flex align-items-center justify-content-between"
                            style="width: 100%;">
                            <span>Profil</span>
                            <i class="fa-solid fa-caret-down p-2"></i>
                            </a>
                      
                    </div>
                    

                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Profil Guru</a>
                        </li>
                        <li>
                            <a href="#">Profil Kelas</a>
                        </li>
                        <li>
                            <a href="#">Profil Siswa</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Ekstrakulikuler</a>
                </li>
                <li>
                    <a href="#">Organisasi</a>
                </li>
                <li>
                    <a href="#">Angket</a>
                </li>
                <li>
                    <a href="#">Fasilitas</a>
                </li>
                <li>
                    <a href="#">Kenangan Siswa</a>
                </li>
            </ul>


        </nav>

        <!-- Page Content  -->
        <div id="content">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn me-2">
                        <i class="fas fa-align-left"></i>
                    </button>

                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="dropdown text-end ms-auto position-static ">
                            <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32"
                                    class="rounded-circle">
                            </a>
                            <ul class="dropdown-menu text-small">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Sign out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>


            <h1 class="text-align-center" style="font-size:50; text-align:center">OUR UNIVERSE</h1>
            <p>Sejatinya, masa SMA ialah masa terindah yang tidak akan pernah terulang lagi. Banyak hal yang akan
                dirindukan dari masa ini, dan untuk mengenang semua hal itu kami mempersembahkan :
                LIFE IN OUR UNIVERSE</p>

        </div>
    </div>
    <footer>
        @yield('footer')
    </footer>
</body>

<html>
