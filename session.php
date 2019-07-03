<?php
/**
 * Created by PhpStorm.
 * User: Oyekan Oluwatobi
 * Date: 7/3/2019
 * Time: 6:22 AM
 */ ?>
<?php
//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['user_id']) || (trim($_SESSION['user_id']) == '')) {
    header("location: admin.php");
    exit();
}
$session_id = $_SESSION['user_id'];
?>
