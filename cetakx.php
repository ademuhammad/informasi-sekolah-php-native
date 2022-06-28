<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>
    <?php
    require 'koneksi10.php';
    $queryx = mysqli_query($link, "SELECT * FROM x");


    ?>
    <div class="container text-center">
        <h3> Daftar Siswa Kelas X SMA NEGERI 10 SEMITAU </h3>
        <h3 class="text-center"> TAHUN AJARAN 2021/2022 </h3>

        <table class="table table-striped" border="1" style="width: 100%">
            <thead>

                <tr>
                    <th width="1%">No.</th>
                    <th>NISN</th>
                    <th>NAMA </th>
                    <th>JURUSAN</th>
                    <th>ALAMAT</th>

                </tr>
            </thead>
            <!-- untuk no urut pada tabel -->
            <?php $i = 1; ?>
            <!-- pengulangan untuk isi tabel -->
            <?php foreach ($queryx as $row) : ?>
                <tr>
                    <!-- pada no urut tidak menggunakan $row[id] agar no urut tidak berisi id -->
                    <td><?= $i; ?></td>

                    <td><?= $row["nisn"]; ?> </td>
                    <td><?= $row["nama"]; ?></td>
                    <td><?= $row["jurusan"]; ?> </td>
                    <td> <?= $row["alamat"]; ?></td>

                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>


    <script>
        window.print();
    </script>

    <!-- tombol kembali -->
    <div class="container">
        <button type="button" class="btn btn-info mt-5"> <a href="x.php"> KEMBALI </a></button>
    </div>
</body>

</html>