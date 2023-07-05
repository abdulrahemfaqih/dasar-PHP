<?php

// Array Assosiative
$mahasiswa = [
  [
    "nama" => "Abdul Rahem Faqih",
    "nim" => "220411100029",
    "prodi" => "Teknik Informatika",
    "email" => "faqih@gmail.com",
    "foto" => "user.png"
  ],
  [
    "nama" => "Muhammad Faris Wafda",
    "nim" => "220411100039",
    "prodi" => "Teknik Informatika",
    "email" => "wafda@gmail.com",
    "foto" => "mas.png"
  ],
  [
    "nama" => "Farish Ilham Syahrani",
    "nim" => "220411100166",
    "prodi" => "Teknik Informatika",
    "email" => "farish@gmail.com",
    "foto" => "man.png"
  ],
  [
    "nama" => "Sitti Nur Khalisah",
    "nim" => "220411100123",
    "prodi" => "Teknik Informatika",
    "email" => "lisa@gmail.com",
    "foto" => "girl.png"
  ]

]
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
  <style>
    * {
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      text-decoration: none;
    }

    img {
      height: 70px;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Daftar Mahasiswa</h1>
    <div class="container_luar">
      <ul>
        <?php foreach ($mahasiswa as $mhs): ?>
          <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"] ?>&profil=<?= $mhs["foto"] ?>&nim=<?= $mhs["nim"] ?>&prodi=<?= $mhs["prodi"] ?>&email=<?= $mhs["email"] ?>"><?= $mhs["nama"]; ?></a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</body>

</html>