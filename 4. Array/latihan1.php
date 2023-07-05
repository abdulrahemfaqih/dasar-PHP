<?php
$mahasiswa = [
  ["Abdul Rahem Faqih", "220411100029", "Teknik Informatika", "faqih3935@gmail.com"],
  ["Sitti Nur Khalisa", "220411100123", "Teknik Informatika", "lisa@gmail.com"],
  ["Ainurisha Yatie", "220411100022", "Teknik Informatika", "risha@gmail.com"],
] 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa</title>
  <style>

  </style>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>
  <?php foreach ($mahasiswa as $mhs): ?>
    <ul>
      <li>Nama  : <?= $mhs[0] ?></li>
      <li>NIM   : <?= $mhs[1] ?></li>
      <li>Prodi : <?= $mhs[2] ?></li>
      <li>Email : <?= $mhs[3] ?></li>
    </ul>
  <?php endforeach; ?>
  
</body>

</html>