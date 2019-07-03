<?php
/**
 * Created by PhpStorm.
 * User: Oyekan Oluwatobi
 * Date: 7/3/2019
 * Time: 10:29 AM
 */ ?>
<?php
session_start();
session_destroy();

header('location: index.html');
?>
