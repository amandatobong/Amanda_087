<?php
include("config.php");

if (isset($_GET['kdpasien'])) {

    $kdpasien = $_GET['kdpasien'];
    $sql ="DELETE FROM pasien WHERE kdpasien=$kdpasien";
    $query = mysqli_query($db, $sql);

    if($query){
        header('Location: list2.php');
    } else {
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
}
?>