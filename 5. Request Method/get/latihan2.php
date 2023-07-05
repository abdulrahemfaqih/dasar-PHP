<?php

if ( 
  !isset($_GET["nama"]) || !isset($_GET["profil"]) ||!isset($_GET["nim"]) ||!isset($_GET["prodi"]) ||!isset($_GET["email"])) {
  // redirect
  header("Location:latihan1.php");
  exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Details</title>
  <style>
    img {
      height: 70px;
    }
  </style>
</head>

<body>
  <h1>Details Mahasiswa</h1>
  <img src="../../4. Array/img/<?= $_GET["profil"] ?>" alt="">
  <ul>
    <li>
      <?= $_GET["nama"] ?>
    </li>
    <li>
      <?= $_GET["nim"] ?>
    </li>
    <li>
      <?= $_GET["prodi"] ?>
    </li>
    <li>
      <?= $_GET["email"] ?>
    </li>
  </ul>
  <a href="latihan1.php">Kembali ke beranda</a>
</body>

</html>