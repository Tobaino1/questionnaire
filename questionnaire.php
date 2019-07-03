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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>

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
                        <form action="questionnaire_submit.php" method="post">

                            <p align="center" style="color: blue"><strong>Section A: Socio-demographic
                                        characteristics</strong></p>

                            <div class="form-group" aria-required="true">
                                <p><label>1. Age</label></p>
                                <input type="checkbox" name="age" value="21-25" class="ageCheck"
                                >
                                21-25
                                <input type="checkbox" name="age" value="26-30" class="ageCheck"
                                >
                                26-30
                                <input type="checkbox" name="age" value="31-35" class="ageCheck"
                                >
                                31-35
                                <input type="checkbox" name="age" value="36-40" class="ageCheck"
                                >
                                36-40
                                <input type="checkbox" name="age" value="41-45" class="ageCheck"
                                >
                                41-45
                                <script type="text/javascript">
                                    $('.ageCheck').on('change', function () {
                                        $('.ageCheck').not(this).prop('checked', false);
                                    });
                                </script>
                            </div>

                            <div class="form-group" aria-required="true">

                                <p><label>2. Sex </label></p>
                                <input type="checkbox" name="sex" value="Male" class="sexCheck"
                                >
                                Male
                                <input type="checkbox" name="sex" value="Female" class="sexCheck"
                                >
                                Female
                                <input type="checkbox" name="sex" value="Transgendered" class="sexCheck"
                                >
                                Transgendered..
                                <input type="checkbox" name="sex" value="Genderless" class="sexCheck"
                                >
                                Genderless..
                                <input type="checkbox" name="sex" value="Cisgender" class="sexCheck"
                                >
                                Cisgender
                                <input type="checkbox" name="sex" value="Bi-sexual" class="sexCheck"
                                >
                                Bi-sexual.
                                <input type="checkbox" name="sex" value="Non-binary" class="sexCheck"
                                >
                                Non-binary
                                <input type="checkbox" name="sex" value="Pan Gender" class="sexCheck"
                                >
                                Pan Gender
                                <input type="checkbox" name="sex" value="Inter-sex" class="sexCheck"
                                >
                                Inter-sex
                                <input type="checkbox" name="sex" value="aGender" class="sexCheck"
                                >
                                aGender
                                <script type="text/javascript">
                                    $('.sexCheck').on('change', function () {
                                        $('.sexCheck').not(this).prop('checked', false);
                                    });
                                </script>
                            </div>


                            <div class="form-group" aria-required="true">
                            <p><label>3. Location</label></p>
                                <input type="checkbox" name="location" value="Nigeria" class="location"
                                >
                            Nigeria
                                <input type="checkbox" name="location" value="Other parts of Africa" class="location"
                                >
                                Other Parts of Africa..
                                <input type="checkbox" name="location" value="Asia" class="location"
                                >
                            Asia
                                <input type="checkbox" name="location" value="North America" class="location"
                                >
                                North America..
                                <input type="checkbox" name="location" value="South America" class="location"
                                >
                                South America..
                                <input type="checkbox" name="location" value="Oceania" class="location"
                                >
                            Oceania
                                <input type="checkbox" name="location" value="Antarctica" class="location"
                                >
                            Antarctica
                            <!--                                <input type="text" name="age" id="age" placeholder="other options">-->
                                <script type="text/javascript">
                                    $('.location').on('change', function () {
                                        $('.location').not(this).prop('checked', false);
                                    });
                                </script>
                            </div>


                            <div class="form-group" aria-required="true">
                                <p><label>4. Education </label></p>
                                <input type="checkbox" name="Education" value="Early year/Primary completed"
                                       class="eCheck"
                                >
                                Early year/Primary completed
                                <input type="checkbox" name="Education" value="In Secondary School" class="eCheck"
                                >
                                In Secondary School
                                <input type="checkbox" name="Education" value="Secondary School completed"
                                       class="eCheck"
                                >
                                Secondary School completed
                                <input type="checkbox" name="Education" value="College/University" class="eCheck"
                                >
                                College/University
                                <input type="checkbox" name="Education" value="Masters" class="eCheck"
                                >
                                Masters
                                <input type="checkbox" name="Education" value="PhD" class="eCheck"
                                >
                                PhD

                                <script type="text/javascript">
                                    $('.eCheck').on('change', function () {
                                        $('.eCheck').not(this).prop('checked', false);
                                    });
                                </script>
                            </div>
                <br>
                            <div class="checkboxObject.required">

                                <p><label>5. Religion </label></p>
                                <input type="checkbox" name="religion" value="Christianity" class="Check"
                                >
                                Christianity
                                <input type="checkbox" name="religion" value="Islam" class="Check"
                                >
                                Islam
                                <input type="checkbox" name="religion" value="Catholic" class="Check"
                                >
                                Catholic
                                <input type="checkbox" name="religion" value="Traditionalist" class="Check"
                                >
                                Traditionalist
                                <input type="checkbox" name="religion" placeholder="Others">

                                <script type="text/javascript">
                                    $('.Check').on('change', function () {
                                        $('.Check').not(this).prop('checked', false);
                                    });
                                </script>
                            </div>
                            <br>
                            <div class="form-group" aria-required="true">
                                <p><label>6. Race </label></p>

                                <input type="checkbox" name="race" value="Caucasoid" class="raCheck"
                                >
                                Caucasoid
                                <input type="checkbox" name="race" value="Negroid" class="raCheck"
                                >
                                Negroid
                                <input type="checkbox" name="race" value="Caucasian" class="raCheck"
                                >
                                Caucasian
                                <input type="checkbox" name="race" value="Australoid" class="raCheck"
                                >
                                Australoid
                                <input type="checkbox" name="race" value="Mixed" class="raCheck"
                                >
                                Mixed
                                <input type="checkbox" name="race" placeholder="Others">

                                <script type="text/javascript">
                                    $('.raCheck').on('change', function () {
                                        $('.raCheck').not(this).prop('checked', false);
                                    });
                                </script>
                            </div>
                            <br>

                <p align="center" style="color: blue"><strong>Section B: Forms of e-Conflict</strong></p>

                            <p><label>7. Have you ever had any form of fight with anyone on the social media platforms?

                                </label></p>
                            <div class="form-group" aria-required="true">

                                <input type="checkbox" name="any_fight" value="Yes" class="hCheck">
                                Yes
                                <input type="checkbox" name="any_fight" value="No" class="hCheck">
                                No

                                <script type="text/javascript">
                                    $('.hCheck').on('change', function () {
                                        $('.hCheck').not(this).prop('checked', false);
                                    });
                                </script>
                            </div>
                            <br>

                <p><label>8. If yes to the question above, how often do you fight?</label></p>
                            <div class="form-group" aria-required="true">

                                <input type="checkbox" name="how_often" value="Few Occasions" class="hofCheck">
                                Yes
                                <input type="checkbox" name="how_often" value="Seasonal" class="hofCheck">
                                No
                                <script type="text/javascript">
                                    $('.hofCheck').on('change', function () {
                                        $('.hofCheck').not(this).prop('checked', false);
                                    });
                                </script>
                            </div>
                            <br>

                            <p><label>9. What kind of fight? (You may pick more than one)</label></p>
                <input type="checkbox" name="kind_of_fight[]" value="Altercation">Altercation <br/>
                <input type="checkbox" name="kind_of_fight[]" value="Interpretation of post">Interpretation of post<br/>
                <input type="checkbox" name="kind_of_fight[]" value="Interpretation of status">Interpretation of
                status<br/>
                            <input type="text" name="kind_of_fight[]" placeholder="Others"><br/>

                <br>
                <p><label>10. How do you express that e-conflict on the social media platforms? (You may pick more than
                        one)</label></p>
                            <input type="checkbox" name="express_that_e_conflict_on_social_media[]" value="Blocking">Altercation
                <br/>
                            <input type="checkbox" name="express_that_e_conflict_on_social_media[]"
                                   value="Refusal to check status">
                Refusal to check status<br/>
                            <input type="checkbox" name="express_that_e_conflict_on_social_media[]" value="Unfollowing">Unfollowing<br/>
                            <input type="checkbox" name="express_that_e_conflict_on_social_media[]"
                                   value="Muting status">Muting
                status <br/>
                            <input type="checkbox" name="express_that_e_conflict_on_social_media[]" value="Unfriending">
                Unfriending<br/>
                            <input type="checkbox" name="express_that_e_conflict_on_social_media[]"
                                   value="Untagging photo">Untagging
                photo<br/>
                            <input type="checkbox" name="express_that_e_conflict_on_social_media[]"
                                   value="Deleting photos">Deleting
                photos <br/>
                            <input type="checkbox" name="express_that_e_conflict_on_social_media[]"
                                   value="Ignoring post"> Ignoring
                post<br/>
                            <input type="checkbox" name="express_that_e_conflict_on_social_media[]"
                                   value="Use of insulting posts">
                Use of insulting posts<br/>
                            <input type="text" name="express_that_e_conflict_on_social_media[]"
                                   placeholder="Others"><br/>

                            <br>

                <p align="center" style="color: blue"><strong> Section C: Causes of e-Conflict on Social Media</strong>
                </p>

                <p><label>11. Have you heard about people having conflict on or using the social media?</label></p>
                            <input type="checkbox" name="heard_about_people_having_conflict_social_media" value="Yes"
                                   class="fCheck">
                Yes
                            <input type="checkbox" name="heard_about_people_having_conflict_social_media" value="No"
                                   class="fCheck">
                No
                            <script type="text/javascript">
                                $('.fCheck').on('change', function () {
                                    $('.fCheck').not(this).prop('checked', false);
                                });
                            </script>

                <br><br>
                <p><label> 12. What in particular caused the conflict (you may pick more than one)</label></p>
                            <input type="checkbox" name="cause_of_conflict[]" value="Post">
                Post <br>
                            <input type="checkbox" name="cause_of_conflict[]" value="Status">
                Status <br>
                            <input type="checkbox" name="cause_of_conflict[]" value="Response to post">
                Response to post <br>
                            <input type="checkbox" name="cause_of_conflict[]" value="Interpretation of status">
                Interpretation of status <br>
                            <input type="checkbox" name="cause_of_conflict[]" value="Photo tag">
                Photo tag <br>
                            <input type="checkbox" name="cause_of_conflict[]" value="Status tag">
                Status tag


                <br><br>

                <p><label> 13. What are elements of the posts/tag that can lead to conflict? (You may pick more than
                        one)

                    </label></p>
                            <input type="checkbox" name="what_are_elements[]" value="Political alignment">
                Political alignment <br>
                            <input type="checkbox" name="what_are_elements[]" value="Status">
                            Status <br>
                            <input type="checkbox" name="what_are_elements[]" value="Racial/Cultural alignment">
                            Racial/Cultural alignment <br>
                            <input type="checkbox" name="what_are_elements[]" value="Religious beliefs">
                            Religious beliefs<br>
                            <input type="checkbox" name="what_are_elements[]" value="Being opinionated">
                Being opinionated <br>
                            <input type="checkbox" name="what_are_elements[]" value="Pornographic contents">
                Pornographic contents<br>
                            <input type="text" name="what_are_elements[]" placeholder="Others">


                <br><br>

                <p><label>14. What categories of people do you have e-conflict with regularly? (You may pick more than
                        one) </label></p>
                            <input type="checkbox" name="cat_ppl_e_conflict_everyday[]" value="People you see everyday">
                Political alignment <br>
                            <input type="checkbox" name="cat_ppl_e_conflict_everyday[]"
                                   value="People you may see, if you want to">
                Racial/Cultural alignment <br>
                            <input type="checkbox" name="cat_ppl_e_conflict_everyday[]"
                                   value="People you may see, if you want to">
                Religious beliefs <br>
                            <input type="checkbox" name="cat_ppl_e_conflict_everyday[]"
                                   value="People you have never met">
                Being opinionated<br>
                            <input type="checkbox" name="cat_ppl_e_conflict_everyday[]"
                                   value=" People you may never meet">
                Being opinionated <br>
                            <input type="checkbox" name="cat_ppl_e_conflict_everyday[]" value="Pornographic contents">
                Pornographic contents
                            <br> <input type="text" name="cat_ppl_e_conflict_everyday[]" placeholder="Others">
                <br> <br>
                            <p style="color: blue" align="center"><strong>Section D: Transition of conflict from social
                                    media to
                        real world</strong></p>

                            <p><label> 15. Have you ever met someone you had conflict with on the social media in the
                                    real world?
                    </label></p>
                            <input type="checkbox" name="met_someone_e_conflict_with" value="Yes" class="mcheck"
                            >
                Yes <br>
                            <input type="checkbox" name="met_someone_e_conflict_with" value="No" class="mcheck"
                            >
                No
                            <script type="text/javascript">
                                $('.mcheck').on('change', function () {
                                    $('.mcheck').not(this).prop('checked', false);
                                });
                            </script>
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
                            <input type="checkbox" name="how_do_know_if_person_have_e_conflict[]"
                                   value="When I stop seeing their posts">
                When I stop seeing their posts <br>
                            <input type="checkbox" name="how_do_know_if_person_have_e_conflict[]"
                                   value="When we no longer chat">
                When we no longer chat<br>
                            <input type="checkbox" name="how_do_know_if_person_have_e_conflict[]"
                                   value="When I get monosyllabic responses">
                When I get monosyllabic responses<br>
                            <input type="checkbox" name="how_do_know_if_person_have_e_conflict[]"
                                   value="When the person starts posting abusive information">
                When the person starts posting abusive information<br>
                            <input type="text" name="how_do_know_if_person_have_e_conflict[]" placeholder="Others">
                <br><br>

                <p align="center" style="color: blue"><strong>Section E: Real world consequences of online
                        conflict </strong></p>

                <p><label> 19. When you have conflict with someone online, do you feel unsafe?</label></p>
                            <input type="checkbox" name="feel_unsafe" value="Yes" class="feelunsafe1">
                Yes <br>
                            <input type="checkbox" name="feel_unsafe" value="No" class="feelunsafe1">
                No
                            <script type="text/javascript">
                                $('.feelunsafe1').on('change', function () {
                                    $('.feelunsafe1').not(this).prop('checked', false);
                                });
                            </script>
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

                <p><label> 21. What are the likely consequences you expect during online conflict with another
                        person?</label></p>
                            <input type="checkbox" name="likely_consequences[]"
                                   value="Cyberstalking (monitoring spirit)"
                            >
                Cyberstalking (monitoring spirit)
                            <input type="checkbox" name="likely_consequences[]" value="Cyberbullying"
                            >
                Cyberbullying
                            <input type="checkbox" name="likely_consequences[]" value="Physical abuse"
                            >
                Physical abuse
                            <input type="checkbox" name="likely_consequences[]" value="Threat to life"
                            >
                Threat to life
                            <input type="checkbox" name="likely_consequences[]" value="Malice"
                            >
                Malice
                            <input type="text" name="likely_consequences[]" placeholder="Others">
                            <!--                <script type="text/javascript">-->
                            <!--                    $('.con').on('change', function() {-->
                            <!--                        $('.con').not(this).prop('checked', false);-->
                            <!--                    });-->
                            <!--                </script>-->
                <br><br>


                <p><label>22. Do you know of anyone who has suffered in real world for a conflict that was initiated
                        online?
                    </label></p>
                            <input type="checkbox" name="know_anyone_suffered_from_e_conflict" value="Yes"
                                   class="suffered"
                            >
                Yes <br>
                            <input type="checkbox" name="know_anyone_suffered_from_e_conflict" value="No"
                                   class="suffered"
                            >
                No
                            <script type="text/javascript">
                                $('.suffered').on('change', function () {
                                    $('.suffered').not(this).prop('checked', false);
                                });
                            </script>
                <br><br>

                <p><label>23. If yes, what kind of experience? (You may pick more than one)</label></p>

                            <input type="checkbox" name="yes_what_kind_of_experience[]"
                                   value="Stalking (monitoring spirit)"
                            >
                Stalking
                            <input type="checkbox" name="yes_what_kind_of_experience[]" value="Bullying"
                            >
                Bullying
                            <input type="checkbox" name="yes_what_kind_of_experience[]" value="Rape"
                            >
                Rape
                            <input type="checkbox" name="yes_what_kind_of_experience[]" value="Assault">
                Assault
                            <input type="checkbox" name="yes_what_kind_of_experience[]" value="Malice"
                            >
                Malice
                            <input type="text" name="yes_what_kind_of_experience[]" placeholder="Others">
                            <!--                <script type="text/javascript">-->
                            <!--                    $('.experience').on('change', function() {-->
                            <!--                        $('.experience').not(this).prop('checked', false);-->
                            <!--                    });-->
                            <!--                </script>-->
                <br><br>

                <p style="color: blue" align="center"><strong>Section F: Social, Cultural and Spatial differentials in
                        e-Conflict</strong></p>

                <p><label> 24. How do you respond, if in conflict online with:
                        Someone you can see?</label></p>
                            <input type="checkbox" name="someone_you_can_see[]" value="Blocking"
                            >
                Blocking
                            <input type="checkbox" name="someone_you_can_see[]" value="Refusal to check status">
                Refusal to check status
                            <input type="checkbox" name="someone_you_can_see[]" value="Unfollowing"
                            >
                Unfollowing
                            <input type="checkbox" name="someone_you_can_see[]" value="Muting status"
                            >
                Muting status
                            <input type="checkbox" name="someone_you_can_see[]" value="Unfriending"
                            >
                Unfriending.
                            <input type="checkbox" name="someone_you_can_see[]" value="Untagging photo"
                            >
                Untagging photo
                            <input type="checkbox" name="someone_you_can_see[]" value="Deleting photos"
                            >
                Deleting photos
                            <input type="checkbox" name="someone_you_can_see[]" value="Ignoring photos"
                            >
                Ignoring photos
                            <input type="checkbox" name="someone_you_can_see[]" value="Use of insulting posts"
                            >
                Use of insulting posts
                            <input type="text" name="someone_you_can_see[]" placeholder="Others">
                            <!--                <script type="text/javascript">-->
                            <!--                    $('.you').on('change', function() {-->
                            <!--                        $('.you').not(this).prop('checked', false);-->
                            <!--                    });-->
                            <!--                </script>-->
                <br><br>

                <p><label> 25. How do you respond, if in conflict online with:
                        Someone you may see?</label></p>
                            <input type="checkbox" name="someone_you_may_see[]" value="Blocking"
                            >
                Blocking
                            <input type="checkbox" name="someone_you_may_see[]" value="Refusal to check status"
                            >
                Refusal to check status
                            <input type="checkbox" name="someone_you_may_see[]" value="Unfollowing"
                            >
                Unfollowing
                            <input type="checkbox" name="someone_you_may_see[]" value="Muting status"
                            >
                Muting status
                            <input type="checkbox" name="someone_you_may_see[]" value="Unfriending"
                            >
                Unfriending.
                            <input type="checkbox" name="someone_you_may_see[]" value="Untagging photo"
                            >
                Untagging photo
                            <input type="checkbox" name="someone_you_may_see[]" value="Deleting photos"
                            >
                Deleting photos
                            <input type="checkbox" name="someone_you_may_see[]" value="Ignoring photos"
                            >
                Ignoring photos
                            <input type="checkbox" name="someone_you_may_see[]" value="Use of insulting posts"
                            >
                Use of insulting posts
                            <input type="text" name="someone_you_may_see[]" placeholder="Others">
                            <!--                <script type="text/javascript">-->
                            <!--                    $('.youmaysee').on('change', function() {-->
                            <!--                        $('.youmaysee').not(this).prop('checked', false);-->
                            <!--                    });-->
                            <!--                </script>-->
                <br><br>

                <p><label> 26. How do you respond, if in conflict online with:
                        someone you met in the past</label></p>
                            <input type="checkbox" name="someone_you_met_in_past[]" value="Blocking" class="youmet"
                            >
                Blocking
                            <input type="checkbox" name="someone_you_met_in_past[]" value="Refusal to check status"
                                   class="youmet"
                            >
                Refusal to check status
                            <input type="checkbox" name="someone_you_met_in_past[]" value="Unfollowing" class="youmet"
                            >
                Unfollowing
                            <input type="checkbox" name="someone_you_met_in_past[]" value="Muting status" class="youmet"
                            >
                Muting status
                            <input type="checkbox" name="someone_you_met_in_past[]" value="Unfriending" class="youmet"
                            >
                Unfriending.
                            <input type="checkbox" name="someone_you_met_in_past[]" value="Untagging photo"
                                   class="youmet"
                            >
                Untagging photo
                            <input type="checkbox" name="someone_you_met_in_past[]" value="Deleting photos"
                                   class="youmet"
                            >
                Deleting photos
                            <input type="checkbox" name="someone_you_met_in_past[]" value="Ignoring photos"
                                   class="youmet"
                            >
                Ignoring photos
                            <input type="checkbox" name="someone_you_met_in_past[]" value="Use of insulting posts"
                                   class="youmet"
                            >
                Use of insulting posts
                            <input type="text" name="someone_you_met_in_past[]" placeholder="Others">
                            <!--                <script type="text/javascript">-->
                            <!--                    $('.youmet').on('change', function() {-->
                            <!--                        $('.youmet').not(this).prop('checked', false);-->
                            <!--                    });-->
                            <!--                </script>-->
                <br><br>


                <p><label> 27. How do you respond, if in conflict online with:
                        Someone of same race as you</label></p>
                            <input type="checkbox" name="someone_from_your_race[]" value="Blocking" class="yourrace"
                            >
                Blocking
                            <input type="checkbox" name="someone_from_your_race[]" value="Refusal to check status"
                                   class="yourrace"
                            >
                Refusal to check status
                            <input type="checkbox" name="someone_from_your_race[]" value="Unfollowing" class="yourrace"
                            >
                Unfollowing
                            <input type="checkbox" name="someone_from_your_race[]" value="Muting status"
                                   class="yourrace"
                            >
                Muting status
                            <input type="checkbox" name="someone_from_your_race[]" value="Unfriending" class="yourrace"
                            >
                Unfriending.
                            <input type="checkbox" name="someone_from_your_race[]" value="Untagging photo"
                                   class="yourrace"
                            >
                Untagging photo
                            <input type="checkbox" name="someone_from_your_race[]" value="Deleting photos"
                                   class="yourrace"
                            >
                Deleting photos
                            <input type="checkbox" name="someone_from_your_race[]" value="Ignoring photos"
                                   class="yourrace"
                            >
                Ignoring photos
                            <input type="checkbox" name="someone_from_your_race[]" value="Use of insulting posts"
                                   class="yourrace"
                            >
                Use of insulting posts
                            <input type="text" name="someone_from_your_race[]" placeholder="Others">
                            <!--                <script type="text/javascript">-->
                            <!--                    $('.yourrace').on('change', function() {-->
                            <!--                        $('.yourrace').not(this).prop('checked', false);-->
                            <!--                    });-->
                            <!--                </script>-->
                <br><br>


                <p><label> 28. How do you respond, if in conflict online with:
                        Someone of same color as you/someone of your culture
                    </label></p>
                            <input type="checkbox" name="someone_of_same_color[]" value="Blocking" class="color"
                            >
                Blocking
                            <input type="checkbox" name="someone_of_same_color[]" value="Refusal to check status"
                                   class="color"
                            >
                Refusal to check status
                            <input type="checkbox" name="someone_of_same_color[]" value="Unfollowing" class="color"
                            >
                Unfollowing
                            <input type="checkbox" name="someone_of_same_color[]" value="Muting status" class="color"
                            >
                Muting status
                            <input type="checkbox" name="someone_of_same_color[]" value="Unfriending" class="color"
                            >
                Unfriending.
                            <input type="checkbox" name="someone_of_same_color[]" value="Untagging photo" class="color"
                            >
                Untagging photo
                            <input type="checkbox" name="someone_of_same_color[]" value="Deleting photos" class="color"
                            >
                Deleting photos
                            <input type="checkbox" name="someone_of_same_color[]" value="Ignoring photos" class="color"
                            >
                Ignoring photos
                            <input type="checkbox" name="someone_of_same_color[]" value="Use of insulting posts"
                                   class="color"
                            >
                Use of insulting posts
                            <input type="text" name="someone_of_same_color[]" placeholder="Others">
                            <!--                <script type="text/javascript">-->
                            <!--                    $('.color').on('change', function() {-->
                            <!--                        $('.color').not(this).prop('checked', false);-->
                            <!--                    });-->
                            <!--                </script>-->
                <br><br>


                <p><label> 29. How do you respond, if in conflict online with:
                        Someone you may never see
                    </label></p>
                            <input type="checkbox" name="someone_you_may_never_see[]" value="Blocking" class="neversee"
                            >
                Blocking
                            <input type="checkbox" name="someone_you_may_never_see[]" value="Refusal to check status"
                                   class="neversee">
                Refusal to check status
                            <input type="checkbox" name="someone_you_may_never_see[]" value="Unfollowing"
                                   class="neversee"
                            >
                Unfollowing
                            <input type="checkbox" name="someone_you_may_never_see[]" value="Muting status"
                                   class="neversee"
                            >
                Muting status
                            <input type="checkbox" name="someone_you_may_never_see[]" value="Unfriending"
                                   class="neversee"
                            >
                Unfriending.
                            <input type="checkbox" name="someone_you_may_never_see[]" value="Untagging photo"
                                   class="neversee"
                            >
                Untagging photo
                            <input type="checkbox" name="someone_you_may_never_see[]" value="Deleting photos"
                                   class="neversee"
                            >
                Deleting photos
                            <input type="checkbox" name="someone_you_may_never_see[]" value="Ignoring photos"
                                   class="neversee"
                            >
                Ignoring photos
                            <input type="checkbox" name="someone_you_may_never_see[]" value="Use of insulting posts"
                                   class="neversee">
                Use of insulting posts
                            <input type="text" name="someone_you_may_never_see[]" placeholder="Others">
                            <!--                <script type="text/javascript">-->
                            <!--                    $('.neversee').on('change', function() {-->
                            <!--                        $('.neversee').not(this).prop('checked', false);-->
                            <!--                    });-->
                            <!--                </script>-->
                <br><br>

                <p><label> 30. How do you respond, if in conflict online with:
                        Someone of same age
                    </label></p>
                            <input type="checkbox" name="someone_of_same_age[]" value="Blocking" class="sameage"
                            >
                Blocking
                            <input type="checkbox" name="someone_of_same_age[]" value="Refusal to check status"
                                   class="sameage"
                            >
                Refusal to check status
                            <input type="checkbox" name="someone_of_same_age[]" value="Unfollowing" class="sameage"
                            >
                Unfollowing
                            <input type="checkbox" name="someone_of_same_age[]" value="Muting status" class="sameage"
                            >
                Muting status
                            <input type="checkbox" name="someone_of_same_age[]" value="Unfriending" class="sameage"
                            >
                Unfriending.
                            <input type="checkbox" name="someone_of_same_age[]" value="Untagging photo" class="sameage"
                            >
                Untagging photo
                            <input type="checkbox" name="someone_of_same_age[]" value="Deleting photos" class="sameage"
                            >
                Deleting photos
                            <input type="checkbox" name="someone_of_same_age[]" value="Ignoring photos" class="sameage"
                            >
                Ignoring photos
                            <input type="checkbox" name="someone_of_same_age[]" value="Use of insulting posts"
                                   class="sameage"
                            >
                Use of insulting posts
                            <input type="text" name="someone_of_same_age[]" placeholder="Others">
                            <!--                <script type="text/javascript">-->
                            <!--                    $('.sameage').on('change', function() {-->
                            <!--                        $('.sameage').not(this).prop('checked', false);-->
                            <!--                    });-->
                            <!--                </script>-->
                <br><br>


                            <!--                <div class="form-group">-->
                            <button class="btn btn-raised btn-lg btn-warning" type="submit">Submit</button>
                            <!--                </div>-->
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
