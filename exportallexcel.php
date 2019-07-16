<?php
$conn = new mysqli('localhost', 'root', '');
mysqli_select_db($conn, 'research_work');
$sql = "SELECT `age`,`sex`,`location`, `Education`, `religion`,`race`,`any_fight`, `how_often`,`kind_of_fight`,
`express_that_e_conflict_on_social_media`, `heard_about_people_having_conflict_social_media`,`cause_of_conflict,what_are_elements`,
`cat_ppl_e_conflict_everyday`,`met_someone_e_conflict_with`,`possible_behavioral_disposition`,`determines_your_behavioral_disposition`,
`how_do_know_if_person_have_e_conflict`,`feel_unsafe`,`things_make_you_feel_unsafe`,`likely_consequences`,`know_anyone_suffered_from_e_conflict`,
`yes_what_kind_of_experience`,`someone_you_can_see`,`someone_you_may_see`,`someone_you_met_in_past`,`someone_from_your_race`,`someone_of_same_color`,
`someone_you_may_never_see`,`someone_of_same_age` FROM `questionnaire`";
$setRec = mysqli_query($conn, $sql);
$columnHeader = '';
$columnHeader = "Age" . "\t" . "Sex" . "\t" . "Location" . "\t" . "Education" . "\t" . "Religion" . "\t" . "Race" . "\t"
    . "Have you ever had any form of fight with anyone on the social media platforms?" . "\t" . "If yes to the question above, how often do you fight?" . "\t" .
    "What kind of fight? " . "\t" . "How do you express that e-conflict on the social media platforms?" . "\t" .
    "Have you heard about people having conflict on or using the social media?" . "\t" .
    "What in particular caused the conflict" . "\t" . "What are elements of the posts/tag that can lead to conflict" . "\t" .
    "What categories of people do you have e-conflict with regularly" . "\t" . "Have you ever met someone you had conflict with on the social media in the real world?" . "\t"
    . "If you ever meet anyone you have had conflict with online before, what are the possible behavioral disposition?" . "\t" .
    "What determines your behavioral disposition towards this person" . "\t" . "How do you know if a person is having conflict with you?" . "\t" .
    "When you have conflict with someone online, do you feel unsafe?" . "\t" . "What are the things that make you to feel unsafe" . "\t" .
    "What are the likely consequences you expect during online conflict with another person?" . "\t" .
    "Do you know of anyone who has suffered in real world for a conflict that was initiated online?" . "\t" . "If yes, what kind of experience?" . "\t" .
    "How do you respond, if in conflict online with: Someone you can see?" . "\t" . "How do you respond, if in conflict online with: Someone you may see?" . "\t" .
    "How do you respond, if in conflict online with: Someone you met in the past?" . "\t" .
    "How do you respond, if in conflict online with: Someone of some race as you" . "\t" .
    "How do you respond, if in conflict online with: Someone of same color as you/someone of your culture?" . "\t" .
    "How do you respond, if in conflict online with: Someone you may never " . "\t" .
    "How do you respond, if in conflict online with: Someone of same age?" . "\t";
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
