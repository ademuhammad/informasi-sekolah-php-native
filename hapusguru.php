<?php

require 'koneksi.php';

$id= $_GET["id"];

if ( hapus ($id) > 0 ) {
    header("Location: pengajar.php");
    echo "
    <script> 
    alert('data berhasil dihapus');
    
    document.location.href = 'pengajar.php';
    </script>
";
} else {
    echo "
    <script> 
    alert('data gagal dihapus');
    document.location.href = 'pengajar.php';
    </script>
";
}

?>
