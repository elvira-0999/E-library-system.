<?php
include 'library_action.php';

$r_id = $_GET['r_id'];

$libraryObj->delete_reservation($r_id);

?>