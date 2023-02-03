<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <form action="index.php" method="post">
    <label for="name">Your name:</label>
    <input type="text" name="name">
    <button type="submit">Say Hello</button>
  </form>

  <?php
    $person = $_POST["name"];
    
    function sayHello($person){
      echo "Hello $person";
    }

    sayHello($person);
  ?>

</body>
</html>