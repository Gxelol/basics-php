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

    class Student {
      public $name;
      private $grade;
    
      function __construct($name, $grade){
        $this->name = $name;
        $this->setGrade($grade);
      }

      function getGrade() {
        return $this->grade;
      }

      function setGrade($grade) {
        if(is_numeric($grade) && $grade >= 0 && $grade <= 10){
          $this->grade = $grade;
        }else {
          $this->grade = 0;
        }
      } 
    }
    
    $Gabriel = new Student("Gabriel", 10);
    
    $Gabriel->setGrade(11);

    echo $Gabriel->getGrade();
  ?>

</body>
</html>