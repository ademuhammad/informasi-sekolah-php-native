<?php

require 'koneksi11.php';

$id= $_GET["id"];

if ( hapus ($id) > 0 ) {
    header("Location: xi.php");
    echo "
    <script> 
    alert('data berhasil dihapus!!!');
    
    document.location.href = 'xi.php';
    </script>
";
} else {
    echo "
    <script> 
    alert('data gagal dihapus!!!');
    document.location.href = 'xi.php';
    </script>
";
}

?>