<?php 
include 'connect.php';

$id=$_GET['id'];

    $sql="DELETE FROM `crudtable` WHERE id='$id'";
    $result=mysqli_query($con,$sql);
    if($result){
      echo "data deleted";
      header("location:data.php");
  } else {
    die(mysqli_error($con));
  }
?>