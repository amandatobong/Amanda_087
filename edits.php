<?php
include("config.php");

if(isset($_POST['simpan'])){

    
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];

    $sql = "UPDATE pasien SET nama='$nama', 
    alamat= '$alamat', no_hp= '$no_hp' WHERE kdpasien=$kdpasien";
    $query = mysqli_query($db, $sql);

    if($query) {
        header('Location: list2.php');
    } else {
        dic("Gagal menyimpan perubahan...");
    }

}else{
    die("Akses dilarang...");
}

?>