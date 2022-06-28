<?php

require 'koneksi12.php';

$id= $_GET["id"];

if ( hapus ($id) > 0 ) {
    header("Location: xii.php");
    echo "
    <script> 
    alert('data berhasil dihapus!!!');
    
    document.location.href = 'xii.php';
    </script>
";
} else {
    echo "
    <script> 
    alert('data gagal dihapus!!!');
    document.location.href = 'xii.php';
    </script>
";
}

?>