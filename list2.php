<?php include("config.php"); ?>
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

    .pure-form label {
    margin: 20px 20px;
    font-weight: bold;
    font-size: 100%;
}

.pure-form input[type]  {
    border: 2px solid #ddd;
    box-shadow: none;
    font-size: 100%;
    width: 100%;
    margin-bottom: 1em;
    
    
}
.submit-button{
    background-color: #132a13;
    color: #ecf39e;
    border-radius:20px;
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
    <div class="content">
        <div class="content-header">
            <h3>DATA PASIEN</h3>
        </div>
        <div class="sub-content">
        <nav>
            <a href="daftar.php">[+] Tambah Baru</a>
        </nav>
        </div>
        <div class="content-list">
            <br>
                <table border="1">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No.Telp</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql = "SELECT * FROM pasien";
                    $query = mysqli_query($db, $sql);

                    while($pasien = mysqli_fetch_array($query)){
                        echo "<tr>";

                        echo "<td>".$pasien["kdpasien"]."</td>";
                        echo "<td>".$pasien["nama"]."</td>";
                        echo "<td>".$pasien["alamat"]."</td>";
                        echo "<td>".$pasien["no_hp"]."</td>";
                        
                        echo "<td>";
                        echo "<a href='edit.php?kdpasien=".$pasien['kdpasien']."'>Edit</a> | ";
                        echo "<a href='hapus.php?kdpasien=".$pasien['kdpasien']."'>Hapus</a>";
                        echo "</td>";
                        echo "</tr>";
                    
                    }
                    ?>
                    </tbody>
                </table>
        </div>
        <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    </div>

    
    
    
</body>
</html>
            