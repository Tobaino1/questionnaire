<?php
$age = $_POST['age'];
$sex = $_POST['sex'];
$location = $_POST['location'];
$Education = $_POST['Education'];
$religion = $_POST['religion'];
$race = $_POST['race'];
$any_fight = $_POST['any_fight'];

//$how_often = $_POST['how_often'];

$checkboxoften = $_POST['how_often'];
$how_often = "";
foreach ($checkboxoften as $how_often1) {
    $how_often .= $how_often1 . ",";
}

$checkboxfight = $_POST['kind_of_fight'];
$kind_of_fight = "";
foreach ($checkboxfight as $kind_of_fight1) {
    $kind_of_fight .= $kind_of_fight1 . ",";
}

$checkboxexpress = $_POST['express_that_e_conflict_on_social_media'];
$express_that_e_conflict_on_social_media = "";
foreach ($checkboxexpress as $express_that_e_conflict_on_social_media1) {
    $express_that_e_conflict_on_social_media .= $express_that_e_conflict_on_social_media1 . ",";
}

$heard_about_people_having_conflict_social_media = $_POST['heard_about_people_having_conflict_social_media'];


$checkboxexpresses = $_POST['cause_of_conflict'];
$cause_of_conflict = "";
foreach ($checkboxexpresses as $cause_of_conflict1) {
    $cause_of_conflict .= $cause_of_conflict1 . ",";
}


$checkboxwhat = $_POST['what_are_elements'];
$what_are_elements = "";
foreach ($checkboxwhat as $what_are_elements1) {
    $what_are_elements .= $what_are_elements1 . ",";
}


$checkboxcat = $_POST['cat_ppl_e_conflict_everyday'];
$cat_ppl_e_conflict_everyday = "";
foreach ($checkboxcat as $cat_ppl_e_conflict_everyday1) {
    $cat_ppl_e_conflict_everyday .= $cat_ppl_e_conflict_everyday1 . ",";
}


$met_someone_e_conflict_with = $_POST['met_someone_e_conflict_with'];

//$checkboxpos=$_POST['possible_behavioral_disposition'];
//$possible_behavioral_disposition="";
//foreach($checkboxpos as $possible_behavioral_disposition1)
//{
//    $possible_behavioral_disposition .= $possible_behavioral_disposition1.",";
//}


$tec = $_POST['possible_behavioral_disposition'];
if (!empty($tec)) {
    $possible_behavioral_disposition = "";

    for ($i = 0; $i < count($tec); $i++) {
        if ($i == count($tec) - 1) {
            $possible_behavioral_disposition .= $tec[$i] . '.';
        } else {
            $possible_behavioral_disposition .= $tec[$i] . ',';
        }
    }
}


//$checkboxbeh=$_POST['determines_your_behavioral_disposition'];
//$determines_your_behavioral_disposition="";
//foreach($checkboxbeh as $determines_your_behavioral_disposition1)
//{
//    $determines_your_behavioral_disposition .= $determines_your_behavioral_disposition1.",";
//}


$pos = $_POST['possible_behavioral_disposition'];
if (!empty($pos)) {
    $determines_your_behavioral_disposition = "";

    for ($i = 0; $i < count($pos); $i++) {
        if ($i == count($pos) - 1) {
            $determines_your_behavioral_disposition .= $pos[$i] . '.';
        } else {
            $determines_your_behavioral_disposition .= $pos[$i] . ',';
        }
    }
}


$checkboxhow = $_POST['how_do_know_if_person_have_e_conflict'];
$how_do_know_if_person_have_e_conflict = "";
foreach ($checkboxhow as $how_do_know_if_person_have_e_conflict1) {
    $how_do_know_if_person_have_e_conflict .= $how_do_know_if_person_have_e_conflict1 . ",";
}

$feel_unsafe = $_POST['feel_unsafe'];

$checkboxfeel = $_POST['things_make_you_feel_unsafe'];
$things_make_you_feel_unsafe = "";
foreach ($checkboxfeel as $things_make_you_feel_unsafe1) {
    $things_make_you_feel_unsafe .= $things_make_you_feel_unsafe1 . ",";
}


$likely = $_POST['likely_consequences'];
if (!empty($likely)) {
    $likely_consequences = "";

    for ($i = 0; $i < count($likely); $i++) {
        if ($i == count($likely) - 1) {
            $likely_consequences .= $likely[$i] . '.';
        } else {
            $likely_consequences .= $likely[$i] . ',';
        }
    }
}


$know_anyone_suffered_from_e_conflict = $_POST['know_anyone_suffered_from_e_conflict'];

$yes = $_POST['yes_what_kind_of_experience'];
if (!empty($yes)) {
    $yes_what_kind_of_experience = "";

    for ($i = 0; $i < count($yes); $i++) {
        if ($i == count($yes) - 1) {
            $yes_what_kind_of_experience .= $yes[$i] . '.';
        } else {
            $yes_what_kind_of_experience .= $yes[$i] . ',';
        }
    }
}

//$someone_you_can_see = $_POST['someone_you_can_see'];

$cansee = $_POST['someone_you_can_see'];
if (!empty($cansee)) {
    $someone_you_can_see = "";

    for ($i = 0; $i < count($cansee); $i++) {
        if ($i == count($cansee) - 1) {
            $someone_you_can_see .= $cansee[$i] . '.';
        } else {
            $someone_you_can_see .= $cansee[$i] . ',';
        }
    }
}

//$someone_you_may_see = $_POST['someone_you_may_see'];

$maysee = $_POST['someone_you_may_see'];
if (!empty($maysee)) {
    $someone_you_may_see = "";

    for ($i = 0; $i < count($maysee); $i++) {
        if ($i == count($maysee) - 1) {
            $someone_you_may_see .= $maysee[$i] . '.';
        } else {
            $someone_you_may_see .= $maysee[$i] . ',';
        }
    }
}

//$someone_you_met_in_past = $_POST['someone_you_met_in_past'];


$past = $_POST['someone_you_met_in_past'];
if (!empty($past)) {
    $someone_you_met_in_past = "";

    for ($i = 0; $i < count($past); $i++) {
        if ($i == count($past) - 1) {
            $someone_you_met_in_past .= $past[$i] . '.';
        } else {
            $someone_you_met_in_past .= $past[$i] . ',';
        }
    }
}

//$someone_from_your_race = $_POST['someone_from_your_race'];

$yourrace = $_POST['someone_from_your_race'];
if (!empty($yourrace)) {
    $someone_from_your_race = "";

    for ($i = 0; $i < count($yourrace); $i++) {
        if ($i == count($yourrace) - 1) {
            $someone_from_your_race .= $yourrace[$i] . '.';
        } else {
            $someone_from_your_race .= $yourrace[$i] . ',';
        }
    }
}

//$someone_of_same_color = $_POST['someone_of_same_color'];

$color = $_POST['someone_of_same_color'];
if (!empty($color)) {
    $someone_of_same_color = "";

    for ($i = 0; $i < count($color); $i++) {
        if ($i == count($color) - 1) {
            $someone_of_same_color .= $color[$i] . '.';
        } else {
            $someone_of_same_color .= $color[$i] . ',';
        }
    }
}

//$someone_you_may_never_see = $_POST['someone_you_may_never_see'];

$neversee = $_POST['someone_you_may_never_see'];
if (!empty($neversee)) {
    $someone_you_may_never_see = "";

    for ($i = 0; $i < count($neversee); $i++) {
        if ($i == count($neversee) - 1) {
            $someone_you_may_never_see .= $neversee[$i] . '.';
        } else {
            $someone_you_may_never_see .= $neversee[$i] . ',';
        }
    }
}


//$someone_of_same_age = $_POST['someone_of_same_age'];

$sameage = $_POST['someone_of_same_age'];
if (!empty($sameage)) {
    $someone_of_same_age = "";

    for ($i = 0; $i < count($sameage); $i++) {
        if ($i == count($sameage) - 1) {
            $someone_of_same_age .= $sameage[$i] . '.';
        } else {
            $someone_of_same_age .= $sameage[$i] . ',';
        }
    }
}



// Create connection
$conn = mysqli_connect("localhost", "root", "", "research_work");
// Check connection
if ($conn === false) {
    die ("Error: could not connect." . mysqli_connect_error());
}


$sql = "INSERT INTO questionnaire(age, sex, location, Education, religion, race, any_fight, how_often, kind_of_fight,
express_that_e_conflict_on_social_media, heard_about_people_having_conflict_social_media,cause_of_conflict,what_are_elements,cat_ppl_e_conflict_everyday,
met_someone_e_conflict_with,possible_behavioral_disposition,determines_your_behavioral_disposition,how_do_know_if_person_have_e_conflict,feel_unsafe,
things_make_you_feel_unsafe, likely_consequences,know_anyone_suffered_from_e_conflict,yes_what_kind_of_experience,someone_you_can_see, someone_you_may_see, 
someone_you_met_in_past, someone_from_your_race,someone_of_same_color,someone_you_may_never_see,someone_of_same_age) 
VALUES
('$age', '$sex', '$location','$Education','$religion','$race','$any_fight','$how_often','$kind_of_fight','$express_that_e_conflict_on_social_media', 
'$heard_about_people_having_conflict_social_media','$cause_of_conflict','$what_are_elements','$cat_ppl_e_conflict_everyday','$met_someone_e_conflict_with',
'$possible_behavioral_disposition','$determines_your_behavioral_disposition','$how_do_know_if_person_have_e_conflict','$feel_unsafe','$things_make_you_feel_unsafe',
'$likely_consequences','$know_anyone_suffered_from_e_conflict','$yes_what_kind_of_experience','$someone_you_can_see','$someone_you_may_see','$someone_you_met_in_past',
'$someone_from_your_race','$someone_of_same_color','$someone_you_may_never_see','$someone_of_same_age')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully ";
    header("Location: success.html"); // redirecting to the other page
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}