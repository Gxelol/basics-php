<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>

  <form action="index.php" method="post">
    <input type="text" name="student">
    <button type="submit">Submit</button>
  </form>

  <?php
     $grades = [
      "Gabriel" => 10,
      "Tom" => 5,
      "Lara" => 7,
      "Pedro" => 10
    ];

    // $grades["Lara"] = 8;
    // var_dump($grades["Lara"]);
    
    echo $grades[$_POST["student"]]
  ?>


</body>
</html>