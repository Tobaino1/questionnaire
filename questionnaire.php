<?php
/**
 * Created by PhpStorm.
 * User: Oyekan Oluwatobi
 * Date: 6/30/2019
 * Time: 12:43 AM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>questionnaire</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--    <link rel="stylesheet" href="form.css">-->
    <script src="form.js"></script>
</head>
<body>
<div class="container">
    <!--    <div class="container form-top">-->
    <!--        <div class="row">-->
            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                <!--            <div class="container form-top">-->
                <div class="card">
                    <!--            <div class="panel panel-danger">-->
                    <div class="panel-body">

                        <p align="justify">Dear Respondent,
                            I am a Daniel Chukwuma, a masters degree student of the Department of Sociology, lagos State
                            University, Lagos, Nigeria. I am carrying out a study on the “Sociological Analysis of the
                            Emerging e-Conflict among Youth (15years to 35 years on Facebook and WhatsApp Platforms”.
                            The purpose of the study is merely for the attainment of Masters degree and all information
                            provided are going to be kept confidential. This is why there would be no trace information
                            on the questionnaire.
                            Thank you.
                        </p>
                        <p align="justify"> Supervisor: Adedeji Oyenuga PhD </p>
                        <p align="justify"> Instruction: Do not fill this questionnaire if you have filled it before on
                            Facebook or WhatsApp.
                        </p>
                        <form action="questionnaire_submit.php">
                            <div class="form-group">
                                <p align="center" style="color: blue"><strong>Section A: Socio-demographic
                                        characteristics</strong></p>

                                <script>   function check(input) {

                                        var checkboxes = document.getElementsByClassName("radioCheck");

                                        for (var i = 0; i < checkboxes.length; i++) {
                                            //uncheck all
                                            if (checkboxes[i].checked == true) {
                                                checkboxes[i].checked = false;
                                            }
                                        }

                                        //set checked of clicked object
                                        if (input.checked == true) {
                                            input.checked = false;
                                        } else {
                                            input.checked = true;
                                        }
                                    }</script>
                                <p><label>1. Age</label></p>
                                <input type="checkbox" name="age" value="21-25" class="radioCheck"
                                       onclick="check(this);"/>
                                21-25
                                <input type="checkbox" name="age" value="26-30" class="radioCheck"
                                       onclick="check(this);"/>
                                26-30
                                <input type="checkbox" name="age" value="31-35" class="radioCheck"
                                       onclick="check(this);"/>
                                31-35
                                <input type="checkbox" name="age" value="36-40" class="radioCheck"
                                       onclick="check(this);"/>
                                36-40
                                <input type="checkbox" name="age" value="41-45" class="radioCheck"
                                       onclick="check(this);"/>
                                41-45
                                <!--                                <input type="text" name="age" id="age" placeholder="other options">-->
                            </div>


                            <div class="form-group">
                                <script>   function check(input) {

                                        var checkboxes = document.getElementsByClassName("radioCheck");

                                        for (var i = 0; i < checkboxes.length; i++) {
                                            //uncheck all
                                            if (checkboxes[i].checked == true) {
                                                checkboxes[i].checked = false;
                                            }
                                        }

                                        //set checked of clicked object
                                        if (input.checked == true) {
                                            input.checked = false;
                                        } else {
                                            input.checked = true;
                                        }
                                    }</script>
                                <p><label>2. Sex </label></p>
                                <input type="checkbox" name="sex" value="Male" class="radioCheck"
                                       onclick="check(this);"/>
                                Male
                                <input type="checkbox" name="sex" value="Female" class="radioCheck"
                                       onclick="check(this);"/>
                                Female
                                <input type="checkbox" name="sex" value="Transgendered" class="radioCheck"
                                       onclick="check(this);"/>
                                Transgendered
                                <input type="checkbox" name="sex" value="Genderless" class="radioCheck"
                                       onclick="check(this);"/>
                                Genderless
                                <input type="checkbox" name="sex" value="Cisgender" class="radioCheck"
                                       onclick="check(this);"/>
                                Cisgender
                                <input type="checkbox" name="sex" value="Bi-sexual" class="radioCheck"
                                       onclick="check(this);"/>
                                Bi-sexual
                                <input type="checkbox" name="sex" value="Non-binary" class="radioCheck"
                                       onclick="check(this);"/>
                                Non-binary
                                <input type="checkbox" name="sex" value="Pan Gender" class="radioCheck"
                                       onclick="check(this);"/>
                                Pan Gender
                                <input type="checkbox" name="sex" value="Inter-sex" class="radioCheck"
                                       onclick="check(this);"/>
                                Inter-sex
                                <input type="checkbox" name="sex" value="aGender" class="radioCheck"
                                       onclick="check(this);"/>
                                aGender
                            </div>

                            <script>   function check(input) {

                                    var checkboxes = document.getElementsByClassName("radioCheck");

                                    for (var i = 0; i < checkboxes.length; i++) {
                                        //uncheck all
                                        if (checkboxes[i].checked == true) {
                                            checkboxes[i].checked = false;
                                        }
                                    }

                                    //set checked of clicked object
                                    if (input.checked == true) {
                                        input.checked = false;
                                    } else {
                                        input.checked = true;
                                    }
                                }</script>
                            <p><label>3. Location</label></p>
                            <input type="checkbox" name="location" value="Nigeria" class="radioCheck"
                                   onclick="check(this);"/>
                            Nigeria
                            <input type="checkbox" name="location" value="Other parts of Africa" class="radioCheck"
                                   onclick="check(this);"/>
                            Other Parts of Africa
                            <input type="checkbox" name="location" value="Asia" class="radioCheck"
                                   onclick="check(this);"/>
                            Asia
                            <input type="checkbox" name="location" value="North America" class="radioCheck"
                                   onclick="check(this);"/>
                            North America
                            <input type="checkbox" name="location" value="South America" class="radioCheck"
                                   onclick="check(this);"/>
                            South America
                            <input type="checkbox" name="location" value="Oceania" class="radioCheck"
                                   onclick="check(this);"/>
                            Oceania
                            <input type="checkbox" name="location" value="Antarctica" class="radioCheck"
                                   onclick="check(this);"/>
                            Antarctica
                            <!--                                <input type="text" name="age" id="age" placeholder="other options">-->
                            </div>
                    <script>   function check(input) {

                            var checkboxes = document.getElementsByClassName("radioCheck");

                            for (var i = 0; i < checkboxes.length; i++) {
                                //uncheck all
                                if (checkboxes[i].checked == true) {
                                    checkboxes[i].checked = false;
                                }
                            }

                            //set checked of clicked object
                            if (input.checked == true) {
                                input.checked = false;
                            } else {
                                input.checked = true;
                            }
                        }</script>
                    <p><label>4. Education</label></p>
                    <input type="checkbox" name="Education" value="Early year/Primary completed" class="radioCheck"
                           onclick="check(this);"/>
                    Nigeria
                    <input type="checkbox" name="Education" value="In Secondary School" class="radioCheck"
                           onclick="check(this);"/>
                    Other Parts of Africa
                    <input type="checkbox" name="Education" value="Secondary School completed" class="radioCheck"
                           onclick="check(this);"/>
                    Asia
                    <input type="checkbox" name="Education" value="College/University" class="radioCheck"
                           onclick="check(this);"/>
                    North America
                    <input type="checkbox" name="Education" value="Masters" class="radioCheck" onclick="check(this);"/>
                    South America
                    <input type="checkbox" name="Education" value="PhD" class="radioCheck" onclick="check(this);"/>
                    Oceania
                    <input type="text" name="Education" placeholder="Others">

                </div>

                <script>   function check(input) {

                        var checkboxes = document.getElementsByClassName("radioCheck");

                        for (var i = 0; i < checkboxes.length; i++) {
                            //uncheck all
                            if (checkboxes[i].checked == true) {
                                checkboxes[i].checked = false;
                            }
                        }

                        //set checked of clicked object
                        if (input.checked == true) {
                            input.checked = false;
                        } else {
                            input.checked = true;
                        }
                    }</script>
                <br>
                <p><label>5. Religion</label></p>
                <input type="checkbox" name="religion" value="Christianity" class="radioCheck" onclick="check(this);"/>
                Christianity
                <input type="checkbox" name="religion" value="Islam" class="radioCheck" onclick="check(this);"/>
                Islam
                <input type="checkbox" name="religion" value="Catholic" class="radioCheck" onclick="check(this);"/>
                Catholic
                <input type="checkbox" name="religion" value="Traditionalist" class="radioCheck"
                       onclick="check(this);"/>
                Traditionalist
                <input type="text" name="religion" placeholder="Others">
                <br>

                <script>   function check(input) {

                        var checkboxes = document.getElementsByClassName("radioCheck");

                        for (var i = 0; i < checkboxes.length; i++) {
                            //uncheck all
                            if (checkboxes[i].checked == true) {
                                checkboxes[i].checked = false;
                            }
                        }

                        //set checked of clicked object
                        if (input.checked == true) {
                            input.checked = false;
                        } else {
                            input.checked = true;
                        }
                    }</script>

                <p><label>6. Race</label></p>
                <input type="checkbox" name="race" value="Caucasoid" class="radioCheck" onclick="check(this);"/>
                Caucasoid
                <input type="checkbox" name="race" value="Negroid" class="radioCheck" onclick="check(this);"/>
                Negroid
                <input type="checkbox" name="race" value="Caucasian" class="radioCheck" onclick="check(this);"/>
                Caucasian
                <input type="checkbox" name="race" value="Australoid" class="radioCheck" onclick="check(this);"/>
                Australoid
                <input type="checkbox" name="race" value="Mixed" class="radioCheck" onclick="check(this);"/>
                Mixed
                <input type="text" name="race" placeholder="Others">

                <br><br>


                <p align="center" style="color: blue"><strong>Section B: Forms of e-Conflict</strong></p>

                <script>   function check(input) {

                        var checkboxes = document.getElementsByClassName("radioCheck");

                        for (var i = 0; i < checkboxes.length; i++) {
                            //uncheck all
                            if (checkboxes[i].checked == true) {
                                checkboxes[i].checked = false;
                            }
                        }

                        //set checked of clicked object
                        if (input.checked == true) {
                            input.checked = false;
                        } else {
                            input.checked = true;
                        }
                    }</script>


                <p><label>7. Have you ever had any form of fight with anyone on the social media platforms? </label></p>
                <input type="checkbox" name="had_any_fight_on_social_media" value="Yes" class="radioCheck"
                       onclick="check(this);"/>
                Yes
                <input type="checkbox" name="had_any_fight_on_social_media" value="No" class="radioCheck"
                       onclick="check(this);"/>
                No
                <br><br>

                <script>   function check(input) {

                        var checkboxes = document.getElementsByClassName("radioCheck");

                        for (var i = 0; i < checkboxes.length; i++) {
                            //uncheck all
                            if (checkboxes[i].checked == true) {
                                checkboxes[i].checked = false;
                            }
                        }

                        //set checked of clicked object
                        if (input.checked == true) {
                            input.checked = false;
                        } else {
                            input.checked = true;
                        }
                    }</script>


                <p><label>8. If yes to the question above, how often do you fight?</label></p>
                <input type="checkbox" name="yes_how_often_do_you_fight" value="Severally" class="radioCheck"
                       onclick="check(this);"/>
                Severally
                <input type="checkbox" name="yes_how_often_do_you_fight" value="Few Occasions" class="radioCheck"
                       onclick="check(this);"/>
                Few Occasions
                <input type="checkbox" name="yes_how_often_do_you_fight" value="Seasonal" class="radioCheck"
                       onclick="check(this);"/>
                Seasonal
                <input type="text" name="how_often_do_you_fight" placeholder="Others">
                <br><br>

                <p><label>9. What can of fight? (You may pick more than one)</label></p>
                <input type="checkbox" name="kind_of_fight[]" value="Altercation">Altercation <br/>
                <input type="checkbox" name="kind_of_fight[]" value="Interpretation of post">Interpretation of post<br/>
                <input type="checkbox" name="kind_of_fight[]" value="Interpretation of status">Interpretation of
                status<br/>
                <input type="text" name="kind_of_fight" placeholder="Others"><br/>


                <br>

                <p><label>10. How do you express that e-conflict on the social media platforms? (You may pick more than
                        one)</label></p>
                <input type="checkbox" name="express_that_e-conflict_on_socialmedia[]" value="Blocking">Altercation
                <br/>
                <input type="checkbox" name="express_that_e-conflict_on_socialmedia[]" value="Refusal to check status">
                Refusal to check status<br/>
                <input type="checkbox" name="express_that_e-conflict_on_socialmedia[]"
                       value="Unfollowing">Unfollowing<br/>
                <input type="checkbox" name="express_that_e-conflict_on_socialmedia[]" value="Muting status">Muting
                status <br/>
                <input type="checkbox" name="express_that_e-conflict_on_socialmedia[]" value="Unfriending">
                Unfriending<br/>
                <input type="checkbox" name="express_that_e-conflict_on_socialmedia[]" value="Untagging photo">Untagging
                photo<br/>
                <input type="checkbox" name="express_that_e-conflict_on_socialmedia[]" value="Deleting photos">Deleting
                photos <br/>
                <input type="checkbox" name="express_that_e-conflict_on_socialmedia[]" value="Ignoring post"> Ignoring
                post<br/>
                <input type="checkbox" name="express_that_e-conflict_on_socialmedia[]" value="Use of insulting posts">
                Use of insulting posts<br/>
                <input type="text" name="express_that_e-conflict_on_socialmedia[]" placeholder="Others"><br/>


                <br><br>


                <p align="center" style="color: blue"><strong> Section C: Causes of e-Conflict on Social Media</strong>
                </p>

                <script>   function check(input) {

                        var checkboxes = document.getElementsByClassName("radioCheck");

                        for (var i = 0; i < checkboxes.length; i++) {
                            //uncheck all
                            if (checkboxes[i].checked == true) {
                                checkboxes[i].checked = false;
                            }
                        }

                        //set checked of clicked object
                        if (input.checked == true) {
                            input.checked = false;
                        } else {
                            input.checked = true;
                        }
                    }</script>


                <p><label>11. Have you heard about people having conflict on or using the social media?</label></p>
                <input type="checkbox" name="heard_about_people_having_conflict_socialmedia" value="Yes"
                       class="radioCheck" onclick="check(this);"/>
                Yes
                <input type="checkbox" name="heard_about_people_having_conflict_socialmedia" value="No"
                       class="radioCheck" onclick="check(this);"/>
                No

                <br><br>

                <p><label> 12. What in particular caused the conflict (you may pick more than one)</label></p>
                <input type="checkbox" name="cause_of_conflict[]" value="Post" class="radioCheck">
                Post <br>
                <input type="checkbox" name="cause_of_conflict[]" value="Status" class="radioCheck"/>
                Status <br>
                <input type="checkbox" name="cause_of_conflict[]" value="Response to post" class="radioCheck"/>
                Response to post <br>
                <input type="checkbox" name="cause_of_conflict[]" value="Interpretation of status" class="radioCheck"/>
                Interpretation of status <br>
                <input type="checkbox" name="cause_of_conflict[]" value="Photo tag" class="radioCheck"/>
                Photo tag <br>
                <input type="checkbox" name="cause_of_conflict[]" value="Status tag" class="radioCheck"/>
                Status tag


                <br><br>

                <p><label> 13. What are elements of the posts/tag that can lead to conflict? (You may pick more than
                        one)

                    </label></p>
                <input type="checkbox" name="elements_of_the_post_tag[]" value="Political alignment">
                Political alignment <br>
                <input type="checkbox" name="elements_of_the_post_tag[]" value="Status">
                Racial/Cultural alignment <br>
                <input type="checkbox" name="elements_of_the_post_tag[]" value="Racial/Cultural alignment">
                Religious beliefs <br>
                <input type="checkbox" name="elements_of_the_post_tag[]" value="Religious beliefs">
                Being opinionated<br>
                <input type="checkbox" name="elements_of_the_post_tag[]" value="Being opinionated">
                Being opinionated <br>
                <input type="checkbox" name="elements_of_the_post_tag[]" value="Pornographic contents">
                Pornographic contents<br>
                <input type="text" name="elements_of_the_post_tag" placeholder="Others">


                <br><br>

                <p><label>14. What categories of people do you have e-conflict with regularly? (You may pick more than
                        one) </label></p>
                <input type="checkbox" name="cat_ppl_e-conflict_everyday[]" value="People you see everyday">
                Political alignment <br>
                <input type="checkbox" name="cat_ppl_e-conflict_everyday[]" value="People you may see, if you want to">
                Racial/Cultural alignment <br>
                <input type="checkbox" name="cat_ppl_e-conflict_everyday[]" value="People you may see, if you want to">
                Religious beliefs <br>
                <input type="checkbox" name="cat_ppl_e-conflict_everyday[]" value="People you have never met">
                Being opinionated<br>
                <input type="checkbox" name="cat_ppl_e-conflict_everyday[]" value=" People you may never meet">
                Being opinionated <br>
                <input type="checkbox" name="cat_ppl_e-conflict_everyday[]" value="Pornographic contents">
                Pornographic contents
                <br> <input type="text" name="cat_ppl_e-conflict_everyday[]" placeholder="Others">
                <br> <br>


                <p align="center" style="color: blue"><strong>Section D: Transition of conflict from social media to
                        real world</strong></p>
                <script>   function check(input) {

                        var checkboxes = document.getElementsByClassName("radioCheck");

                        for (var i = 0; i < checkboxes.length; i++) {
                            //uncheck all
                            if (checkboxes[i].checked == true) {
                                checkboxes[i].checked = false;
                            }
                        }

                        //set checked of clicked object
                        if (input.checked == true) {
                            input.checked = false;
                        } else {
                            input.checked = true;
                        }
                    }</script>


                <p><label> 15. Have you ever met someone you had conflict with on the social media in the real world?
                    </label></p>
                <input type="checkbox" name="met_someone_e-conflict_with" value="Yes" class="radioCheck"
                       onclick="check(this);"/>
                Yes <br>
                <input type="checkbox" name="met_someone_e-conflict_with" value="No" class="radioCheck"
                       onclick="check(this);"/>
                No
                <br><br>


                <p><label>16. If you ever meet anyone you have had conflict with online before, what are the possible
                        behavioral disposition? (You may pick more than one)
                    </label></p>
                <input type="checkbox" name="possible_behavioral_disposition[]" value="Ignore">
                Ignore <br>
                <input type="checkbox" name="possible_behavioral_disposition[]" value="Continue the conflict">
                Continue the conflict <br>
                <input type="checkbox" name="possible_behavioral_disposition[]" value="Pretend like nothing happened">
                Pretend like nothing happened <br>
                <input type="checkbox" name="possible_behavioral_disposition[]" value="Report to other people">
                Report to other people<br>
                <input type="checkbox" name="possible_behavioral_disposition[]" value="Arrest">
                Arrest <br>
                <input type="text" name="possible_behavioral_disposition[]" placeholder="Others">
                <br><br>


                <p><label>17. What determines your behavioral disposition towards this person? (You may pick more than
                        one)
                        Ignore </label></p>
                <input type="checkbox" name="determines_your_behavioral_disposition[]"
                       value="Earlier relationship offline">
                Earlier relationship offline <br>
                <input type="checkbox" name="determines_your_behavioral_disposition[]" value="Gravity of the issue">
                Gravity of the issue<br>
                <input type="checkbox" name="determines_your_behavioral_disposition[]" value="Constant interaction">
                Constant interaction<br>
                <input type="text" name="determines_your_behavioral_disposition[]" placeholder="Others">
                <br><br>


                <p><label>18. How do you know if a person is having conflict with you? (You may pick more than one)
                    </label></p>
                <input type="checkbox" name="how_do_know_if_person_have_e-conflict[]"
                       value="When I stop seeing their posts">
                When I stop seeing their posts <br>
                <input type="checkbox" name="how_do_know_if_person_have_e-conflict[]" value="When we no longer chat">
                When we no longer chat<br>
                <input type="checkbox" name="how_do_know_if_person_have_e-conflict[]"
                       value="When I get monosyllabic responses">
                When I get monosyllabic responses<br>
                <input type="checkbox" name="how_do_know_if_person_have_e-conflict[]"
                       value="When the person starts posting abusive information">
                When the person starts posting abusive information<br>
                <input type="text" name="how_do_know_if_person_have_e-conflict[]" placeholder="Others">
                <br><br>

                <p align="center" style="color: blue"><strong>Section E: Real world consequences of online
                        conflict </strong></p>
                <script>   function check(input) {

                        var checkboxes = document.getElementsByClassName("radioCheck");

                        for (var i = 0; i < checkboxes.length; i++) {
                            //uncheck all
                            if (checkboxes[i].checked == true) {
                                checkboxes[i].checked = false;
                            }
                        }

                        //set checked of clicked object
                        if (input.checked == true) {
                            input.checked = false;
                        } else {
                            input.checked = true;
                        }
                    }</script>


                <p><label> 19. When you have conflict with someone online, do you feel unsafe?</label></p>
                <input type="checkbox" name="feel_unsafe" value="Yes" class="radioCheck" onclick="check(this);"/>
                Yes <br>
                <input type="checkbox" name="feel_unsafe" value="No" class="radioCheck" onclick="check(this);"/>
                No
                <br><br>

                <p><label>20. What are the things that make you to feel unsafe? (You may pick more than one)
                    </label></p>
                <input type="checkbox" name="things_make_you_feel_unsafe[]"
                       value="When the issue has political undertone">
                When the issue has political undertone <br>
                <input type="checkbox" name="things_make_you_feel_unsafe[]" value="When the issue is personal">
                When the issue is personal<br>
                <input type="checkbox" name="things_make_you_feel_unsafe[]"
                       value="When the person is perceived as dangerous">
                When the person is perceived as dangerous<br>
                <input type="checkbox" name="things_make_you_feel_unsafe[]"
                       value="When the person starts posting abusive information">
                If I live in the same area with the person<br>
                <input type="text" name="things_make_you_feel_unsafe[]" placeholder="Others">
                <br><br>

                <script>   function check(input) {

                        var checkboxes = document.getElementsByClassName("radioCheck");

                        for (var i = 0; i < checkboxes.length; i++) {
                            //uncheck all
                            if (checkboxes[i].checked == true) {
                                checkboxes[i].checked = false;
                            }
                        }

                        //set checked of clicked object
                        if (input.checked == true) {
                            input.checked = false;
                        } else {
                            input.checked = true;
                        }
                    }</script>
                <p><label> 21. What are the likely consequences you expect during online conflict with another
                        person?</label></p>
                <input type="checkbox" name="likely_consequences" value="Cyberstalking (monitoring spirit)"
                       class="radioCheck" onclick="check(this);"/>
                Cyberstalking (monitoring spirit)
                <input type="checkbox" name="likely_consequences" value="Cyberbullying" class="radioCheck"
                       onclick="check(this);"/>
                Cyberbullying
                <input type="checkbox" name="likely_consequences" value="Physical abuse" class="radioCheck"
                       onclick="check(this);"/>
                Physical abuse
                <input type="checkbox" name="likely_consequences" value="Threat to life" class="radioCheck"
                       onclick="check(this);"/>
                Threat to life
                <input type="checkbox" name="likely_consequences" value="Malice" class="radioCheck"
                       onclick="check(this);"/>
                Malice
                <input type="text" name="likely_consequences" placeholder="Others">
                <br><br>


                <p><label>22. Do you know of anyone who has suffered in real world for a conflict that was initiated
                        online?
                    </label></p>
                <input type="checkbox" name="know_anyone_suffered_from_e-conflict" value="Yes" class="radioCheck"
                       onclick="check(this);"/>
                Yes <br>
                <input type="checkbox" name="know_anyone_suffered_from_e-conflict" value="No" class="radioCheck"
                       onclick="check(this);"/>
                No
                <br><br>


                <script>   function check(input) {

                        var checkboxes = document.getElementsByClassName("radioCheck");

                        for (var i = 0; i < checkboxes.length; i++) {
                            //uncheck all
                            if (checkboxes[i].checked == true) {
                                checkboxes[i].checked = false;
                            }
                        }

                        //set checked of clicked object
                        if (input.checked == true) {
                            input.checked = false;
                        } else {
                            input.checked = true;
                        }
                    }</script>

                <p><label>23. If yes, what kind of experience? (You may pick more than one)</label></p>
                <input type="checkbox" name="yes_what_kind_of_experience" value="Stalking" (monitoring spirit)"
                class="radioCheck" onclick="check(this);" />
                Stalking
                <input type="checkbox" name="yes_what_kind_of_experience" value="Bullying" class="radioCheck"
                       onclick="check(this);"/>
                Bullying
                <input type="checkbox" name="yes_what_kind_of_experience" value="Rape" class="radioCheck"
                       onclick="check(this);"/>
                Rape
                <input type="checkbox" name="yes_what_kind_of_experience" value="Assault" class="radioCheck"
                       onclick="check(this);"/>
                Assault
                <input type="checkbox" name="yes_what_kind_of_experience" value="Malice" class="radioCheck"
                       onclick="check(this);"/>
                Malice
                <input type="text" name="yes_what_kind_of_experience" placeholder="Others">
                <br><br>

                <p style="color: blue" align="center"><strong>Section F: Social, Cultural and Spatial differentials in
                        e-Conflict</strong></p>

                <script>   function check(input) {

                        var checkboxes = document.getElementsByClassName("radioCheck");

                        for (var i = 0; i < checkboxes.length; i++) {
                            //uncheck all
                            if (checkboxes[i].checked == true) {
                                checkboxes[i].checked = false;
                            }
                        }

                        //set checked of clicked object
                        if (input.checked == true) {
                            input.checked = false;
                        } else {
                            input.checked = true;
                        }
                    }</script>
                <p><label> 24. How do you respond, if in conflict online with:
                        Someone you can see?</label></p>
                <input type="checkbox" name="someone_you_can_see" value="Blocking" class="radioCheck"
                       onclick="check(this);"/>
                Blocking
                <input type="checkbox" name="someone_you_can_see" value="Refusal to check status" class="radioCheck"
                       onclick="check(this);"/>
                Refusal to check status
                <input type="checkbox" name="someone_you_can_see" value="Unfollowing" class="radioCheck"
                       onclick="check(this);"/>
                Unfollowing
                <input type="checkbox" name="someone_you_can_see" value="Muting status" class="radioCheck"
                       onclick="check(this);"/>
                Muting status
                <input type="checkbox" name="someone_you_can_see" value="Unfriending" class="radioCheck"
                       onclick="check(this);"/>
                Unfriending.
                <input type="checkbox" name="someone_you_can_see" value="Untagging photo" class="radioCheck"
                       onclick="check(this);"/>
                Untagging photo
                <input type="checkbox" name="someone_you_can_see" value="Deleting photos" class="radioCheck"
                       onclick="check(this);"/>
                Deleting photos
                <input type="checkbox" name="someone_you_can_see" value="Ignoring photos" class="radioCheck"
                       onclick="check(this);"/>
                Ignoring photos
                <input type="checkbox" name="someone_you_can_see" value="Use of insulting posts" class="radioCheck"
                       onclick="check(this);"/>
                Use of insulting posts
                <input type="text" name="someone_you_can_see" placeholder="Others">
                <br><br>


                <script>   function check(input) {

                        var checkboxes = document.getElementsByClassName("radioCheck");

                        for (var i = 0; i < checkboxes.length; i++) {
                            //uncheck all
                            if (checkboxes[i].checked == true) {
                                checkboxes[i].checked = false;
                            }
                        }

                        //set checked of clicked object
                        if (input.checked == true) {
                            input.checked = false;
                        } else {
                            input.checked = true;
                        }
                    }</script>
                <p><label> 25. How do you respond, if in conflict online with:
                        Someone you may see?</label></p>
                <input type="checkbox" name="someone_you_may_see" value="Blocking" class="radioCheck"
                       onclick="check(this);"/>
                Blocking
                <input type="checkbox" name="someone_you_may_see" value="Refusal to check status" class="radioCheck"
                       onclick="check(this);"/>
                Refusal to check status
                <input type="checkbox" name="someone_you_may_see" value="Unfollowing" class="radioCheck"
                       onclick="check(this);"/>
                Unfollowing
                <input type="checkbox" name="someone_you_may_see" value="Muting status" class="radioCheck"
                       onclick="check(this);"/>
                Muting status
                <input type="checkbox" name="someone_you_may_see" value="Unfriending" class="radioCheck"
                       onclick="check(this);"/>
                Unfriending.
                <input type="checkbox" name="someone_you_may_see" value="Untagging photo" class="radioCheck"
                       onclick="check(this);"/>
                Untagging photo
                <input type="checkbox" name="someone_you_may_see" value="Deleting photos" class="radioCheck"
                       onclick="check(this);"/>
                Deleting photos
                <input type="checkbox" name="someone_you_may_see" value="Ignoring photos" class="radioCheck"
                       onclick="check(this);"/>
                Ignoring photos
                <input type="checkbox" name="someone_you_may_see" value="Use of insulting posts" class="radioCheck"
                       onclick="check(this);"/>
                Use of insulting posts
                <input type="text" name="someone_you_may_see" placeholder="Others">
                <br><br>


                <script>   function check(input) {

                        var checkboxes = document.getElementsByClassName("radioCheck");

                        for (var i = 0; i < checkboxes.length; i++) {
                            //uncheck all
                            if (checkboxes[i].checked == true) {
                                checkboxes[i].checked = false;
                            }
                        }

                        //set checked of clicked object
                        if (input.checked == true) {
                            input.checked = false;
                        } else {
                            input.checked = true;
                        }
                    }</script>
                <p><label> 26. How do you respond, if in conflict online with:
                        someone you met in the past</label></p>
                <input type="checkbox" name="someone_you_met_in_past" value="Blocking" class="radioCheck"
                       onclick="check(this);"/>
                Blocking
                <input type="checkbox" name="someone_you_met_in_past" value="Refusal to check status" class="radioCheck"
                       onclick="check(this);"/>
                Refusal to check status
                <input type="checkbox" name="someone_you_met_in_past" value="Unfollowing" class="radioCheck"
                       onclick="check(this);"/>
                Unfollowing
                <input type="checkbox" name="someone_you_met_in_past" value="Muting status" class="radioCheck"
                       onclick="check(this);"/>
                Muting status
                <input type="checkbox" name="someone_you_met_in_past" value="Unfriending" class="radioCheck"
                       onclick="check(this);"/>
                Unfriending.
                <input type="checkbox" name="someone_you_met_in_past" value="Untagging photo" class="radioCheck"
                       onclick="check(this);"/>
                Untagging photo
                <input type="checkbox" name="someone_you_met_in_past" value="Deleting photos" class="radioCheck"
                       onclick="check(this);"/>
                Deleting photos
                <input type="checkbox" name="someone_you_met_in_past" value="Ignoring photos" class="radioCheck"
                       onclick="check(this);"/>
                Ignoring photos
                <input type="checkbox" name="someone_you_met_in_past" value="Use of insulting posts" class="radioCheck"
                       onclick="check(this);"/>
                Use of insulting posts
                <input type="text" name="someone_you_met_in_past" placeholder="Others">
                <br><br>


                <script>   function check(input) {

                        var checkboxes = document.getElementsByClassName("radioCheck");

                        for (var i = 0; i < checkboxes.length; i++) {
                            //uncheck all
                            if (checkboxes[i].checked == true) {
                                checkboxes[i].checked = false;
                            }
                        }

                        //set checked of clicked object
                        if (input.checked == true) {
                            input.checked = false;
                        } else {
                            input.checked = true;
                        }
                    }</script>
                <p><label> 27. How do you respond, if in conflict online with:
                        Someone of same race as you</label></p>
                <input type="checkbox" name="someone_from_your_race" value="Blocking" class="radioCheck"
                       onclick="check(this);"/>
                Blocking
                <input type="checkbox" name="someone_from_your_race" value="Refusal to check status" class="radioCheck"
                       onclick="check(this);"/>
                Refusal to check status
                <input type="checkbox" name="someone_from_your_race" value="Unfollowing" class="radioCheck"
                       onclick="check(this);"/>
                Unfollowing
                <input type="checkbox" name="someone_from_your_race" value="Muting status" class="radioCheck"
                       onclick="check(this);"/>
                Muting status
                <input type="checkbox" name="someone_from_your_race" value="Unfriending" class="radioCheck"
                       onclick="check(this);"/>
                Unfriending.
                <input type="checkbox" name="someone_from_your_race" value="Untagging photo" class="radioCheck"
                       onclick="check(this);"/>
                Untagging photo
                <input type="checkbox" name="someone_from_your_race" value="Deleting photos" class="radioCheck"
                       onclick="check(this);"/>
                Deleting photos
                <input type="checkbox" name="someone_from_your_race" value="Ignoring photos" class="radioCheck"
                       onclick="check(this);"/>
                Ignoring photos
                <input type="checkbox" name="someone_from_your_race" value="Use of insulting posts" class="radioCheck"
                       onclick="check(this);"/>
                Use of insulting posts
                <input type="text" name="someone_from_your_race" placeholder="Others">
                <br><br>

                <script>   function check(input) {

                        var checkboxes = document.getElementsByClassName("radioCheck");

                        for (var i = 0; i < checkboxes.length; i++) {
                            //uncheck all
                            if (checkboxes[i].checked == true) {
                                checkboxes[i].checked = false;
                            }
                        }

                        //set checked of clicked object
                        if (input.checked == true) {
                            input.checked = false;
                        } else {
                            input.checked = true;
                        }
                    }</script>
                <p><label> 28. How do you respond, if in conflict online with:
                        Someone of same color as you/someone of your culture
                    </label></p>
                <input type="checkbox" name="someone_of_same_color" value="Blocking" class="radioCheck"
                       onclick="check(this);"/>
                Blocking
                <input type="checkbox" name="someone_of_same_color" value="Refusal to check status" class="radioCheck"
                       onclick="check(this);"/>
                Refusal to check status
                <input type="checkbox" name="someone_of_same_color" value="Unfollowing" class="radioCheck"
                       onclick="check(this);"/>
                Unfollowing
                <input type="checkbox" name="someone_of_same_color" value="Muting status" class="radioCheck"
                       onclick="check(this);"/>
                Muting status
                <input type="checkbox" name="someone_of_same_color" value="Unfriending" class="radioCheck"
                       onclick="check(this);"/>
                Unfriending.
                <input type="checkbox" name="someone_of_same_color" value="Untagging photo" class="radioCheck"
                       onclick="check(this);"/>
                Untagging photo
                <input type="checkbox" name="someone_of_same_color" value="Deleting photos" class="radioCheck"
                       onclick="check(this);"/>
                Deleting photos
                <input type="checkbox" name="someone_of_same_color" value="Ignoring photos" class="radioCheck"
                       onclick="check(this);"/>
                Ignoring photos
                <input type="checkbox" name="someone_of_same_color" value="Use of insulting posts" class="radioCheck"
                       onclick="check(this);"/>
                Use of insulting posts
                <input type="text" name="someone_of_same_color" placeholder="Others">
                <br><br>


                <script>   function check(input) {

                        var checkboxes = document.getElementsByClassName("radioCheck");

                        for (var i = 0; i < checkboxes.length; i++) {
                            //uncheck all
                            if (checkboxes[i].checked == true) {
                                checkboxes[i].checked = false;
                            }
                        }

                        //set checked of clicked object
                        if (input.checked == true) {
                            input.checked = false;
                        } else {
                            input.checked = true;
                        }
                    }</script>
                <p><label> 29. How do you respond, if in conflict online with:
                        Someone you may never see
                    </label></p>
                <input type="checkbox" name="someone_you_may_never_see" value="Blocking" class="radioCheck"
                       onclick="check(this);"/>
                Blocking
                <input type="checkbox" name="someone_you_may_never_see" value="Refusal to check status"
                       class="radioCheck" onclick="check(this);"/>
                Refusal to check status
                <input type="checkbox" name="someone_you_may_never_see" value="Unfollowing" class="radioCheck"
                       onclick="check(this);"/>
                Unfollowing
                <input type="checkbox" name="someone_you_may_never_see" value="Muting status" class="radioCheck"
                       onclick="check(this);"/>
                Muting status
                <input type="checkbox" name="someone_you_may_never_see" value="Unfriending" class="radioCheck"
                       onclick="check(this);"/>
                Unfriending.
                <input type="checkbox" name="someone_you_may_never_see" value="Untagging photo" class="radioCheck"
                       onclick="check(this);"/>
                Untagging photo
                <input type="checkbox" name="someone_you_may_never_see" value="Deleting photos" class="radioCheck"
                       onclick="check(this);"/>
                Deleting photos
                <input type="checkbox" name="someone_you_may_never_see" value="Ignoring photos" class="radioCheck"
                       onclick="check(this);"/>
                Ignoring photos
                <input type="checkbox" name="someone_you_may_never_see" value="Use of insulting posts"
                       class="radioCheck" onclick="check(this);"/>
                Use of insulting posts
                <input type="text" name="someone_you_may_never_see" placeholder="Others">
                <br><br>

                <script>   function check(input) {

                        var checkboxes = document.getElementsByClassName("radioCheck");

                        for (var i = 0; i < checkboxes.length; i++) {
                            //uncheck all
                            if (checkboxes[i].checked == true) {
                                checkboxes[i].checked = false;
                            }
                        }

                        //set checked of clicked object
                        if (input.checked == true) {
                            input.checked = false;
                        } else {
                            input.checked = true;
                        }
                    }</script>
                <p><label> 30. How do you respond, if in conflict online with:
                        Someone of same age
                    </label></p>
                <input type="checkbox" name="someone_of_same_age" value="Blocking" class="radioCheck"
                       onclick="check(this);"/>
                Blocking
                <input type="checkbox" name="someone_of_same_age" value="Refusal to check status" class="radioCheck"
                       onclick="check(this);"/>
                Refusal to check status
                <input type="checkbox" name="someone_of_same_age" value="Unfollowing" class="radioCheck"
                       onclick="check(this);"/>
                Unfollowing
                <input type="checkbox" name="someone_of_same_age" value="Muting status" class="radioCheck"
                       onclick="check(this);"/>
                Muting status
                <input type="checkbox" name="someone_of_same_age" value="Unfriending" class="radioCheck"
                       onclick="check(this);"/>
                Unfriending.
                <input type="checkbox" name="someone_of_same_age" value="Untagging photo" class="radioCheck"
                       onclick="check(this);"/>
                Untagging photo
                <input type="checkbox" name="someone_of_same_age" value="Deleting photos" class="radioCheck"
                       onclick="check(this);"/>
                Deleting photos
                <input type="checkbox" name="someone_of_same_age" value="Ignoring photos" class="radioCheck"
                       onclick="check(this);"/>
                Ignoring photos
                <input type="checkbox" name="someone_of_same_age" value="Use of insulting posts" class="radioCheck"
                       onclick="check(this);"/>
                Use of insulting posts
                <input type="text" name="someone_of_same_age" placeholder="Others">
                <br><br>


                <div class="form-group">
                    <button class="btn btn-raised btn-lg btn-warning" type="submit">Send</button>
                </div>
                </form>
                <!--                <div id="error_message" style="width:100%; height:100%; display:none; ">-->
                <!--                    <h4>-->
                <!--                        Error-->
                <!--                    </h4>-->
                <!--                    Sorry there was an error sending your form.-->
                <!--                </div>-->
                <!--                <div id="success_message" style="width:100%; height:100%; display:none; ">-->
                <!--                    <h2>Success! Your Message was Sent Successfully.</h2>-->
                <!--                </div>-->
            </div>
</div>
</body>
</html>
