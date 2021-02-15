<?php
include 'library_action.php';

$delUser = $_GET['elvira'];

$libraryObj->delete_user($delUser);

?>