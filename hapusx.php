<?php

require 'koneksi10.php';

$id= $_GET["id"];

if ( hapus ($id) > 0 ) {
    header("Location: x.php");
    echo "
    <script> 
    alert('data berhasil dihapus!!!');
    
    document.location.href = 'x.php';
    </script>
";
} else {
    echo "
    <script> 
    alert('data gagal dihapus!!!');
    document.location.href = 'x.php';
    </script>
";
}

?>