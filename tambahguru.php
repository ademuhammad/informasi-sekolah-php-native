   <!-- form tambah data -->
   <?php

    require 'koneksi.php';


    //cek tombol sudah ditekan atau belum
    if (isset($_POST["submit"])) {
      //ambil data dari tiap elemen form 


      //cek data berhasil di tambah atau tidak
      if (tambah($_POST) > 0) {
        echo "
        <script> 
        alert('data berhasil ditambah');
        document.location.href = 'pengajar.php';
        </script>
    ";
      } else {
        echo "  <script> 
    alert('data gagal di tambah');
    document.location.href = 'pengajar.php';
    </script> 
     ";
      }
    }
    ?>

   <!DOCTYPE html>
   <html lang="en">

   <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <title>Tambah Data Mahasiswa</title>
   </head>

   <body>


     <form action="" method="post">



       <!-- new -->
       <div class="container mt-3">
         <div class="card-header text-center">
           Tambah Data Guru
         </div>
         <div class="form-group">
           <label for="nip">NIP </label>
           <input type="text" name="nip" class="form-control" id="nip" required>
         </div>
         <div class="form-group">
           <label>NAMA</label>
           <input type="text" name="nama" class="form-control" id="nama" required>
         </div>

         <div class="form-group">
           <label for="jabatan">Jabatan : </label>
           <input type="text" name="jabatan" class="form-control" id="jabatan" required>
         </div>
         <div class="form-group">
           <label for="alamat">Alamat : </label>
           <input type="text" name="alamat" class="form-control" id="alamat" required>
         </div>

         <button type="submit" name="submit" class="btn btn-success">SIMPAN</button>
         <button type="reset" class="btn btn-warning">RESET</button>


     </form>
     </div>

   </body>

   </html>