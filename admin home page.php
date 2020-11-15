<?php
session_start();
if ((!isset($_SESSION['name']))) {
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin home page</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="orange.css">
<style>
    section.scroll {
       
  width: 100%;
  margin-bottom: 2rem;
  border: 0;
  overflow-x: scroll;
  display: flex;
   
    }

</style>

</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-secondary text-uppercase" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="ff.png" alt="Future Face" style="height: 75px; width:150px;"></a>
        <button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1"></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" style="background-color: transparent;" href="#portfolio">Tickets</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" style="background-color: transparent;" href="#about">redirected tickets</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 " style="background-color: transparent;" href="registerpage.php"> Register an account</a></li>
                    <li class="nav-item mx-0 mx-lg-0"><a href="logout.php"><button type="button" style="margin-left: 35px;" class="btn btn-danger">Logout</button></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead bg-primary text-white text-center">
        <div class="container">
            <h1>Ticketing System</h1>
            <h2 class="font-weight-light mb-0"></h2>
        </div>
    </header>
    <div class="container">
            <h1 class="text-uppercase text-center text-secondary" style="padding-top:20px;" >tickets</h1>
        </div>

    <section class="scroll" id="portfolio" class="portfolio" style="height:600px; margin-bottom:0px">
        
        <?php
        include 'connecttoDB.php';
        $result = mysqli_query($conn, "SELECT * FROM tickets");


        while ($row = mysqli_fetch_array($result)) {

            echo '
  <div >
  <a href="adminCard.php?id='.$row['num'].'=">

        <div scrollmenu  data-ride="carousel" style=" float:left; background: #000000;height: 300px;width: 350px;margin: 50px 65px;padding: 30px 0px;border-radius: 50px;">
            <h2 class="text-uppercase text-center text-white" style="margin: 0px;padding: 0px;text-align: center;padding-bottom: 30px;font-size: 30px;">#' . $row['num'] . '</h2>
            <h2 class="text-uppercase text-center text-white" style="margin: 0px;padding:0px;text-align: center;padding-bottom: 30px;font-size: 20px;">' . $row['title'] . '</h2>
            <h2 class="text-uppercase text-center text-white" style="margin: 0px;padding:0px;text-align: center;padding-bottom: 30px;font-size: 20px;">sent by: '.$row['sentBy'].'</h2>
        </div>

        </a>

</div>


            ';
        }

        ?>

    </section>
    <div class="container" style="background-color: #f09329 ; max-width:unset ; width:1000; height:50px">
            <h2 class="text-uppercase text-center text-white" style="margin-bottom:0px; padding-top:20px;">REDIRECTED tickets</h2>
        </div>
    <section class="scroll" id="about" class="bg-primary text-white mb-0" style="background-color: #f09329 ; height:700px; margin-bottom:0px">
        
        <?php
        include 'connecttoDB.php';
        $result = mysqli_query($conn, "SELECT * FROM tickets WHERE redirected = 'true'");


        while ($row = mysqli_fetch_array($result)) {

            echo '
  <div >
  <a href="adminCard.php?id='.$row['num'].'=">

        <div scrollmenu  data-ride="carousel" style=" float:left; background: #000000;height: 400px;width: 350px;margin: 50px 65px;padding: 30px 0px;border-radius: 50px;">
            <h2 class="text-uppercase text-center text-white" style="margin: 0px;padding: 0px;text-align: center;padding-bottom: 30px;font-size: 30px;">#' . $row['num'] . '</h2>
            <h2 class="text-uppercase text-center text-white" style="margin: 0px;padding:0px;text-align: center;padding-bottom: 30px;font-size: 20px;">' . $row['title'] . '</h2>
            <h2 class="text-uppercase text-center text-white" style="margin: 0px;padding:0px;text-align: center;padding-bottom: 30px;font-size: 20px;">sent by: '.$row['sentBy'].'</h2>
            <h2 class="text-uppercase text-center text-white" style="margin: 0px;padding:0px;text-align: center;padding-bottom: 30px;font-size: 20px;">redirected by: '.$row['redirectedBy'].'</h2>
        </div>

        </a>

</div>


            ';
        }

        ?>
    </section>


    <footer class="footer text-center"></footer>
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright ©&nbsp;future face 2020</small></div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/freelancer.js"></script>
</body>

</html>