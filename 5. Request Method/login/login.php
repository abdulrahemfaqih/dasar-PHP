<?php
if (isset($_POST["submit"])) {
  if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
    header("Location: admin.php");
    exit;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin</title>
  <style>
    * {
      list-style: none;
    }
  </style>
</head>

<body>
  <h1>Login Admin</h1>
  <ul>
    <form action="" method="post">
      <li>
        <label for="us">Username : </label>
        <input type="text" name="username" id="us">
      </li>
      <br>
      <li>
        <label for="pw">Password : </label>
        <input type="password" name="password" id="pw">
      </li>
      <br>
      <button type="submit" name ="submit">Kirim</button>
    </form>
  </ul>
  <script>
    const form = document.querySelector("form");
    form.addEventListener("submit", (event) => {
      const userVal = document.getElementById("us").value;
      const pwVal = document.getElementById("pw").value;

      if (userVal == "" || pwVal == "") {
        alert("Semua inputan harus diisi");
        event.preventDefault();
      } else {
        if (userVal != "admin") {
          alert("Username salah");
        } else if (pwVal != "123") {
          alert("Password salah");
        } else {
          alert("Login berhasil..");
        }
      }
    });

  </script>
</body>
</html>