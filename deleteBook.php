<?php
include 'library_action.php';

$b_id = $_GET['b_id'];

$libraryObj->delete_book($b_id);

?>