<?php
$conn = new mysqli('localhost', 'root', '');
mysqli_select_db($conn, 'research_work');
$sql = "SELECT `id`,`age`,`sex`,`location`, `Education`, `religion`,`race` ,`any_fight`, `how_often`,`kind_of_fight`,`express_that_e_conflict_on_social_media`,`heard_about_people_having_conflict_social_media`,`cause_of_conflict`,`what_are_elements`, `cat_ppl_e_conflict_everyday`,`met_someone_e_conflict_with`,`possible_behavioral_disposition`,`determines_your_behavioral_disposition`, `how_do_know_if_person_have_e_conflict`,`feel_unsafe`,`things_make_you_feel_unsafe`, `likely_consequences`, `know_anyone_suffered_from_e_conflict`,`yes_what_kind_of_experience`,`someone_you_can_see`,`someone_you_may_see`,`someone_you_met_in_past`,`someone_from_your_race`,`someone_of_same_color`,`someone_you_may_never_see`, `someone_of_same_age` from `questionnaire`";

$setRec = mysqli_query($conn, $sql);
$columnHeader = '';
$columnHeader = "S/N" . "\t" . "Age" . "\t" . "Sex" . "\t" . "Location" . "\t" . "Education" . "\t" . "Religion" . "\t" . "Race" . "\t" . "Any fight" . "\t" . "how often" . "\t" . "kind of fight" . "\t" . "Express" . "\t" . "Heard" . "\t" . "Cause" . "\t" . "Elements" . "\t" . "cat of people" . "\t" . "Met someone" . "\t" . "Possible behv disp" . "\t" . "determinants of behv disp" . "\t" . "How do you know if in e-conflict" . "\t" . "do you feel unsafe" . "\t" . "Things that makes you feel unsafe" . "\t" . "likely consequence" . "\t" . "know anyone that has suffered e-conflict" . "\t" . "yes, what kind of experience" . "\t" . "someone you can see" . "\t" . "someone you may see" . "\t" . "someone you met in the past" . "\t" . "someone from your race" . "\t" . "someone of same color" . "\t" . "someone you may never see" . "\t" . "someone of same age" . "\t";

$setData = '';
while ($rec = mysqli_fetch_row($setRec)) {
    $rowData = '';
    foreach ($rec as $value) {
        $value = '"' . $value . '"' . "\t";
        $rowData .= $value;
    }
    $setData .= trim($rowData) . "\n";
}

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=correspondence_feedback.xls");
header("Pragma: no-cache");
header("Expires: 0");

echo ucwords($columnHeader) . "\n" . $setData . "\n";
?>
