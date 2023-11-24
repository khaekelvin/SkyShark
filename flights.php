<?php 
include 'connect.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link href="assets/css/style.css" rel="stylesheet" />
          
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
    <title>read</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservations</title>
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
</head>
<body>


  <!-- ======= Header ======= -->
    <header id="header" class="header mb-5">
      <div
        class="container-fluid container-xl d-flex align-items-center justify-content-between"
      >
        <a href="index.html" class="logo d-flex align-items-center">
          <img src="assets/img/logo.png" alt="" />
          <span>SkyShark</span>
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
        <h1 class="header mb-2">Reservations</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Charge</th>
                </tr>
            </thead>
            <tbody>

            <?php
            $sql="Select * from `reserve`";
            $result = mysqli_query($con,$sql);
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                    $id=$row['id'];
                    $name=$row['name'];
                    $email=$row['email'];
                    $mobile=$row['mobile'];
                    $from=$row['from'];
                    $to=$row['to'];
                    $charge=$row['charge'];
                    $price = '';
                    
                    switch($charge){
                      case 'Basic' :
                        $price = '100';
                        break;
                        case 'Premium' :
                        $price = '200';
                        break;
                        case 'Enhanced' :
                        $price = '300';
                        break;
                        case 'Ultimate' :
                        $price = '500';
                        break;
                        default :
                        $price = '100';
                        break;
                    }
                    echo '<tr>
                    <td scope="row">'.$id.'</td>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$mobile.'</td>
                    <td>'.$from.'</td>
                    <td>'.$to.'</td>
                    <td>₵ '.$price.'</td>

                    <td>
                <button class="btn btn-primary"><a href="reserve.php?id='.$id.'" class="text-light">Update</a></button>
                <button class="btn btn-danger"><a href="delete2.php?id='.$id.'" class="text-light">Delete</a></button>
              </td>  
                    </tr>';
                    
                }
            }
            ?>
               
            </tbody>
        </table>
        <a href="index.html"><button class="btn btn-success">Home</button></a>
        

    </div>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
</body>
</html>