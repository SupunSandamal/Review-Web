<?php

$con = new mysqli('localhost','root','','review');
if($con->connect_error){
  die('Connection Failed : ' .$con->connect_error);
}else{

    if(isset($_POST['submit'])){

      $phoneModel =$_POST['phoneModel'];
      $email =$_POST['email'];
      $text =$_POST['text'];
      $image =$_POST['image'];

        $sql="INSERT INTO phone(`	model`,`email_address`,`example_textarea`,`image`) 
        VALUES('$phoneModel', '$email', '$text', '$image')";
        $result = mysqli_query($con, $sql);
        if($result){
            echo "Data inserted successfull.";
            header('location: display.php');
        }
        else{
            die(mysqli_error($con));
        }
    }
// image


  }

?>