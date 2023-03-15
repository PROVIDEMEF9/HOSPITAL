<?php
$login=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'db.php';
   
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql="Select * from users where email='$email'AND  password='$password'";
    $result = mysqli_query($conn,$sql);
    $num= mysqli_num_rows($result);
    if($num == 1){
        $login =true;
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['username'] =$username;
        header("location: welcome.php");
    }
    else{
        $showError = "Invalid credentials";
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="welcome.css">
    <title>Hello, world!</title>
  </head>
  <body>

     <!-- navigation bar -->
     
     

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand bk_nav" href="#">
                <img src="unnamed.webp" alt="" width="60" height="48" class="d-inline-block align-text-top">
                <h3 class="text-info">TECH<span>care</span></h3>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-dark active_update text-info" aria-current="page" href="#">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle  active_update text-info" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item  active_update text-info" href="#">Regular checkup</a></li>
                            <li><a class="dropdown-item  active_update text-info" href="#">Appoinment booking</a></li>
                            <li><a class="dropdown-item  active_update text-info" href="#">Health issue</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  active_update text-info" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  active_update text-info" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary text-light" href="logout.php">Logout</a>
                    </li>
                    
                </ul>

            </div>
        </div>
    </nav>
    
    <!-- navigation bar -->

    <section class="form">
        <div class="container">
            <h1 class="text-center text-info text-decoration-underline">Login Yourself</h1>

            <div class="row mt-5">
                <div class="col-5">
                    <img src="neurology-manu-hospital.jpg" class="img-fluid shadow p-3 mb-5 bg-body rounded" alt="...">
                </div>
                <div class="col-5">
                <form action="welcome.php" method="post">
                    
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="text" name="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>

                </div>

            </div>
        </div>

    </section>

    <!-- footer  -->
    <?php include 'footer.php';?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>