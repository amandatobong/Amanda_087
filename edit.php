<?php
include("config.php");

if(!isset($_GET['kdpasien'])){
    header('location: list2.php');
}

$kdpasien = $_GET['kdpasien'];
$sql ="SELECT * FROM pasien WHERE kdpasien=$kdpasien";
$query = mysqli_query($db, $sql);
$pasien = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan....");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles2.css">
    <title>KLINIK</title>
    <style type="text/css">
    html, body,
    ul, ol, li,
    h1, h2, h3, h4, h5, h6, p, div {
    margin: 0;
    padding: 0;
    }
    body {
     font-family: "Lucida Grande";
     background-color: #ecf39e;
    }
    li {
     list-style: none;
    }

    a {
     text-decoration: none;
    }
    
    header {
    height: 65px;
    width: 100%;
    background-color: #4f772d;
    /* Ubah position ke fixed, dan top ke 0 */
    position: fixed;
    top: 0;
    z-index: 10;
    /* Ubah z-index ke 10 */
    
    }

    .logo {
    width: 124px;
    margin-top: 0px;
    }

    .header-left {
    float: left;
    }

    .header-right {
    float: right;
    background-color: rgba(255, 255, 255, 0.3);
    transition: all 0.5s;
    }

    .header-right:hover {
    background-color: rgba(255, 255, 255, 0.5);
    }

    .header-right a {
    line-height: 65px;
    padding: 0 25px;
    color: black;
    display: block;
    }
    .sub-header {
    float: left;
    transition: all 0.5s;
    }
    .sub-header li:hover {
    background-color: rgba(255, 255, 255, 0.5);
    }
    .sub-header ul {
    line-height: 65px;
    padding: 0 25px;
    
    }
    .sub-header li {
        display: inline-block;
        color: black;
        background-color: #4f772d;
        padding: 0 10px;
        margin-left: 10px;
    }
    .sub-header li a {
        color: white;
    }
    h2 {
        margin-top: 70px;
        text-align: center;
        margin-bottom: 10px;
        color: #132a13;
    }
    form {
        margin: 0 25%;
    }
    .pure-form label {
    margin: 20px 20px;
    font-weight: bold;
    font-size: 100%;
}

.pure-form input[type]  {
    border: 2px solid #ddd;
    box-shadow: none;
    font-size: 100%;
    width: 75%;
    margin-bottom: 1em;
    
    
}
.submit-button{
    background-color: #132a13;
    color: #ecf39e;
    border-radius:20px;
    text-align: center;
}



.content{
    margin: 100px 100px;
    float: center;
}

.content p{
    margin-top: 15px;
}

    </style>
</head>
<body>
<header>
      <div class="container">
        <div class="header-left">
          <img class="logo" src="logo_klinik.png">
        </div>
        <div class="sub-header">
            <ul>
                <li><a href="HOME2.php">HOME</a></li>
                <li><a href="daftar.php">PASIEN BARU</a></li>
                <li><a href="list2.php">DATA PASIEN</a></li>
                <li><a href="CONTACT.php">CONTACT US</a></li>
    
            </ul>
        </div>
        <div class="header-right">
          <a href="logout.php" onclick="return confirm('Apakah anda yakin ingin keluar ?')">LOGOUT</a>
        </div>
      </div>
    </header>
    <h2>FORM EDIT DATA PASIEN</h2>
    <form action="edits.php" method="POST" class="pure-form pure-form-stacked">
        <fieldset>
            <input type="hidden" Name="kdpasien" value="<?php echo
            $pasien['kdpasien'] ?>"/>
        <p>
            <label for="nama">Nama:     </label>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $pasien['nama'] ?>" />    
        </p> 
        <p>
            <label for="alamat">Alamat: </label>
            <input type="text" name="alamat" 
            placeholder="alamat" value="<?php echo $pasien['alamat'] ?>" />    
        </p>
        <p>
            <label for="no_hp">No. Telp:    </label>
            <input type="text" name="no_hp" 
            placeholder="no_hp" value="<?php echo $pasien['no_hp'] ?>" />    
        </p>
        <p>
            <input type="submit" value="Simpan" Nama="simpan"
            />
        </p> 
      </fieldset>
    </form>  
</body>
</html>