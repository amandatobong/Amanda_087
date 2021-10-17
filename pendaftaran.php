<?php
include("config.php");

if(isset($_POST['daftar'])){

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];

    $sql = "INSERT INTO pasien (nama, alamat, no_hp) VALUE 
    ('$nama','$alamat','$no_hp')";
    $query = mysqli_query($db, $sql);

    if($query) {
        header('Location: HOME2.php?status=sukses');

    } else {
        header('Location: HOME2.php?status=gagal');
    }
} else {
    die("Akses Dilarang....");
}
?>
