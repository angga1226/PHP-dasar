<?php 
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;

    $username = htmlspecialchars($data["nama"]);
    $no_pembelian = htmlspecialchars($data["nomor"]);
    $email = htmlspecialchars($data["email"]);
    $status = htmlspecialchars($data["status"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO nasabah (nama, nomor, email, status, gambar) 
          VALUES ('$username', '$no_pembelian', '$email', '$status', '$gambar')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);  
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM nasabah WHERE ID = $id");

    return mysqli_affected_rows($conn); 
}

function ubah($data)
{
    global $conn;

    $id = $data["ID"];   
    $username = htmlspecialchars($data["nama"]);
    $no_pembelian = htmlspecialchars($data["nomor"]);
    $email = htmlspecialchars($data["email"]);
    $status = htmlspecialchars($data["status"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "UPDATE nasabah SET
                    nama = '$username',
                    nomor = '$no_pembelian',
                    email = '$email',
                    status = '$status',
                    gambar = '$gambar'
             WHERE ID = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);   
}
?>
