<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POST</title>
</head>


<body>
  <?php
  if (isset($_POST["submit"])):?>
    <h1>Selamat datang, <?= $_POST["name"] ?></h1>
  <?php endif; ?>


  <form action="" method="post">  <!--jika action tidak ada isinya maka dia akan menggail filenya sendiri -->
    <label for="name">Masukkan nama:</label>
    <input type="text" name="name" id="name"><br>
    <button type="submit"name="submit">Kirim</button>
  </form>

<script>
  const form = document.querySelector("form")
  form.addEventListener("submit", (event)=> {
    const namaVal =document.getElementById("name").value
    if (namaVal == "") {
      alert("inputan harus diisi")
      event.preventDefault()
    }
  })
</script>
</body>

</html>