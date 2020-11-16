<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin home page</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="orange.css">
</head>

<body>

    <hr>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-secondary text-uppercase" id="mainNav">
    <div class="container"><a class="navbar-brand js-scroll-trigger" href="admin home page.php" style="background-color: transparent;">
                <img src="ff.png"  alt="Future Face" style="height: 75px; width:150px;">
            </a>
                        <button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1"></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="admin home page.php#portfolio" style="background-color: transparent;">Tickets</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="admin home page.php#about" style="background-color: transparent;">redirected tickets</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 " href="registerpage.php" style="background-color: transparent;">Register an account</a></li>
                    <li class="nav-item mx-0 mx-lg-0"><a href="logout.php" style="background-color: transparent;"><button type="button" style="margin-left: 35px;" class="btn btn-danger">Logout</button></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" style="padding-top: 120px;">

        <?php
        include 'connecttoDB.php';
        $result = mysqli_query($conn, "SELECT * FROM tickets WHERE num='$_GET[id]' ");


        while ($row = mysqli_fetch_array($result)) {

            echo '

            <div>
            <div>
                <h5>#' . $row['num'] . ' - ' . $row['title'] . '</h5>
            </div>
            <div>
                <p>' . $row['complaint'] . '</p>
            </div>
            <div>
                <h5>sent by: ' . $row['sentBy'] . '</h5>
            </div>
            <h2 class="text-uppercase text-center text-white" style="margin: 0px;padding: 0px;text-align: center;padding-bottom: 0px;padding-top: 10px;font-size: 30px;">transfer to</h2>
                <div class="dropdown"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="text-align: center;margin: 10px 50px;width: 250px;font-size: 20px;">select department&nbsp;</button>
                    <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                </div>
                <div class="dropdown"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="width: 250px;margin: 10px 50px;font-size: 20px;">select member&nbsp;</button>
                    <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                </div>
    
                <button class="btn btn-primary" type="button" style="margin: 10px 145px;height: 46px;">Send</button>
                <button class="btn btn-primary" type="button" onClick="window.history.back();" style="margin: 10px 145px;height: 46px;">Back</button>
    
            </div>
        </div>
            ';
        }

        ?>

    </div>
    <form action="sendTicket.php">
        <label for="departments">Choose a department:</label>
        <select id="departments" name="department">
            <option value="IT">IT</option>
            <option value="Accounting">Accounting</option>
            <option value="Marketing">Marketing</option>
            <option value="HR">HR</option>
        </select>
        <input type="submit">
    </form>
    <br><br>
    <footer class="footer text-center"></footer>
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright ©&nbsp;future face 2020</small></div>
    </div>
    </div>

    </article>
</body>