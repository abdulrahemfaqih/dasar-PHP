<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
if (!$result) {
  echo mysqli_error($conn);
}

// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_arrow() = mengembalikan array numerik
// mysqli_fetch_assoc() = mengembalikan array assosiative
// mysqli_fetch_array() = mengambalikan keduanya, sama sama bisa !kelemahannya double 
// mysqli_fetch_object() = mengembalikan object
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
</head>

<body>
  <h1>Daftar Mahasiswa</h1>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No.</th>
      <th>Aksi</th>
      <th>Foto</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>Email</th>
      <th>jurusan</th>
    </tr>

    <?php $i = 1 ?>
    <?php while ($row = mysqli_fetch_assoc($result)): ?>
      <tr>
        <td>
          <?= $i ?>
        </td>
        <td>
          <a href="">Ubah</a> |
          <a href="">Hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"] ?>" width="50px"></td>
        <td>
          <?= $row["nim"] ?>
        </td>
        <td>
          <?= $row["nama"] ?>
        </td>
        <td>
          <?= $row["email"] ?>
        </td>
        <td>
          <?= $row["jurusan"] ?>
        </td>
      </tr>
      <?php $i++ ?>
    <?php endwhile; ?>

  </table>
</body>

</html>