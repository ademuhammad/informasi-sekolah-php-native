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
          <a href="pengajar.php">Tenaga Pengajar</a>
        </li>

        <li>
          <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Peserta Didik</a>
          <ul class="collapse list-unstyled" id="pageSubmenu">
            
            <li>
              <a href="xii.php"> Kelas XII  </a>
            </li>
            <li>
              <a href="xi.php">Kelas XI </a>
            </li>
            <li>
              <a href="x.php">Kelas X  </a>
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

      <h3 class="mt-3 mb-3 text-center">Galery SMA NEGERI 10 SEMITAU </h3>
      <div class="row row-cols-1 row-cols-md-3">
        <div class="col mb-4">
          <div class="card">
            <img src="image/7.jpg" width="200px" height="200px" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Bus Sekolah</h5>
              <p class="card-text"></p>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card">
            <img src="image/8.jpg" width="200px" height="200px" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Gedung Olahraga SMA N 10 SEMITAU</h5>
              <p class="card-text"></p>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card">
            <img src="image/9.jpg" width="200px" height="200px" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Ruang Kelas</h5>
              <p class="card-text">.</p>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card">
            <img src="image/10.jpg" width="200px" height="200px" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Ruang Baca</h5>
              <p class="card-text"> </p>
            </div>
          </div>
        </div>
      </div>

      <div class="row row-cols-1 row-cols-md-3">
        <div class="col mb-4">
          <div class="card">
            <img src="image/f.jpg" width="200px" height="200px" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Juara Futsal Antar SMA tingkat Provinsi Kalbar</h5>
              <p class="card-text"></p>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card">
            <img src="image/e.jpg" width="200px" height="200px" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Siswa SMAN 10 SEMITAU menjurai Olimpiade SAINS tingkat Provinsi Kalbar</h5>
              <p class="card-text"></p>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card">
            <img src="image/d.jpg" width="200px" height="200px" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"> Kegiatan Pramuka SMAN 10 SEMITAU</h5>
              <p class="card-text">.</p>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card">
            <img src="image/a.jpg" idth="200px" height="200px" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Siswa SMAN 10 SEMITAU mengikuti PASKIBRA Kabupaten Kapuas Hulu  Baca</h5>
              <p class="card-text"> </p>
            </div>
          </div>
        </div>
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