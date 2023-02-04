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
    <label for="gender[]">Male</label>
    <input type="radio" name="gender[]" value="male">
    <label for="gender[]">Female</label>
    <input type="radio" name="gender[]" value="female">
    <label for="gender[]">Other</label>
    <input type="radio" name="gender[]" value="other">
    <button type="submit">Submit</button>
  </form>

  <?php
    $gender = $_POST["gender"];

    if ($gender[0] === "male"){
      echo "You're Male";
    } elseif ($gender[0] === "female") {
      echo "You're Female";
    } else {
      echo "Other";
    }
  ?>

</body>
</html>