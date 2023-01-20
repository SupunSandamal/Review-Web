<?php

$con = new mysqli('localhost','root','','review');
if($con->connect_error){
  die('Connection Failed : ' .$con->connect_error);
}else{

    if(isset($_POST['sign-up'])){

      $userName =$_POST['userName'];
      $email =$_POST['email'];
      $password =$_POST['password'];

        $sql="INSERT INTO singup(`user_name`,`email`,`password`) VALUES('$userName', '$email', '$password')";
        $result = mysqli_query($con, $sql);
        if($result){
            echo "Data inserted successfull.";
            header('location: display.php');
        }
        else{
            die(mysqli_error($con));
        }
    }
  }

?>