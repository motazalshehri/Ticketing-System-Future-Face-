<?php
session_start();
if ((!isset($_SESSION['name']))) {
    header("Location:login.php");
} else {
    echo '<script language="javascript">';
    if (isset($_GET['sent'])) {
        echo 'alert("' . $_GET['sent'] . '");';
    }
    if (isset($_GET['completed'])) {
        echo 'alert("' . $_GET['completed'] . '");';
    }
    if (isset($_GET['redirected'])) {
        echo 'alert("' . $_GET['redirected'] . '");';
    }
}
echo '</script>';
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

    <style>
        section.scroll {

            width: 100%;
            margin-bottom: 2rem;
            border: 0;
            overflow-x: scroll;
            display: flex;

        }

        a {
            color: #69C;
            text-decoration: none;
        }

        a:hover {
            color: #F60;
        }

        h1 {
            font: 1.7em;
            line-height: 110%;
            color: #000;
        }

        p {
            margin: 0 0 20px;
        }


        input {
            outline: none;
        }

        input[type=search] {
            -webkit-appearance: textfield;
            -webkit-box-sizing: content-box;
            font-family: inherit;
            font-size: 100%;
        }

        input::-webkit-search-decoration,
        input::-webkit-search-cancel-button {
            display: none;
        }


        input[type=search] {
            background: #ededed url(https://static.tumblr.com/ftv85bp/MIXmud4tx/search-icon.png) no-repeat 9px center;
            border: solid 1px #ccc;
            padding: 9px 10px 9px 32px;
            width: 55px;

            -webkit-border-radius: 10em;
            -moz-border-radius: 10em;
            border-radius: 10em;

            -webkit-transition: all .5s;
            -moz-transition: all .5s;
            transition: all .5s;
        }

        input[type=search]:focus {
            width: 130px;
            background-color: #fff;
            border-color: #66CC75;

            -webkit-box-shadow: 0 0 5px rgba(109, 207, 246, .5);
            -moz-box-shadow: 0 0 5px rgba(109, 207, 246, .5);
            box-shadow: 0 0 5px rgba(109, 207, 246, .5);
        }


        input:-moz-placeholder {
            color: #999;
        }

        input::-webkit-input-placeholder {
            color: #999;
        }
    </style>
</head>

<body id="page-top">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-secondary text-uppercase" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top" style="background-color: transparent;"><img src="ff.png" alt="Future Face" style="height: 75px; width:150px;"></a>
            <button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio" style="background-color: transparent;">new ticket</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about" style="background-color: transparent;">my tickets</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact" style="background-color: transparent;">tickets to me</a></li>
                    <form action="searchpageuser.php" method="post">
                        
                        <input type="search" id="search" name="term" placeholder="Search">
                    </form>
                  
                    <li class="nav-item mx-0 mx-lg-1">



        <li class="dropdown" class="nav-item mx-0 mx-lg-1"  style=" background-color:transparent color:black;" ><a   class="nav-link py-3 px-0 px-lg-3 "  style=" margin-bottom:5px; color:#fff;"  class="dropdown-toggle" data-toggle="dropdown" href="#"> <?php echo $_SESSION['name'];
        ;?> <span class="caret"></span></a>
        <ul style=" background-color:343432;" class="dropdown-menu">

          <li><a href="#"><a href="logout.php" style="background-color: transparent;">
                            <button type="button" style="margin-left: 35px;" class="btn btn-danger">Logout</button></a>
</a></li>
        </ul>        

                    </li>
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
                    <div class="control-group" style="margin:20px 0px">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label></label>
                            <input class="form-control" type="text" id="name-1" required="" placeholder="Title" name="title" maxlength="30" >
                            <small class="form-text text-danger help-block"></small>
                        </div>

                        <select id="departments" name="department" class="form-control form-control-lg" required style="padding: 0px;">
                            <option value="" disabled selected>Department</option>
                            <option value="IT">IT</option>
                            <option value="Accounting">Accounting</option>
                            <option value="Marketing">Marketing</option>
                            <option value="HR">HR</option>
                        </select>

                    </div>
                    <div class="control-group"></div>
                    <div class="control-group"></div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-5 pb-2">
                            <textarea class="form-control" id="message-1" required="" placeholder="Complaint" name="complaint" rows="5"></textarea>
                            <small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div id="success-1"></div>
                    <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton-1" type="submit">Send</button></div>
                    <?php echo " <input name='sentBy' type= 'hidden' value='" . $_SESSION['name'] . "' > "; ?>
                </form>
            </div>
        </div>
    </section>

    <div class="container" style="background-color: #ffffff ; max-width:unset ;  height:50px">
        <h1 class="text-uppercase text-center text-" style="margin-bottom:0px; padding-top:10px;" >my tickets</h1>
    </div>
    <section id="about" class="bg-primary text-white mb-0 scroll" style="float:left; height:auto; background-color: #ffffff !important; ">

    <div style=" margin: auto; ">
            <table id="dtOrderExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%" style="font-size:25px;">
                <thead>
                    <tr>
                        <th class="th-sm">Number</th>
                        <th class="th-sm">Title</th>
                        <th class="th-sm">Department</th>
                        <th class="th-sm">Status</th>
                        <th class="th-sm">Sent to</th>
                        <th class="th-sm">Date</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    include 'connecttoDB.php';
                    $result = mysqli_query($conn, "SELECT * FROM tickets WHERE sentBy = '" . $_SESSION['name'] . "'");


                    while ($row = mysqli_fetch_array($result)) {

                        echo '
                <tr>
                    <td>' . $row['num'] . '</td>

                    <td>
                    <a href="adminCard.php?id=' . $row['num'] . '" style="color:#f09329;">
                    ' . $row['title'] . '
                    </a>
                    </td>

                    <td>' . $row['department'] . '</td>
                    <td>' . $row['status'] . '</td>
                    <td>' . $row['sentTo'] . '</td>
                    <td>' . $row['dt'] . '</td>
                </tr>
            ';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>

    <div class="container">
        <h1 class="text-uppercase text-center text-secondary mb-0">tickets To Me</h1>
    </div>

    <section id="contact" class="scroll background-color:white" style="  height:auto">

    <div style=" margin: auto; ">
            <table id="dtOrderExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%" style="font-size:25px;">
                <thead>
                    <tr>
                        <th class="th-sm">Number</th>
                        <th class="th-sm">Title</th>
                        <th class="th-sm">Department</th>
                        <th class="th-sm">Status</th>
                        <th class="th-sm">Sent to</th>
                        <th class="th-sm">Priority</th>
                        <th class="th-sm">Date</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    include 'connecttoDB.php';
                    $result = mysqli_query($conn, "SELECT * FROM tickets WHERE sentTo = '" . $_SESSION['name'] . "'");


                    while ($row = mysqli_fetch_array($result)) {

                        echo '
                <tr>
                    <td>' . $row['num'] . '</td>

                    <td>
                    <a href="adminCard.php?id=' . $row['num'] . '" style="color:#f09329;">
                    ' . $row['title'] . '
                    </a>
                    </td>

                    <td>' . $row['department'] . '</td>
                    <td>' . $row['status'] . '</td>
                    <td>' . $row['sentTo'] . '</td>
                    <td>' . $row['priority'] . '</td>
                    <td>' . $row['dt'] . '</td>
                </tr>
            ';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>



    <footer class="footer text-center"></footer>
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright ©️&nbsp;future face 2020</small></div>
    </div>
    <div class="d-lg-none scroll-to-top position-fixed rounded"><a class="d-block js-scroll-trigger text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a></div>
    </div>


    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/freelancer.js"></script>
</body>

</html>