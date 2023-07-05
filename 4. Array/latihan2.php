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
      margin: 0;
      padding: 0;
      list-style: none;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    .container {
      display: flex;
      flex-direction: column;
      justify-content: center;
      height: 100vh;
      background-image: linear-gradient(to right top, #6b73d1, #6e7dd6, #7187db, #7691df, #7c9be3, #8da5e6, #9db0e9, #acbbec, #c4caf0, #d9daf3, #ebebf7, #fcfcfc);
    }

    .container_luar {
      display: flex;
      margin: 20px;
      justify-content: space-evenly;
      flex-wrap: wrap;
    }

    ul {
      margin: 10px;
      display: flex;
      flex-direction: column;
      background: rgba(255, 255, 255, 0.29);
      border-radius: 16px;
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(5px);
      -webkit-backdrop-filter: blur(5px);
      border: 1px solid rgba(255, 255, 255, 0.3);
      padding: 20px;
      gap: 10px;
    }
    img {
      height: 70px;
      margin-bottom: 10px;
    }
    .foto-wrapper {
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1 style="text-align: center; margin: 20px;">Daftar Mahasiswa</h1>
    <div class="container_luar">
      <?php foreach ($mahasiswa as $mhs): ?>
        <ul>
          <li>
            <div class="foto-wrapper">
              <img src="img/<?= $mhs["foto"]; ?>">
            </div>
          </li>
          <li>1. <?= $mhs["nama"]; ?></li>
          <li>2. <?= $mhs["nim"]; ?></li>
          <li>3. <?= $mhs["prodi"]; ?></li>
          <li>4. <?= $mhs["email"]; ?></li>
        </ul>
      <?php endforeach; ?>
    </div>
  </div>
</body>

</html>