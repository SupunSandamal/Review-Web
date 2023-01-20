<?php

$con = new mysqli('localhost','root','','review');

if($con->connect_error){
  die('Connection Failed : ' .$con->connect_error);
}
?>