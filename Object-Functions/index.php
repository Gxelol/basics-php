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
      var $name;
      var $major;
      var $gpa;

      function __construct($name, $major, $gpa) {
        $this->name = $name;
        $this->major = $major;
        $this->gpa = $gpa;
      }

      function isOneOfBestStudents() {
        if($this->gpa >= 3.5){
          return "$this->name";
        }
        return false;
      }
    }

    $student1 = new Student("Gabriel", "Computer Science", 3.6);
    $student2 = new Student("Lara", "Literature", 3.1);
    $student3 = new Student("Oliver", "Art", 2.9);

    echo $student1->isOneOfBestStudents();
    echo $student2->isOneOfBestStudents();
    echo $student3->isOneOfBestStudents();
  ?>

</body>
</html>