<?php  
  function sayAdmin($waktu, $nama) {
    return "Selanat $waktu $nama";
  };
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan Function</title>
</head>
<body>
  <h1><?php print(sayAdmin("pagi", "faqih"));  ?></h1>
</body>
</html>