<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles2.css">
    <title>KLINIK</title>
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
    <div class="top-content">
        <div class="container">
            
            <h1>SELAMAT DATANG
            DI KLINIK KAMI
            </h1>
            
            <p>Kami hadir untuk anda </p>
            <p>Klinik ini merupakan klinik konsultasi psikologi dengan psikolog terpercaya!</p>
            <div class="container-button">
            <p>
            <a href="daftar.php" class="pure-button pure-button-primary">PASIEN BARU</a>
            </p>
            <p>
            <a href="list2.php" class="pure-button pure-button-primary">DATA PASIEN</a>
            </p>
            </div>
        </div>
    </div>
    <div class="status">
      <nav>
      <?php if (isset($_GET['status'])) : ?>
        <p>
          <?php
          if ($_GET['status'] == 'sukses') {
            echo "Pendaftaran Berhasil!" ;
          } else {
            echo "Pendaftaran gagal!";
          }
          ?>
        </p>
      <?php endif; ?>
      </nav>
    
      </div>
    
    
    
    
    
</body>
</html>