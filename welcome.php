<?php
include 'db.php';
session_start();
// $_SESSION['loggedin']=true;
// $_SESSION['username'] =$username;
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                        <a class="nav-link dropdown-toggle  active_update text-info" href="#"
                            id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <a class="nav-link  active_update text-info" href="contact.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary text-light" href="signup.php">Sign-up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary text-light" href="login.php">Login</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    
    <!-- navigation bar -->


    <!-- banner -->
    <section>

        <div class="bd-example container">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="banner_1_final.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="piron-guillaume-U4FyCp3-KzY-unsplash.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>

    </section>
    <!-- banner -->

    <div class="row">
        <div class="mt-3 mx-auto col-7">
            <h3 class="text-center text-info text-decoration-underline">Our Department</h3>

        </div>
    </div>
    <div class="card-group">
        <div class="card m-3">
            <img src="gastro2.webp" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Gastrology</h5>
                <p class="card-text">Acid reflux can be described as a commonly occurring condition where the contents of the
                                stomach
                                food rise up from the stomach and flows back up into the oesophagus.</p>
               
            </div>
        </div>
        <div class="card m-3">
            <img src="neurology-manu-hospital.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">  Neurology</h5>
                <p class="card-text"> Neurological care is the specialist care that affects their brain or nervous system.
                                It focuses on health, wellbeing and supporting people to live their lives as fully as
                                possible..</p>
                
            </div>
        </div>
        <div class="card m-3">
            <img src="Exercises-for-Proper-Eye-Care-750x390.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Eye Care</h5>
                <p class="card-text">Your eyesight is one of your most important senses: 80% of what we perceive comes
                                through our sense of sight.
                                By protecting your eyes, you will reduce vision loss .</p>
                
            </div>
        </div>
    </div>

    <!-- footer  -->
    <?php include 'footer.php';?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>