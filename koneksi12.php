<?php 
$link = mysqli_connect("localhost","root","","sma");


function query($query) {
    global $link;
    $result = mysqli_query($link, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result) ) {
        $rows [] = $row;

    }
    return $rows;
}



function tambah($data) {
    global $link;

    $nisn = htmlspecialchars($data["nisn"]);
    $nama = htmlspecialchars($data["nama"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $alamat = htmlspecialchars($data["alamat"]);

     //query insert data
     $query = "INSERT INTO xii VALUES
     ('','$nisn','$nama','$jurusan','$alamat')
 ";
 mysqli_query($link, $query);

 return mysqli_affected_rows($link);

}

function hapus($id) {
    global $link;
    mysqli_query($link, "DELETE FROM xii WHERE id = $id");
    return mysqli_affected_rows($link);
}


function ubah($data) {
    global $link;

    $id = $data["id"];
    $nisn = htmlspecialchars($data["nisn"]);
    $nama = htmlspecialchars($data["nama"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $alamat = htmlspecialchars($data["alamat"]);

     //query insert data
     $query = "UPDATE xii SET
                nisn = '$nisn',
                nama = '$nama',
                jurusan = '$jurusan',
                alamat = '$alamat'
                WHERE id = $id 
                ";
 mysqli_query($link, $query);

 return mysqli_affected_rows($link);   
}


?>