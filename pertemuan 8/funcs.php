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
;
              mysqli_query($conn, $query);

            return mysqli_affected_rows($conn);  

}


function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM nasabah WHERE ID = $id");

    return mysqli_affected_rows($conn); 
}






?>
