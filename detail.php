<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Data || User</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="logoSekolah.png" type="image/x-icon">
</head>

<body>

    <h1 style="text-align: center;">Data Siswa</h1>

    <div class="btnCreate" style="margin-bottom: 10px;">
        <button>
            <a style="color: black; text-decoration: none;" href="create.php">Tambah Data Siswa</a>
        </button>
    </div>

    <table cellspacing="3" border="1" cellpadding="0" colspan="3" width="100%" style="">

        <thead style="background-color: aquamarine;">
            <th rowspan="4">No</th>
            <th rowspan="4">Id</th>
            <th rowspan="4">Username</th>
            <th rowspan="4">Password</th>
            <th rowspan="4">Foto</th>
            <th rowspan="4" colspan="2">Aksi</th>
        </thead>
        <?php
        include "conn.php";
        $no = 1;
        $data = mysqli_query($conn, "SELECT * FROM siswa");
        while ($fetch = mysqli_fetch_array($data)) { ?>
            <tr>
                <td>
                    <?= $no++; ?>
                </td>
                <td>
                    <?= $fetch['id']; ?>
                </td>
                <td>
                    <?= $fetch['username']; ?>
                </td>
                <td>
                    <?= $fetch['password']; ?>
                </td>

                <td align="center"><img style="width: 150px; " src="foto/<?= $fetch['foto']; ?>"
                        alt="<?= $fetch['foto'] ?>">
                </td>
                <td align="center"><a style="color: #FFBF00; text-decoration: none;"
                        href="update.php?id=<?php echo $fetch['id']; ?>">edit</a>
                </td>
                <td name="hapus" value="hapus" align="center"><a
                        onclick="return confirm('Apa anda sudah yakin?, data akan dihapus permanen')"
                        style="color: red; text-decoration: none;"
                        href="delete.php?id=<?php echo $fetch['id']; ?>">delete</a>
                </td>
            </tr>

        <?php } ?>


    </table>
</body>

</html