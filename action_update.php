<?php

include "conn.php";

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $folder = './foto/';
    $foto = $_FILES['foto']['name'];
    $source = $_FILES['foto']['tmp_name'];
    move_uploaded_file($source, $folder . $foto);

    $data = mysqli_query($conn, "UPDATE siswa SET username='$user', password='$pass', foto='$foto' WHERE id='$id'");

    if ($data) {
        echo "Data berhasil ditambahkan";
        echo "<a href='index.php'>Lihat</a>";
    } else {
        echo "Data gagal ditambahkan";
        echo "<a href='update.php'>Kembali</a>";
    }
}

?>