<?php
  include 'connect.php';
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = md5($_POST['password']);



    $sql="insert into `crudtable` (name,email,mobile,password) values('$name','$email','$mobile','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
      header("location:data.php");
  } else {
    die(mysqli_error($con));
  }
}

if(isset($_GET['id'])){
  $id=$_GET['id'];
  $sql="select * from `crudtable` where id='$id'";
  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_assoc($result);
  $name=$row['name'];
  $email=$row['email'];
  $mobile=$row['mobile'];
  $password=$row['password'];

}
?>











<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <link href="assets/css/style.css" rel="stylesheet" />
          <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
  <title>form</title>
</head>
<body>
  <!-- ======= Header ======= -->
    <header id="header" class="header ">
      <div
        class="container-fluid container-xl d-flex align-items-center justify-content-between"
      >
        <a href="index.html" class="logo d-flex align-items-center">
          <img src="assets/img/logo.png" alt="" />
          <span>FLyHigh</span>
        </a>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="http://localhost/flexstart/index.html">Home</a></li>
            <li><a class="nav-link scrollto" href="http://localhost/flexstart/index.html">About</a></li>
            <li><a class="nav-link scrollto" href="http://localhost/flexstart/index.html">Services</a></li>

            <li><a class="nav-link scrollto" href="http://localhost/flexstart/index.html">Contact</a></li>
            
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->

  <div class="container">

  
    <form method="POST" class="mt-5">
      <div class="form-group">
        <h1 class="display-2">Contact Form</h1>
        <h1 for="name" type="text" name="name" class="">Name</h1>
        <input name="name" placeholder="Enter your name" type="text" name="name" id="name" class="form-control" value="<?php echo isset($name)?$name:null ?>" required>
      </div>

      <div class="form-group">
        <h1 for="email" type="email" name="email" class="">Email</h1>
        <input name="email" placeholder="Enter your email" type="email" name="email" id="email" class="form-control" value="<?php echo isset($email)?$email:null ?>" required>
      </div>

      <div class="form-group">
        <h1 for="phone" type="text" name="phone" class="">Mobile</h1>
        <input name="mobile" placeholder="Enter your phone number" type="tel" id="name" class="form-control" value="<?php echo isset($mobile)?$mobile:null ?>" required>
      </div>

      

      <div class="form-group">
        <h1 for="password" type="text" name="password" class="">Password</h1>
         <input  for="password" type="password" name="password" placeholder="Enter your password" type="tel" id="name" class="form-control" value="<?php echo isset($password)?$password:null ?>" required>
      </div>

      <button name="submit" type="submit" class="btn btn-primary px-5 py-3"><h5><?php echo isset($id)?'Update':'Submit' ?></h5></button>
      <!-- <button class="btn btn-danger ">Clear</button> -->
      </div>
    </form>
  </div>
</body>
</html>