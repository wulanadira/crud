<?php
include 'koneksi.php';
$data_edit = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim = '".$_GET['nim']."'");
$result = mysqli_fetch_array($data_edit);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit Data Mahasiswa</title>
</head>
<body>
    <h2>Edit Data Mahasiswa</h2>
    <a href="index.php" style="padding:0.4% 0.8%; background-color:#000000;color:#fff;border-radius 2px;text-decoration:none;">Data Mahasiswa</a><br><br>
    <form action="" method="POST">
        <table>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="nim" value="<?php echo $result['nim'] ?>" required></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php echo $result['nama_lengkap'] ?>" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" value="<?php echo $result['alamat'] ?>" required></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <select name="jenis_kelamin">
                        <option value="<?php echo $result['jenis_kelamin'] ?>"><?php  echo $result['jenis_kelamin'] ?></option>
                        <option value="Laki - laki">Laki - laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Telepon</td>
                <td>:</td>
                <td><input type="text" name="telp" value="<?php echo $result['telepon'] ?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="edit" value="Simpan"></td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['edit'])){
        $update = mysqli_query($conn, "UPDATE mahasiswa SET  nim = '".$_POST['nim']."', 
                                                nama_lengkap = '".$_POST['nama']."',
                                                alamat = '".$_POST['alamat']."', 
                                                jenis_kelamin= '".$_POST['jenis_kelamin']."', 
                                                telepon = '".$_POST['telp']."'
                                                WHERE nim = '".$_GET['nim']."'");
        if($update){
            echo 'berhasil diedit';
            header('location:index.php');
        }else{
            echo 'gagal edit';
        }
    }
    ?>
</body>
</html>