<?php 

$con = new mysqli('localhost','root','','review');
if($con->connect_error){
  die('Connection Failed : ' .$con->connect_error);
}else{

if(isset($_POST['login'])){
   
    $email=$_POST['email'];
    $password=$_POST['Password'];
    
    $sql="select * from singup where email='$email'AND password='$password'";
    
    $result=mysqli_query($con, $sql);
    
    if(mysqli_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
}    
}
?>
