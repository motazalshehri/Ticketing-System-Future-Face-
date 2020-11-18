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

            <div style="text-align: center;">
            <div>
                <h5 style="font-size: 1.5rem;">#' . $row['num'] . ' - ' . $row['title'] . '</h5>
                <h5 style="font-size: 1.5rem;">To the ' . $row['department'] . ' department</h5>
                </div>
            <div>
                <p>' . $row['complaint'] . '</p>
            </div>
            <div>
            <h5 style="font-size: 1.5rem;">status: '.$row['status'].'</h5>
            </div>
            <div>
                <h5 style="font-size: 1.5rem;">Sent by: ' . $row['sentBy'] . '</h5>
            </div>

                <h5 style="font-size: 1.5rem;">Transfer to</h5>
                <form method="POST" action="sendTicket.php">
                    <input name="id" type= "hidden" value='.$row['num'].'>
                    <select id="departments" name="department" class="form-control form-control-lg" required style="padding: 0px; width:200px; margin: auto;">
                        <option value="" disabled selected>Department</option>
                        <option value="IT">IT</option>
                        <option value="Accounting">Accounting</option>
                        <option value="Marketing">Marketing</option>
                        <option value="HR">HR</option>
                    </select>
                    <br>
                    <select id="members" name="member" class="form-control form-control-lg" required style="margin:20px; padding: 0px; width:200px; margin: auto;">
                    <option value="" disabled selected>Member</option>
                    ';
                    include 'connecttoDB.php';
                    $usersResult = mysqli_query($conn, "SELECT * FROM User WHERE type='User' ");
            
            
                    while ($usersRow = mysqli_fetch_array($usersResult)) {
            
                        echo '<option value="'.$usersRow['name'].'">'.$usersRow['name'].'</option>';}

                    echo '
                        </select>

                    <button class="btn btn-primary" type="button" onClick="window.history.back();" style="margin: 10px 40px;height: 46px;">Back</button>
                    <button class="btn btn-primary" type="submit" style="margin: 10px 30px;height: 46px;">Send</button>
                </form>
            </div>
        </div>
            ';
        }

        ?>

    </div>

    <br><br>
    <footer class="footer text-center"></footer>
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright ©&nbsp;future face 2020</small></div>
    </div>
    </div>

    </article>
</body>