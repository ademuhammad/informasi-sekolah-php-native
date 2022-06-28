   <!-- form tambah data -->
   <?php

    require 'koneksi.php';

    $id =$_GET["id"];

    // query data guru
    $guru = query("SELECT * FROM guru WHERE id =$id")[0];

    //cek tombol sudah diubah atau belum
    if (isset($_POST["submit"])) {
      //ambil data dari tiap elemen form 


      //cek data berhasil di tambah atau tidak
      if (ubah($_POST) > 0) {
        echo "
        <script> 
        alert('data berhasil di edit');
        document.location.href = 'pengajar.php';
        </script>
    ";
      } else {
        echo "  <script> 
    alert('data gagal di edit');
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
     <title>Edit Data Guru</title>
   </head>

   <body>


     <form action="" method="post">
        <input type="hidden" name="id" value="<?= $guru["id"]; ?>">
       <!-- new -->
       <div class="container mt-3">
         <div class="card-header text-center">
           Edit Data Guru
         </div>
         <div class="form-group">
           <label for="nip">NIP </label>
           <input type="text" name="nip" class="form-control" id="nip" required
           value="<?= $guru["nip"]; ?>">
         </div>
         <div class="form-group">
           <label>NAMA</label>
           <input type="text" name="nama" class="form-control" id="nama" required
           value="<?= $guru["nama"]; ?>">
         </div>

         <div class="form-group">
           <label for="jabatan">Jabatan : </label>
           <input type="text" name="jabatan" class="form-control" id="jabatan" required
           value="<?= $guru["jabatan"]; ?>">
         </div>
         <div class="form-group">
           <label for="alamat">Alamat : </label>
           <input type="text" name="alamat" class="form-control" id="alamat" required
           value="<?= $guru["alamat"]; ?>">
         </div>

         <button type="submit" name="submit" class="btn btn-success">SIMPAN</button>
         <button type="reset" class="btn btn-warning">RESET</button>


     </form>
     </div>

   </body>

   </html>