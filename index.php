<?php
extract($_POST);

$dsn = "mysql:host=localhost;dbname=HelpMum";
$uName = "root";
$pass = "root1234";

try{
    $conn = new PDO($dsn,$uName,$pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo $e->getMessage();
}



if (isset($JoinList)) {
   if (!empty($email)) {
       $sql = "INSERT INTO user_emails(email) VALUES('$email')";
       $row =$conn->query($sql);
       if ($row) {
            echo '<div class="bg-success" id="report">';
            echo '<p> Congrats! Your emails has been submitted';
            echo "</div>";
       }else {
        echo '<div class="bg-danger" id="report2">';
        echo '<p> Oops! There was an submitting your email';
        echo "</div>";
       }
   }else {
    echo '<div class="bg-danger" id="report">';
    echo '<p> Oops! Field must not be empty';
    echo "</div>";
   }
}
?>







<!doctype html>
<html lang="en">
  <head>
    <title>HelpMum</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Font Link -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Font Awesome Link -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Required CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  
  <body>

    <header>
        <!-- Nav Section -->
        <nav class="navbar navbar-expand-md container p-5">
            <a class="navbar-brand text-dark display-5" href="#">HelpMum</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapseDrug" aria-controls="collapseDrug"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fa fa-bars text-white"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="collapseDrug">
                <ul class="nav ml-auto header-nav  mt-lg-0">
                    <li class="nav-item  mr-3 active">
                        <a class="nav-link" href="#"><img src="img/Vector2.png"></a>
                    </li>
                    <li class="nav-item  mr-3">
                        <a class="nav-link" href="#"><img src="img/Vector (1).png"></a>
                    </li>
                    <li class="nav-item  mr-3">
                      <a class="nav-link" href="#"><img src="img/Vector (2).png"></a>
                    </li>
                    <li class="nav-item  mr-3">
                        <a class="nav-link" href="#"><img src="img/Vector (3).png"></a>
                    </li>
                </ul>
            </div>
        </nav>


        <div class="container-fluid p-5">
            <div class="row p-4">
                <div class="col-lg-6 col-md-6">
                    <h2 class="display-4">
                        Raising Healthy Babies, <br>Improving Birth Process
                    </h2>
                    <h3 class="p-2 display-6">
                        Launching Soon!
                    </h3>
                    <div class="row p-2">
                        <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Join Our Mailing List" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <span class="input-group-text animate__animated animate__bounce animate__slower" id="basic-addon2"><a href="#" class="text-white">JOIN LIST</a></span>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 text-center">
                    <img src="img/Pixel 3 XL 1.png" class="img-fluid animate__animated animate__bounceInRight animate__slower">
                </div>
            </div>
        </div>
    </header>

    <section class="pb-3">
        <div class="container-fluid p-5 pb-5">
            <div class="row">
                <div class="col-lg-6 p-5">
                    <img src="img/Rectangle 49.png" class="img-fluid">
                </div>
                <div class="col-lg-6 pt-5">
                    <h1 class="display-5 py-5 px-4" id="rec50">
                        Make The World A Safer, Better Place To Live In
                    </h1>
                    <p class="lead px-4">
                        Mums are the best because they make the world unisolatated. 
                        WIth their ability and our compassion, 
                        we can create a beautiful world
                    </p>
                </div>
            </div>
        </div>
    </section>
      
       
    <section class="py-5 mt-5 px-0">
        <div class="container-fluid p-0 m-0 row">
            <div class="col-lg-6 p-5">
                <h1 class="display-4">
                   Preview of App
                </h1>
                <p class="lead">
                    Helpmum is a pregnancy tracking platform that helps identify women who may be in need 
                    of a better process to giving birth to healthy babies. Processes like Manner of eating, clothing, moving, health and more.
                </p>
            </div>

            <div class="col-lg-6 ml-auto text-center">
                <img src="img/Pixel 3 XL (6) 1.png" class="img-fluid">
            </div>
        </div>

        <div class="row ml-auto">
            <div class="col-lg-4 ml-auto text-center">
                <img src="img/Pixel 3 XL (7) 2.png" class="img-fluid">
            </div>
            <div class="col-lg-4 ml-auto text-center">
                <img src="img/Pixel 3 XL (8) 1.png" class="img-fluid">
            </div>
            <div class="col-lg-4 ml-auto text-center">
                <img src="img/Pixel 3 XL (8) 2.png" class="img-fluid">
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <img src="img/Pixel 3 XL (8) 3.png" class="img-fluid">
        </div>
        
    </section>

   
    <footer>
        <div class="container-fluid text-center text-center text-white p-5" id="foot">
            <h2 class="display-6">@ Copyright HelpMUM 2020</h2>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
