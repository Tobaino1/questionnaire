<?php
/**
 * Created by PhpStorm.
 * User: Oyekan Oluwatobi
 * Date: 6/30/2019
 * Time: 9:53 PM
 */
?>


<?php session_start(); ?>

<?php include('dbcon.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="images/lasulogo.PNG">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Questionnaire</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="form.css">
    <script src="form.js"></script>
</head>
<body>
<div class="container">
    <div class="container form-top">
        <div class="row">
            <div class="card">
                <div class="panel panel-danger">
                    <div class="panel-body">
                        <h4 style="color: blue" align="justify"><img src="images/lasulogo.PNG" alt="lasu"> Sociological
                            Analysis of the Emerging e-Conflict among Youth (15years to 35 years) on Facebook and
                            WhatsApp Platforms </h4>
                        <!--<ul class="nav navbar-nav">-->
                        <ul class="panel">
                            <li><a href="index.html">HOME</a></li>
                            <li><a href="questionnaire.php">QUESTIONNAIRE</a></li>
                            <!--                            <li><a href="#">CONTACT / FEEDBACK</a></li>-->
                            <li><a href="admin.php"> ADMIN </a></li>
                        </ul>

                        <div id="content">
                            <div class="box-section banner-section triggerAnimation animated" data-animate="rollIn">

                                <br><br>

                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="well contact-form-container">

                                                <form action="#" method="post" style="color: blue">
                                                    <h4 style="color: blue">ADMINISTRATOR'S LOGIN PAGE</h4>

                                                    <div class="form-item">
                                                        <span><i class="fa fa-user" style="color: green"></i></span>
                                                        <input type="text" name="user" required="required"
                                                               placeholder="Username" autofocus required></input>
                                                    </div>
                                                    <br>
                                                    <div class="form-item">
                                                        <span><i class="fa fa-key" style="color: green"></i></span>
                                                        <input type="password" name="pass" required="required"
                                                               placeholder="Password" required></input>
                                                    </div>
                                                    <br>
                                                    <div class="button-panel">
                                                        <input type="submit" class="button" title="Log In" name="login"
                                                               value="Login"></input>
                                                    </div>
                                                </form>

                                                <!--<div class="form-wrapper">-->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                if (isset($_POST['login'])) {
                                    $username = mysqli_real_escape_string($con, $_POST['user']);
                                    $password = mysqli_real_escape_string($con, $_POST['pass']);

                                    $query = mysqli_query($con, "SELECT * FROM users WHERE  password='$password' and username='$username'");
                                    $row = mysqli_fetch_array($query);
                                    $num_row = mysqli_num_rows($query);

                                    if ($num_row > 0) {
                                        $_SESSION['user_id'] = $row['user_id'];
                                        header('location:dashboard.php');
//                            echo'tobi';
                                    } else {
                                        echo 'Invalid Username and Password Combination';
                                    }
                                }
                                ?>

                            </div>

                            <br><br><br><br><br><br><br>
                            <br><br><br><br><br>


                            <!--footer section-->
                            <footer class="main-footer">
                                <div class="container">
                                    <div class="pull-right hidden-xs">
                                        <b>Design by <a href="https://sparklegrid.tech/">Tobaino (Sparklegrid)</a> </b>
                                    </div>
                                    <strong>Copyright &copy; 2019 Faculty of Social Science (All rights
                                        reserved)</strong>
                                </div>
                            </footer>
                            <!--end of footer section-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
