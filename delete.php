<?php
include 'koneksi.php';
if(isset($_GET['nim'])){
    $delete = mysqli_query($conn, "DELETE FROM mahasiswa WHERE nim = '".$_GET['nim']."' " );
    header('location:index.php');
}
?>