<?php 
include 'connect.php';

$id=$_GET['id'];

    $sql="DELETE FROM `reserve` WHERE id='$id'";
    $result=mysqli_query($con,$sql);
    if($result){
      echo "data deleted";
      header("location:flights.php");
  } else {
    die(mysqli_error($con));
  }
?>