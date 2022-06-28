<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title> Halaman Admin SMA NEGERI 10 SEMITAU </title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style2.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <img src="image/3.jpg" width="50px" height="50px">
                <h3> SMA NEGERI 10 SEMITAU</h3>
            </div>

            <ul class="list-unstyled components">
                <p>WELCOME</p>
                <li>
                    <a href="home.php">Home</a>
                </li>
                <li>
                    <a href="galery.php">Galery</a>
                </li>
                <li>
                    <a href="pengajar.php">Tenaga Pengajar</a>
                </li>

                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Peserta Didik</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="xii.php"> Kelas XII </a>
                        </li>
                        <li>
                            <a href="xi.php">Kelas XI </a>
                        </li>
                        <li>
                            <a href="x.php">Kelas X </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="login.php">Log Out</a>
                </li>
            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content">


            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span> </span>
                </button>



            </div>


            <!-- slide -->
            <div id="carouselExampleCaptions" class="carousel slide mt-3" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="image/1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h4 class="text-dark">Welcome</h4>
                            <p class="text-dark"> SMA NEGERI 10 SEMITAU</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="image/5.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="text-warning">SMA NEGERI 10 SEMITAU </h5>
                            <p class="text-dark">Menjadikan Siswa Yang Bermutu.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="image/6.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="text-dark">BERPRESTASI</h5>
                            <p class="text-warning">Akademik Dan Non Akademik </p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <h2 class="text-center mt-2 text-info">SMA NEGERI 10 SEMITAU</h2>
            <p> SMA NEGERI 10 SEMITAU adalah sebuah Sekolah Menengah Atas yang terletak di Desa Semitau Tengah,Kecamatan Semitau Kabupaten Kapuas Hulu,Kalimantan Barat.
                Sekolah yang mulai dibangun pada tahun 1983 dan selesai pembangunan pada tahun 1987,diresmikan oleh Presiden Indonesia pada saat itu Presiden Soeharto. Memulai
                proses belajar mengajar pada tahun 1988 dengan siswa kelas 1 sebanyak 276 orang. Kemudian ditahun ketiga siswa keseluruhan mencapai 832 siswa dengan tenaga pengajar pada tahun
                itu sebanyak 43 orang. </p>
            <p> Sekarang SMAN 10 Semitau menjadi salah satu sekolah favorit di Kapuas Hulu,dengan berbagai prestasi akademik dan non akademik menjadikan
                nama sekolah menjadi semakin populer. Menjadikan sekolah ini jadi tujuan tiap orang tua dan calon siswa untuk dapat bersekolah di SMAN 10 semitau.</p>
            <div class="line"></div>

            <h2 class="text-info">VISI</h2>
            <p>MENJADI SMA UNGGULAN YANG MENGHASILKAN SUMBER DAYA MANUSIA BERMUTU DAN BERDAYA SAING TINGGI</p>

            <div class="line"></div>

            <h2 class="text-info"> MISI </h2>
            <p> 1. Membangun siswa yang menjunjung tinggi norma agama, budaya bangsa dan budi pekerti luhur.</p>
            <p>2. Menghasilkan siswa yang cerdas, terampil, kompetitif, inovatif, kreatif, dan mandiri serta memiliki jiwa kewirausahaan.</p>
            <p>3. Menyiapkan siswa menjadi tenaga kerja tangguh yang mampu bersaing di tingkat regional maupun global.</p>
            <p>4. Menumbuh kembangkan budaya kerja industri yang berwawasan lingkungan.</p>
            <p> 5. Meningkatkan pelayanan pendidikan dan pengelolaan sekolah melalui layanan prima</p>

            <div class="line"></div>


        </div>





        <!-- jQuery CDN - Slim version (=without AJAX) -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <!-- Popper.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#sidebarCollapse').on('click', function() {
                    $('#sidebar, #content').toggleClass('active');
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });
        </script>
</body>

</html