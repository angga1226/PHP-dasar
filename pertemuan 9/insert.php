<?php 
// $conn = mysqli_connect("localhost", "root", "", "phpdasar");

require 'funcs.php';


//cek tombol submit pernah ditekan apa belum
if(isset($_POST['submit'])) {
    // $username = $_POST["nama"];
    // $no_pembelian = $_POST["nomor"];
    // $email = $_POST["email"];
    // $status = $_POST["status"];
    // $gambar = $_POST["gambar"];

    // $query = "INSERT INTO nasabah (nama, nomor, email, status, gambar) 
    //       VALUES ('$username', '$no_pembelian', '$email', '$status', '$gambar')";

    
    // mysqli_query($conn, $query);

    // if (mysqli_affected_rows($conn) > 0) {
    //     echo "Data Berhasil Dikirim";
    // } else {
    //     echo "Data Gagal Terkirim";
    //     echo "<br>";
    //     echo mysqli_error($conn);
    // }
}    
//cek apakah data berhasil ditambahkan apa tidak

    if(tambah($_POST) > 0 ) {
        echo "
        <script>
            alert('Data Berhasil Dikirim')
            document.locatiom.href = 'mysql.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data Gagal Dikirim')
            document.locatiom.href = 'mysql.php';
        </script>
        ";
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
    <style type="text/css">
        body {
            background-color: #fdbb2d;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">SIGN UP</h1>

    <table border="2" cellpadding="15" cellspacing="0" style="background-color: lightblue; margin: auto;">
        <form action="" method="post">
            <tr>
                <td colspan="3">
                    <label for="12">Username :</label>
                    <input type="text" name="nama" id="12">
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <label for="2">Number :</label>
                    <input type="text" name="nomor" id="2">
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <label for="13">Image :</label>
                    <input type="text" name="gambar" id="13">
                </td>
            </tr>    
            <tr>
                <td colspan="3">
                    <input type="Radio" name="status" id="22" value="Sudah Menikah">
                    <label for="22">Sudah Menikah :</label>
                    <input type="Radio" name="status" id="22" value="Belum Menikah">
                    <label for="22">Belum Menikah :</label>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <label for="17">Email :</label>
                    <input type="text" name="email" id="17">
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
