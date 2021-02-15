<?php
include 'library_action.php';

$a_id = $_GET['a_id'];

$libraryObj->delete_author($a_id);

?>