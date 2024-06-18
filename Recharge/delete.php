<?php
  
  include "connection.php";

  if(isset($_GET['deleteid'])){
    $Sno=$_GET['deleteid'];
  
  
  $sql="DELETE FROM tbl_recharge WHERE Sno=$Sno";
  $result=mysqli_query($con,$sql);

  if($result){
    /* echo "New record created successfully."; */
    header("location:index.php");
  }else{
    die("Connection Failed ".$cont->connect_error);
}
  }

?>
