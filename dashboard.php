<?php
/**
 * Created by PhpStorm.
 * User: Oyekan Oluwatobi
 * Date: 6/30/2019
 * Time: 10:31 PM
 */
?>
<?php include('dbcon.php'); ?>
<?php
include('session.php');
?>


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
    <!--    <link rel="stylesheet" href="form.css">-->
    <!--    <script src="form.js"></script>-->
</head>
<body>
<!--<div class="container">-->
<!--    <div class="container form-top">-->
        <div class="row">
            <!--            <div class="card">-->
            <!--                <div class="panel panel-danger">-->
            <!--                    <div class="panel-body">-->
                        <h4 style="color: blue" align="justify"><img src="images/lasulogo.PNG" alt="lasu"> Sociological
                            Analysis of the Emerging e-Conflict among Youth (15years to 35 years) on Facebook and
                            WhatsApp Platforms </h4>
                        <!--<ul class="nav navbar-nav">-->
                        <ul class="panel">
                            <li><a href="index.html">HOME</a></li>
                            <li><a href="questionnaire.php">QUESTIONNAIRE</a></li>
                            <!--<li><a href="#">CONTACT / FEEDBACK</a></li>-->
                            <BR>
                            <li><a href="logout.php" style="color: red"> LOGOUT </a></li>
                        </ul>
            <h1 style="color: blue" ALIGN="center"> ADMINISTRATOR'S DASHBOARD</h1>
            <h3 style="color: blue" align="center">Feed backs from Participants</h3>
            <br>
            <a href="exportallexcel.php" style="color: red"><strong><h4 align="left"> ----Export Report to
                        Excel----</h4></strong> </a>


            <?php
            $result = mysqli_query($con, "SELECT * FROM questionnaire");

            echo "<table border='1' cellspacing='0' cellpadding='0'>
                                <tr>
                                <th>S/N</th>
                                    <th>Age</th>
                                    <th>Sex</th>
                                    <th>Location</th>
                                    <th>Education</th>
                                    <th>Religion</th>
                                    <th>Race</th>
                                    <th>Have you ever had any form of fight with anyone on the social media platforms?</th>
                                    <th>If yes to the question above, how often do you fight?</th>
                                    <th>What kind of fight? (You may pick more than one)</th>
                                    <th>How do you express that e-conflict on the social media platforms?</th>
                                    <th>Have you heard about people having conflict on or using the social media?</th>
                                    <th>What in particular caused the conflict</th>
                                    <th>What are elements of the posts/tag that can lead to conflict</th>
                                    <th>What categories of people do you have e-conflict with regularly</th>
                                    <th>Have you ever met someone you had conflict with on the social media in the real world?</th>
                                    <th>If you ever meet anyone you have had conflict with online before, what are the possible behavioral disposition?</th>
                                    <th>What determines your behavioral disposition towards this person</th>
                                    <th>How do you know if a person is having conflict with you?</th>
                                    <th>When you have conflict with someone online, do you feel unsafe?</th>
                                    <th>What are the things that make you to feel unsafe</th>
                                    <th>What are the likely consequences you expect during online conflict with another person?</th>
                                    <th>Do you know of anyone who has suffered in real world for a conflict that was initiated online?</th>
                                    <th>If yes, what kind of experience?</th>
                                    <th>How do you respond, if in conflict online with: Someone you can see?</th>
                                    <th>How do you respond, if in conflict online with: Someone you may see?</th>
                                    <th>How do you respond, if in conflict online with: Someone you met in the past?</th>
                                    <th>How do you respond, if in conflict online with: Someone of some race as you</th>
                                    <th>How do you respond, if in conflict online with: Someone of same color as you/someone of your culture?</th>
                                    <th>How do you respond, if in conflict online with: Someone you may never see?</th>
                                    <th>How do you respond, if in conflict online with: Someone of same age?</th>
                                </tr>";

            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['age'] . "</td>";
                echo "<td>" . $row['sex'] . "</td>";
                echo "<td>" . $row['location'] . "</td>";
                echo "<td>" . $row['Education'] . "</td>";
                echo "<td>" . $row['religion'] . "</td>";
                echo "<td>" . $row['race'] . "</td>";
                echo "<td>" . $row['any_fight'] . "</td>";
                echo "<td>" . $row['how_often'] . "</td>";
                echo "<td>" . $row['kind_of_fight'] . "</td>";
                echo "<td>" . $row['express_that_e_conflict_on_social_media'] . "</td>";
                echo "<td>" . $row['heard_about_people_having_conflict_social_media'] . "</td>";
                echo "<td>" . $row['cause_of_conflict'] . "</td>";
                echo "<td>" . $row['what_are_elements'] . "</td>";
                echo "<td>" . $row['cat_ppl_e_conflict_everyday'] . "</td>";
                echo "<td>" . $row['met_someone_e_conflict_with'] . "</td>";
                echo "<td>" . $row['possible_behavioral_disposition'] . "</td>";
                echo "<td>" . $row['determines_your_behavioral_disposition'] . "</td>";
                echo "<td>" . $row['how_do_know_if_person_have_e_conflict'] . "</td>";
                echo "<td>" . $row['feel_unsafe'] . "</td>";
                echo "<td>" . $row['things_make_you_feel_unsafe'] . "</td>";
                echo "<td>" . $row['likely_consequences'] . "</td>";
                echo "<td>" . $row['know_anyone_suffered_from_e_conflict'] . "</td>";
                echo "<td>" . $row['yes_what_kind_of_experience'] . "</td>";
                echo "<td>" . $row['someone_you_can_see'] . "</td>";
                echo "<td>" . $row['someone_you_may_see'] . "</td>";
                echo "<td>" . $row['someone_you_met_in_past'] . "</td>";
                echo "<td>" . $row['someone_from_your_race'] . "</td>";
                echo "<td>" . $row['someone_of_same_color'] . "</td>";
                echo "<td>" . $row['someone_you_may_never_see'] . "</td>";
                echo "<td>" . $row['someone_of_same_age'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";

            mysqli_close($con);
            ?>

                        <br><br><br><br><br><br><br>
                        <br><br><br><br><br>


                        <!--footer section-->
                        <footer class="main-footer">
                            <div class="container">
                                <div class="pull-right hidden-xs">
                                    <b>Design by <a href="https://sparklegrid.tech/">Tobaino (Sparklegrid)</a> </b>
                                </div>
                                <strong>Copyright &copy; 2019 Faculty of Social Science (All rights reserved)</strong>
                            </div>
                        </footer>
                        <!--end of footer section-->
                    </div>
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->