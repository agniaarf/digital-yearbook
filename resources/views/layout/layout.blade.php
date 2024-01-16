<html>

<head>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
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
    <style>
        /*
    DEMO STYLE
*/

        @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";

        body {
            font-family: 'Poppins', sans-serif;
            background: #fafafa;
        }

        p {
            font-family: 'Poppins', sans-serif;
            font-size: 1.1em;
            font-weight: 300;
            line-height: 1.7em;
            color: #999;
        }

        a,
        a:hover,
        a:focus {
            color: inherit;
            text-decoration: none;
            transition: all 0.3s;
        }

        .navbar {
            padding: 15px 10px;
            background: #fff;
            border: none;
            border-radius: 0;
            margin-bottom: 40px;
            box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        }

        .navbar-btn {
            box-shadow: none;
            outline: none !important;
            border: none;
        }

        .line {
            width: 100%;
            height: 1px;
            border-bottom: 1px dashed #ddd;
            margin: 40px 0;
        }

        /* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */

        .wrapper {
            display: flex;
            width: 100%;
            align-items: stretch;
        }

        #sidebar {
            min-width: 250px;
            max-width: 250px;
            background: #45474B;
            color: #fff;
            transition: all 0.3s;
        }

        #sidebar.active {
            margin-left: -250px;
        }

        #sidebar .sidebar-header {
            display: flex;
            flex-direction: row;
            justify-content: center;
            padding: 20px;
            background: #45474B;
        }

        #sidebar ul.components {
            padding: 20px 0;
            border-bottom: 1px solid #47748b;
        }

        #sidebar ul p {
            color: #fff;
            padding: 10px;
        }

        #sidebar ul li a {
            padding: 10px;
            font-size: 1.1em;
            display: block;
        }

        #sidebar ul li a:hover {
            color: #7386D5;
            background: #fff;
        }

        #sidebar ul li.active>a,
        a[aria-expanded="true"] {
            color: #fff;
            background: #6d7fcc;
        }

        a[data-toggle="collapse"] {
            position: relative;
        }

        .dropdown-toggle::after {
            display: block;
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
        }

        ul ul a {
            font-size: 0.9em !important;
            padding-left: 30px !important;
            background: #6d7fcc;
        }

        ul.CTAs {
            padding: 20px;
        }

        ul.CTAs a {
            text-align: center;
            font-size: 0.9em !important;
            display: block;
            border-radius: 5px;
            margin-bottom: 5px;
        }

        a.download {
            background: #fff;
            color: #7386D5;
        }

        a.article,
        a.article:hover {
            background: #6d7fcc !important;
            color: #fff !important;
        }

        /* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */

        #content {
            width: 100%;
            padding: 20px;
            min-height: 100vh;
            transition: all 0.3s;
        }

        /* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */

        @media (max-width: 768px) {
            #sidebar {
                margin-left: -250px;
            }

            #sidebar.active {
                margin-left: 0;
            }

            #sidebarCollapse span {
                display: none;
            }
        }
    </style>
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
                    <a href="#homeSubmenu" data-bs-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Sambutan</a>
                        {{-- <i class="fa-solid fa-caret-down"></i> --}}
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
                    <a href="#pageSubmenu" data-bs-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Profil</a>
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
            <p>Sejatinya, masa SMA ialah masa terindah yang tidak akan pernah terulang lagi. Banyak hal yang akan dirindukan dari masa ini, dan untuk mengenang semua hal itu kami mempersembahkan : 
LIFE IN OUR UNIVERSE</p>

        </div>
    </div>
    <footer>
        @yield('footer')
    </footer>
</body>

<html>
