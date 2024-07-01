<?php
include('./dbconnection.php');

$data = $conn->query("SELECT * FROM students")->fetchALL();


if(isset($_POST['Ubdate'])){
    
    $id = $_GET['id'];

   $name = $_POST['Name'];
   $info = $_POST['Info'];
   $email = $_POST['Email'];
   $pw = $_POST['pw'];
   
   if (!empty($name)&& !empty ($info)&& !empty ($email) && !empty($pw)){
       $sql = "Ubdate students
   
   SET Name='$name' , Info='$info' ,Email='$email',
   
   Where students_id='$id'";

   $stmt= $conn->prepare($sql);
   $stmt->execute();
//    echo "<br>" . $sql->rowcount() . " row ubdated successfuly";
   
   echo "Data updated successfully";
   }
   }
   
?>
