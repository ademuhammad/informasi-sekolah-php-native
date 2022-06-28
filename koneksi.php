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

    $nip = htmlspecialchars($data["nip"]);
    $nama = htmlspecialchars($data["nama"]);
    $jabatan = htmlspecialchars($data["jabatan"]);
    $alamat = htmlspecialchars($data["alamat"]);

     //query insert data
     $query = "INSERT INTO guru VALUES
     ('','$nip','$nama','$jabatan','$alamat')
 ";
 mysqli_query($link, $query);

 return mysqli_affected_rows($link);

}

function hapus($id) {
    global $link;
    mysqli_query($link, "DELETE FROM guru WHERE id = $id");
    return mysqli_affected_rows($link);
}


function ubah($data) {
    global $link;

    $id = $data["id"];
    $nip = htmlspecialchars($data["nip"]);
    $nama = htmlspecialchars($data["nama"]);
    $jabatan = htmlspecialchars($data["jabatan"]);
    $alamat = htmlspecialchars($data["alamat"]);

     //query insert data
     $query = "UPDATE guru SET
                nip = '$nip',
                nama = '$nama',
                jabatan = '$jabatan',
                alamat = '$alamat'
                WHERE id = $id 
                ";
 mysqli_query($link, $query);

 return mysqli_affected_rows($link);   
}

?>