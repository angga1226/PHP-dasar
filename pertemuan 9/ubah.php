<?php 
require 'funcs.php';

//ambil data di URL
$id = $_GET['ID'];


//query data nasabah
$nass = query("SELECT * FROM nasabah WHERE ID = $id")[0];



if(isset($_POST['submit'])) {


    if(ubah($_POST) > 0 ) {
        echo "
        <script>
            alert('Data Berhasil Diubah')
            document.locatiom.href = 'mysql.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data Gagal Diubah')
            document.locatiom.href = 'mysql.php';
        </script>
        ";
    }
}    
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Updete</title>
    <style type="text/css">
        body {
            background-color: #808080;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">UPDETE</h1>

    <table border="2" cellpadding="15" cellspacing="0" style="background-color: lightblue; margin: auto;">
        <form action="" method="post">
            <input type="hidden" name="ID" value="<?= $nass["ID"]  ?>">    
            <tr>
                <td colspan="3">
                    <label for="12"></label>
                    <input type="text" name="nama" id="12" placeholder="    Username" style="border-radius: 50px; border: none; width: 85%; height: 30px; display: block; margin: auto;" value="<?= $nass["nama"]; ?>">
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <label for="2"></label>
                    <input type="text" name="nomor" id="2" placeholder="    Number" style="border-radius: 50px; border: none; width: 85%; height: 30px; display: block; margin: auto;" value="<?= $nass["nomor"]; ?>">
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <label for="13">Image :</label>
                    <input type="text" name="gambar" id="13" value="<?= $nass["gambar"]; ?>">
                </td>
            </tr>    
            <tr>
                <td colspan="3">
                    <input type="Radio" name="status" id="22" value="Sudah Menikah" value="<?= $nass["status"]; ?>">
                    <label for="22">Sudah Menikah :</label>
                    <input type="Radio" name="status" id="22" value="Belum Menikah" value="<?= $nass["status"]; ?>">
                    <label for="22">Belum Menikah :</label>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <label for="17"></label>
                    <input type="text" name="email" id="17" placeholder="    Email" style="border-radius: 50px; border: none; width: 85%; height: 30px; display: block; margin: auto;" value="<?= $nass["email"]; ?>">
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <button type="submit" name="submit" style="border: none;
                    background-color: salmon;
                    width: 85%;
                    height: 40px;
                    border-radius: 50px;
                    color: white;
                    font-size: 20px;
                    cursor: pointer;
                    display: block;
                    margin: 0 auto;
                    ">Kirim</button>
