<?php

include "conn.php";

if (isset($_POST['simpan'])) {
    $folder = './foto/';
    $foto = $_FILES['foto']['name'];
    $source = $_FILES['foto']['tmp_name'];
    move_uploaded_file($source, $folder . $foto);

    $user = $_POST['username'];
    $pass = $_POST['password'];

    $data = mysqli_query($conn, "INSERT INTO siswa SET username='$user', password='$pass', foto='$foto'");

    if ($data) {
        echo "Data berhasil ditambahkan";
        echo "<a href='index.php'>Lihat</a>";
    } else {
        echo "Data gagal ditambahkan";
        echo "<a href='create.php'>Kembali</a>";
    }
}

?>