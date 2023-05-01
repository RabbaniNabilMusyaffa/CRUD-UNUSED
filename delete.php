<?php
//Koneksi ke database
$server = "localhost";
$username = "root";
$password = "";
$database = "datasiswa";

$conn = new mysqli($server, $username, $password, $database);


if (isset($_GET['id'])) {
    if (empty($_GET['id'])) {
        echo "<b>Data yang dihapus tidak ada</b>";
    } else {
        $delete = mysqli_query($conn, "DELETE FROM siswa WHERE id='$_GET[id]'") or die("Mysql Error : " . mysqli_error($conn));
        if ($delete) {
            echo "Berhasil Hapus Data <br>";
            echo "<a href='index.php'>Kembali</a>";
        }
    }
}
?>