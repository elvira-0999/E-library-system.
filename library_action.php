<?php

include 'classess/Library.php';
$libraryObj = new E_library_system;


if(isset($_POST['add_author'])){
  $a_fname = $_POST['author_fullname'];
  $a_age = $_POST['author_age'];
  $a_username = $_POST['author_username'];
  $a_password = $_POST['author_password'];

  $libraryObj->create_author($a_fname,$a_age,$a_username,$a_password);

}elseif(isset($_POST['update_author'])){
  $a_fname = $_POST['author_fullname'];
  $a_age = $_POST['author_age'];
  $a_username = $_POST['author_username'];
  $a_password = $_POST['author_password'];
  $a_id = $_GET['a_id'];

  $libraryObj->update_author($a_fname, $a_age, $a_username, $a_password, $a_id);
}
elseif(isset($_POST['add_book'])){
  $a_id = $_POST['author_id'];
  $b_name = $_POST['book_name'];
  $b_genre = $_POST['book_genre'];
 
  $libraryObj->create_book($a_id, $b_name, $b_genre);

}
elseif(isset($_POST['update_book'])){
  $b_id = $_GET['b_id'];
  $b_name = $_POST['book_name'];
  $b_genre = $_POST['book_genre'];
  $author_id = $_POST['author_id'];

  $libraryObj->update_book($b_id, $b_name, $b_genre, $author_id);
}
elseif(isset($_POST['reserve_book'])){
  $b_name = $_POST['book_name'];
  $borrower_fullname = $_POST['bor_fname'];
  $borrowed_date = $_POST['bor_date'];
  $returned_date = $_POST['ret_date'];
  $borrower_contact = $_POST['bor_contact'];
  
  $libraryObj->reserve_book($borrower_fullname, $b_name,$borrowed_date, $returned_date, $borrower_contact);
}
elseif(isset($_POST['update_reservation'])){
  $r_id = $GET['r_id'];
  $bor_fname = $_POST['bor_fname'];
  $bor_book = $_POST['bor_book'];
  $bor_date = $_POST['bor_date'];
  $ret_date = $_POST['ret_date'];
  $bor_contact = $_POST['bor_contact'];

  $libraryObj->update_reservation($r_id, $bor_fname, $bor_book, $bor_date, $ret_date, $bor_contact);

}
elseif(isset($_POST['add_user'])){
  $u_fname = $_POST['u_fname'];
  $u_contact = $_POST['u_contact'];
  $u_location = $_POST['u_location'];
  $u_age = $_POST['u_age'];

  $libraryObj->add_user($u_fname, $u_contact, $u_location, $u_age);
}
elseif(isset($_POST['update_user'])){
  $user_id = $_GET['elvira'];
  $user_fname = $_POST['user_fname'];
  $user_contact = $_POST['user_contact'];
  $user_location = $_POST['user_location'];
  $user_age = $_POST['user_age'];
  
  $libraryObj->update_user($user_id, $user_fname, $user_contact, $user_location, $user_age);
}





?>