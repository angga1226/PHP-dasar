<?php 
require 'funcs.php';


$id = $_GET['ID'];

if ( hapus($id) > 0 ) {
	        echo "
        <script>
            alert('Data Berhasil Dihapus')
            document.locatiom.href = 'mysql.php';
        </script>
        ";
} else {
	        echo "
        <script>
            alert('Data Gagal Dihapus')
            document.locatiom.href = 'mysql.php';
        </script>
        ";
}

 ?>