<?php 

#Connect Database
  $localhost='localhost';
  $username='root';
  $password='';
  $db='recharge_db';
  $con=mysqli_connect($localhost,$username,$password,$db);
  if(!$con){
    die("Connection Failed ".$cont->connect_erro);
  }
  ?>


