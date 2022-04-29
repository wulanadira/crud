<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Input Data</title>
</head>
<body>
    <h2>Input Data Mahasiswa</h2>
    <a href="index.php" style="padding:0.4% 0.8%; background-color:#000000;color:#fff;border-radius 2px;text-decoration:none;">Data Mahasiswa</a><br><br>
    <form action="" method="POST">
        <table>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="nim" placeholder="NIM" required></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="nama" placeholder="Nama Lengkap" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" placeholder="Alamat" required></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <select name="jenis_kelamin">
                        <option value="Laki - laki">Laki - laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td>:</td>
                <td><input type="text" name="telp" placeholder="Telepon" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="simpan" value="Simpan"></td>
            </tr>
        </table>
    </form>

    <?php
    include 'koneksi.php';
    if(isset($_POST['simpan'])){
    $insert = mysqli_query($conn, "INSERT INTO mahasiswa VALUES 
                        ('".$_POST['nim']."',
                        '".$_POST['nama']."',
                        '".$_POST['alamat']."',
                        '".$_POST['jenis_kelamin']."',
                        '".$_POST['telp']."')");
        if($insert){
            echo 'berhasil disimpan';
            header('location:index.php');
        }else{
            echo 'gagal disimpan';
        }
    }
    ?>
</body>
</html>