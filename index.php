<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Data Mahasiswa</title>
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <a href="input.php" style="padding:0.4% 0.8%; background-color:#000000;color:#fff;border-radius 2px;text-decoration:none;">Tambah Data</a><br><br>
    <table border="1" cellspacing="0" width=70%>
        <tr style="text-align:center;font-weight:bold;background-color:#eee;">
            <td>NIM</td>
            <td>Nama Mahasiswa</td>
            <td>Alamat</td>
            <td>Jenis Kelamin</td>
            <td>Telepon</td>
            <td>Opsi</td>
        </tr>
        <?php
        include 'koneksi.php';
        $select = mysqli_query($conn, "SELECT * FROM mahasiswa");
        if(mysqli_num_rows($select) > 0){
        while($hasil = mysqli_fetch_array($select)){
        ?>
        <tr style="text-align:center;">
            <td><?php echo $hasil['nim'] ?></td>
            <td><?php echo $hasil['nama_lengkap'] ?></td>
            <td><?php echo $hasil['alamat'] ?></td>
            <td><?php echo $hasil['jenis_kelamin'] ?></td>
            <td><?php echo $hasil['telepon'] ?></td>
            <td>
                <a href="edit.php?nim=<?php echo $hasil['nim'] ?>">Edit</a> ||
                <a href="delete.php?nim=<?php echo $hasil['nim'] ?>">Delete</a>
            </td>
        </tr>
        <?php } }else{ ?>
            <tr>
                <td colspan="7" align="center">Data Kosong</td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>