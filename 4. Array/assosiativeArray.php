<?php
$nums = [
  [1, 2, 3], 
  [4, 5, 6], 
  [7, 8, 9]
];
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
      width: 200px ;
      flex-wrap: wrap;
    }

    .box1 {
      height: 50px;
      width: 50px;
      background-color: cadetblue;
      line-height: 50px;
      text-align: center;
      margin: 3px;
      transition: ease-in 0.7s;
    }

    .box1:hover {
      transform: rotate(360deg);
      border-radius: 50%;
    }
  </style>
</head>

<body>
  <div class="container">
    <?php foreach ($nums as $num): ?>
      <?php foreach ($num as $inner_num) : ?>
        <div class="box1"><?= $inner_num ?></div>
      <?php endforeach; ?>
    <?php endforeach; ?>
  </div>
</body>

</html>