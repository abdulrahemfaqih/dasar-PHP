<?php
$angka = [1,2,3,4,5,6,7,8,9,10];
$angka[] = 100
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Display Array</title>
  <style>
    * {
      font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    .container {
      display: flex;
    }
    .box1 {
      height: 50px;
      width: 50px;
      background-color: cadetblue;
      line-height: 50px;
      text-align: center;
      margin: 3px;
    }
    .box2 {
      height: 50px;
      width: 50px;
      background-color:coral;
      line-height: 50px;
      text-align: center;
      margin: 3px;
    }
    .box3 {
      height: 50px;
      width: 50px;
      background-color:darkkhaki;
      line-height: 50px;
      text-align: center;
      margin: 3px;
    }
  </style>
</head>

<body>
  <h2>Menggunakan looping biasa</h3>
  <div class="container">
    <?php for( $i = 0 ; $i < count($angka); $i++) { ?>
      <div class="box1"><?php echo $angka[$i]; ?></div>
    <?php } ?>
  </div>
  <h2>menggunakan Foreach</h2>
  <div class="container">
    <?php foreach ($angka as $a) { ?>
      <div class="box2"><?php echo $a ?></div>
    <?php } ?>
  </div>

  <!-- templating -->
  <div class="container">
    <?php foreach ($angka as $a) : ?>
      <div class="box3"><?= $a  ?></div>
    <?php endforeach; ?>
  </div>
</body>

</html>