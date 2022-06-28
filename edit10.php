   <!-- form tambah data -->
   <?php

    require 'koneksi10.php';

    $id =$_GET["id"];

    // query data x
    $x = query("SELECT * FROM x WHERE id =$id")[0];

    //cek tombol sudah diubah atau belum
    if (isset($_POST["submit"])) {
      //ambil data dari tiap elemen form 


      //cek data berhasil di tambah atau tidak
      if (ubah($_POST) > 0) {
        echo "
        <script> 
        alert('data berhasil di edit');
        document.location.href = 'x.php';
        </script>
    ";
      } else {
        echo "  <script> 
    alert('data gagal di edit');
    document.location.href = 'x.php';
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
     <title>Edit Data Siswa</title>
   </head>

   <body>


     <form action="" method="post">
        <input type="hidden" name="id" value="<?= $x["id"]; ?>">
       <!-- new -->
       <div class="container mt-3">
         <div class="card-header text-center">
           Edit Data Guru
         </div>
         <div class="form-group">
           <label for="nisn">NISN :  </label>
           <input type="text" name="nisn" class="form-control" id="nisn" required
           value="<?= $x["nisn"]; ?>">
         </div>
         <div class="form-group">
           <label>NAMA : </label>
           <input type="text" name="nama" class="form-control" id="nama" required
           value="<?= $x["nama"]; ?>">
         </div>

         <div class="form-group">
           <label for="jurusan">Jurusan : </label>
           <select type="text" name="jurusan" class="form-control" id="jurusan" required
           value="<?= $x["jurusan"]; ?>">
           <option> IPA 1 </option>
           <option> IPA 2 </option>
           <option> IPA 3 </option>
           <option> IPS 1 </option>
           <option> IPS 2 </option>
           <option> IPS 2 </option>
           </select>
         <div class="form-group">
           <label for="alamat">Alamat : </label>
           <input type="text" name="alamat" class="form-control" id="alamat" required
           value="<?= $x["alamat"]; ?>">
         </div>

         <button type="submit" name="submit" class="btn btn-success">SIMPAN</button>
         <button type="reset" class="btn btn-warning">RESET</button>


     </form>
     </div>

   </body>

   </html>