<?php
$age = $_POST['age'];
$sex = $_POST['sex'];
$location = $_POST['location'];
$education = $_POST['education'];
$religion = $_POST['religion'];
$race = $_POST['race'];
$had_any_fight_on_social_media = $_POST['had_any_fight_on_social_media'];
$yes_how_often_do_you_fight = $_POST['yes_how_often_do_you_fight'];
$kind_of_fight = $_POST['kind_of_fight'];
$express_that_econflict_on_socialmedia = $_POST['express_that_e-conflict_on_socialmedia'];
$heard_about_people_having_conflict_socialmedia = $_POST['heard_about_people_having_conflict_socialmedia'];
$cause_of_conflict = $_POST['cause_of_conflict'];
$elements_of_the_post_tag = $_POST['elements_of_the_post_tag'];
$cat_ppl_econflict_everyday = $_POST['cat_ppl_e-conflict_everyday'];
$met_someone_econflict_with = $_POST['met_someone_e-conflict_with'];
$possible_behavioral_disposition = $_POST['possible_behavioral_disposition'];
$determines_your_behavioral_disposition = $_POST['determines_your_behavioral_disposition'];
$how_do_know_if_person_have_econflict = $_POST['how_do_know_if_person_have_e-conflict'];
$feel_unsafe = $_POST['feel_unsafe'];
$things_make_you_feel_unsafe = $_POST['things_make_you_feel_unsafe'];
$likely_consequences = $_POST['likely_consequences'];
$know_anyone_suffered_from_econflict = $_POST['know_anyone_suffered_from_e-conflict'];
$yes_what_kind_of_experience = $_POST['yes_what_kind_of_experience'];
$someone_you_can_see = $_POST['someone_you_can_see'];
$someone_you_may_see = $_POST['someone_you_may_see'];
$someone_you_met_in_past = $_POST['someone_you_met_in_past'];
$someone_from_your_race = $_POST['someone_from_your_race'];
$someone_of_same_color = $_POST['someone_of_same_color'];
$someone_you_may_never_see = $_POST['someone_you_may_never_see'];
$someone_of_same_age = $_POST['someone_of_same_age'];


// Create connection
$conn = mysqli_connect("localhost", "root", "", "research_work");
// Check connection
if ($conn === false) {
    die ("Error: could not connect." . mysqli_connect_error());
}


$sql = "INSERT INTO questionnaire(age, sex, location, education, religion, race, had_any_fight_on_social_media, yes_how_often_do_you_fight, 
kind_of_fight, express_that_econflict_on_socialmedia, heard_about_people_having_conflict_socialmedia, cause_of_conflict, elements_of_the_post_tag,
 cat_ppl_econflict_everyday, met_someone_econflict_with, possible_behavioral_disposition, determines_your_behavioral_disposition, 
 how_do_know_if_person_have_econflict, feel_unsafe, things_make_you_feel_unsafe, likely_consequences, know_anyone_suffered_from_econflict, 
 yes_what_kind_of_experience, someone_you_can_see, someone_you_may_see, someone_you_met_in_past, someone_from_your_race, someone_of_same_color, 
 someone_you_may_never_see, someone_of_same_age) VALUES ('$age','$sex', $location, $$education, $religion, $race, $had_any_fight_on_social_media,
 $yes_how_often_do_you_fight, $kind_of_fight, $express_that_e-conflict_on_socialmedia, $heard_about_people_having_conflict_socialmedia, 
 $cause_of_conflict, $elements_of_the_post_tag, $cat_ppl_e-conflict_everyday, $met_someone_e-conflict_with, $possible_behavioral_disposition,
 $determines_your_behavioral_disposition, $how_do_know_if_person_have_e-conflict, $feel_unsafe, $things_make_you_feel_unsafe, $likely_consequences,
 $know_anyone_suffered_from_e-conflict, $yes_what_kind_of_experience, $someone_you_can_see, $someone_you_may_see, $someone_you_met_in_past, $someone_from_your_race,
  $someone_of_same_color, $someone_you_may_never_see, $someone_of_same_age)";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully ";
    header("Location: success.html"); // redirecting to the other page
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//welcome <?php echo $_POST["names"]; ?><!-- <br>-->
<?php //echo  $_POST["names"]; ?><!-- <br>-->
<?php //echo  $_POST["email"]; ?><!-- <br>-->
<?php //echo  $_POST["dob"]; ?><!--<br>-->
<?php //echo  $_POST["image"]; ?>
<!---->


<!--mysqli_close($conn);-->
<!--?>-->