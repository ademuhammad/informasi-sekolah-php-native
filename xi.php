<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title> SMA NEGERI 10 SEMITAU </title>

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
                    <a href="pengajar.php">PENGAJAR</a>
                </li>

                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Peserta Didik</a>
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


            <div class="container">
                <button type="button" class="btn btn-info mt-3"> <a href="tambah11.php"> Tambah Siswa </a></button>
            </div>

            <!-- data siswa -->

            <!-- form tampil data -->
            <?php
            require 'koneksi11.php';
            $queryxi = mysqli_query($link, "SELECT * FROM xi");


            ?>
            <div class="container">
                <h3 class="text-center mt-3"> Daftar Siswa Kelas XI SMA NEGERI 10 SEMITAU </h3>
                <h3 class="text-center"> TAHUN AJARAN 2021/2022 </h3>

                
                <!-- tabel -->
                <table class="table table-striped">
                    <thead>

                        <tr>
                            <th>No.</th>
                            <th>NISN</th>
                            <th>NAMA </th>
                            <th>JURUSAN</th>
                            <th>ALAMAT</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <!-- untuk no urut pada tabel -->
                    <?php $i = 1; ?>
                    <!-- pengulangan untuk isi tabel -->
                    <?php foreach ($queryxi as $row) : ?>
                        <tr>
                            <!-- pada no urut tidak menggunakan $row[id] agar no urut tidak berisi id -->
                            <td><?= $i; ?></td>

                            <td><?= $row["nisn"]; ?> </td>
                            <td><?= $row["nama"]; ?></td>
                            <td><?= $row["jurusan"]; ?> </td>
                            <td> <?= $row["alamat"]; ?></td>
                            <td>
                                <a href="edit11.php?id=<?= $row["id"]; ?>" class="btn btn-sm btn-warning">EDIT</a>
                                <a href="hapusxi.php?id=<?= $row["id"]; ?>" class="btn btn-sm btn-danger" onclick=" return confirm('yakin ingin hapus?');">HAPUS</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>

                </table>
            </div>

            <!-- tombol cetak -->

            <div class="container">
                <button type="button" class="btn btn-info mt-3"> <a href="cetakxi.php"> CETAK </a></button>
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