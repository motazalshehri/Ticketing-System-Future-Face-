<?php
session_start();
if ( (!isset($_SESSION['email']))) {
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
</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-secondary text-uppercase" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top">future face</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1"></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Tickets</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">redirected tickets</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 " href="registerpage.php">Register an account</a></li>
                    <li class="nav-item mx-0 mx-lg-0" ><a href="logout.php"><button type="button" style="margin-left: 35px;" class="btn btn-danger">Logout</button></a></li>

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

    <section id="portfolio" class="portfolio" style="height:1000px">
        <div class="container">
            <h2 class="text-uppercase text-center text-secondary">tickets</h2>
        </div>

        <?php
        include 'connecttoDB.php';
        $result = mysqli_query($conn, "SELECT * FROM tickets");


        while ($row = mysqli_fetch_array($result)) {

            echo '

  
        <div data-ride="carousel" style=" float:left; background: #000000;height: 600px;width: 350px;margin: 50px 65px;padding: 30px 0px;border-radius: 50px;">
            <h2 class="text-uppercase text-center text-white" style="margin: 0px;padding: 0px;text-align: center;padding-bottom: 30px;font-size: 30px;">#' . $row['num'] . '</h2>
            <h2 class="text-uppercase text-center text-white" style="margin: 0px;padding:0px;text-align: center;padding-bottom: 30px;font-size: 20px;">' . $row['title'] . '</h2>
            ';
            $_SESSION['title']= $row['title']; 

            $cardResult = mysqli_query($conn, "SELECT * FROM tickets WHERE title = '".$_SESSION['title']."' ");
            $cardRow = mysqli_fetch_array($cardResult);
            echo '
            <button style="margin: 10px 145px;height: 46px; type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">View</button>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">#' . $cardRow['num'] . ' - ' . $cardRow['title'] . '</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p>' . $cardRow['complaint'] . '</p>
                  </div>
                  <div class="modal-footer" >
                  <h5 style="float:left;" class="modal-title" id="exampleModalLabel">sent by: ' . $cardRow['email'] . '</h5>
                  </div>
                </div>
              </div>
            </div>
            <h2 class="text-uppercase text-center text-white" style="margin: 0px;padding: 0px;text-align: center;padding-bottom: 0px;padding-top: 10px;font-size: 30px;">transfer to</h2>
            <div class="dropdown"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="text-align: center;margin: 10px 50px;width: 250px;font-size: 20px;">select department&nbsp;</button>
                <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
            </div>
            <div class="dropdown"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="width: 250px;margin: 10px 50px;font-size: 20px;">select member&nbsp;</button>
                <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
            </div>

            <button class="btn btn-primary" type="button" style="margin: 10px 145px;height: 46px;">Send</button>

        </div>

            ';
        }

        ?>
    </section>

    <section id="about" class="bg-primary text-white mb-0">
        <div class="container">
            <h2 class="text-uppercase text-center text-white">REDIRECTED tickets</h2>
        </div>
        <div style="background: #000000;height: 700px;width: 350px;margin: 50px 100px;padding: 30px 0px;border-radius: 50px;">
            <h2 class="text-uppercase text-center text-white" style="margin: 0px;padding: 0px;text-align: center;padding-bottom: 30px;font-size: 30px;">title</h2>
            <h2 class="text-uppercase text-center text-white" style="margin: 0px;padding: 0px 0px;text-align: center;padding-bottom: 75px;font-size: 30px;background: #454545;padding-top: 75px;">Complaint</h2>
            <h2 class="text-uppercase text-center text-white" style="margin: 0px;padding: 0px 0px;text-align: center;padding-bottom: 40px;font-size: 30px;background: #454545;padding-top: 40px;height: 150px;">Comment</h2>
            <h2 class="text-uppercase text-center text-white" style="margin: 0px;padding: 0px;text-align: center;padding-bottom: 0px;padding-top: 10px;font-size: 30px;">transfer to</h2>
            <div class="dropdown"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="text-align: center;margin: 10px 50px;width: 250px;font-size: 20px;">select department&nbsp;</button>
                <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
            </div>
            <div class="dropdown"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="width: 250px;margin: 10px 50px;font-size: 20px;">select member&nbsp;</button>
                <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
            </div><button class="btn btn-primary" type="button" style="margin: 10px 145px;height: 46px;">Send</button>
        </div>
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