<?php
session_start();
if ( (!isset($_SESSION['name']))) {
  header("Location:login.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>User home page</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="orange.css">
</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-secondary text-uppercase" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top">future face</a><button
                data-toggle="collapse" data-target="#navbarResponsive"
                class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i
                    class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="#portfolio">new ticket</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="#about">my tickets</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="#contact">tickets to me</a></li>
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
    <section id="portfolio" class="portfolio">
        <div class="container">
            <h2 class="text-uppercase text-center text-secondary">new ticket&nbsp;</h2>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <form id="contactForm-1" name="sentMessage" novalidate="novalidate" method="POST" action="saveTicket.php">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label></label>
                            <input class="form-control" type="text" id="name-1" required="" placeholder="Title"
                                name="title">
                            <small class="form-text text-danger help-block"></small>
                        </div>
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label></label>
                            <input class="form-control" type="text" id="name-2" required="" placeholder="Department"
                                name="department">
                            <small class="form-text text-danger help-block"></small>
                        </div>
                    </div>
                    <div class="control-group"></div>
                    <div class="control-group"></div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-5 pb-2">
                            <textarea class="form-control" id="message-1" required="" placeholder="Complaint"
                                name="complaint" rows="5"></textarea>
                            <small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div id="success-1"></div>
                    <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton-1"
                            type="submit">Send</button></div>
                            <?php echo " <input name='sentBy' type= 'hidden' value='".$_SESSION['name']."' > "; ?>
                </form>
            </div>
        </div>
    </section>
    <section id="about" class="bg-primary text-white mb-0">
        <div class="container">
            <h2 class="text-uppercase text-center text-white">my tickets</h2>
        </div>
       
        <?php
        include 'connecttoDB.php';
        $result = mysqli_query($conn, "SELECT * FROM tickets ");


        while ($row = mysqli_fetch_array($result)) {

            echo '

  
        <div style=" float:left; background: #000000;height: auto;width: 350px;margin: 50px 100px;padding: 30px 0px;border-radius: 50px;">
            <h2 class=" text-center text-white" style="margin: 0px;padding: 0px;text-align: center;padding-bottom: 30px;font-size: 30px;">#' . $row['num'] . ' - ' . $row['title'] . '</h2>
            <h2 class=" text-center text-white" style="margin: 0px;padding: 0px 0px;text-align: center;padding-bottom: 75px;font-size: 30px;background: #454545;padding-top: 75px;">' . $row['complaint'] . '</h2>
            <h5 class=" text-center text-white" style="margin: 0px;padding: 0px;text-align: center;padding-bottom: 0px;padding-top: 10px;font-size: 20px;"> Status : '  . $row['status'] . '</h5>
            </div>
            ';
        }

        ?>
    </section>
    <section id="contact">
        <div class="container">
            <h2 class="text-uppercase text-center text-secondary mb-0">tickets To Me</h2>
        </div>
        <div
            style="background: #000000;height: 350px;width: 350px;margin: 50px 100px;padding: 30px 0px;border-radius: 50px;">
            <h2 class="text-uppercase text-center text-white"
                style="margin: 0px;padding: 0px;text-align: center;padding-bottom: 30px;font-size: 30px;">title</h2>
            <h2 class="text-uppercase text-center text-white"
                style="margin: 0px;padding: 0px 0px;text-align: center;padding-bottom: 75px;font-size: 30px;background: #454545;padding-top: 75px;">
                ticket</h2>
            <h2 class="text-uppercase text-center text-white"
                style="margin: 0px;padding: 0px;text-align: center;padding-bottom: 0px;padding-top: 10px;font-size: 30px;">
                Redirect</h2>
        </div>
        <div></div>
    </section>
    <footer class="footer text-center"></footer>
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright ©&nbsp;future face 2020</small></div>
    </div>
    <div class="d-lg-none scroll-to-top position-fixed rounded"><a
            class="d-block js-scroll-trigger text-center text-white rounded" href="#page-top"><i
                class="fa fa-chevron-up"></i></a></div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/freelancer.js"></script>
</body>

</html>