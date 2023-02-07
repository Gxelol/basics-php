<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <?php
    $title = "This is my post";
    $author = "Gabriel";
    $text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet repudiandae incidunt, nobis nostrum rem ipsum alias nihil molestias officia dolorem! Architecto doloremque dolore vitae quis, ad quaerat itaque fugiat dicta!";
    
    include "article-header.php";
    include "sayHello.php";

    echo "<br>";
    sayHello("Gabriel");

  ?>

</body>
</html>