
<?php
// include 'db.php';
// session_start();
?>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'db.php';
    $username=$_POST["username"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $concern=$_POST["concern"];
    
    $sql="INSERT INTO `query` ( `name`, `email`, `mobile`, `concern`) VALUES ('$username', '$email', ' $mobile', '$concern')";
$result = mysqli_query($conn,$sql);
if($result){
    echo "your entry has been submitted!!";
    header("location: welcome.php");
}
else{
    echo "your record was not inserted successfully!!";
}
}


?>
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
                        <a class="nav-link  active_update text-info" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  active_update text-info" href="contact.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary text-light" href="signup.php">Logout</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <!-- navigation bar -->

    <div class="container my-4">
        <h1>Contact Us</h1>
        <form action="contact.php" method="post">
            <div class="form-group">
                <label for="exampleFormControlInput1">Name</label>
                <input type="text" name ="username"class="form-control" id="exampleFormControlInput1" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="email"name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Mobile Number</label>
                <input type="number"name="mobile" class="form-control" id="exampleFormControlInput1" placeholder="Enter your number">
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Elaborate your concern</label>
                <textarea class="form-control" name="concern" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary my-2">Submit</button>
        </form>

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