<?php
include 'Database.php';

class E_library_system extends Database{

  public function create_author($fname, $age, $uname, $password){
  $sql = "INSERT INTO author (author_fullname, author_age, author_username, author_password) VALUES ('$fname', '$age', '$uname', '$password')";

  $result = $this->conn->query($sql);

  if (result == TRUE){
    header ('location:addAuthor.php');
  }else{
    return FALSE;
  }
  }
  public function display_author(){
    $sql = "SELECT * FROM author";
    $result = $this->conn->query($sql);

    if($result->num_rows >0){
      $container = array();
      while($row = $result->fetch_assoc()){
        $container[] = $row;
      }
      return $container;
    }else{
      return FALSE;
    }
  }
  public function delete_author($a_id){
    $sql = "DELETE FROM author WHERE author_id = '$a_id'";
    $result = $this->conn->query($sql);
    header ('location:readAuthor.php');
  }
  public function update_author($fname, $age, $uname, $password, $a_id){
    $sql = "UPDATE author SET author_fullname = '$fname', author_age = '$age', author_username = '$uname', author_password = '$password' WHERE author_id = '$a_id'";
    $result = $this->conn->query($sql);

    if(result == TRUE){
      header ('location:readAuthor.php');
    }else{
      return FALSE;
    }
  }
  public function create_book($author_id, $book_name, $book_genre){
    $sql = "INSERT INTO books (author_id, book_name, book_genre) VALUES ('$author_id', '$book_name', '$book_genre')";
    $result = $this->conn->query($sql);
    if(result == TRUE){
      header ('location:addBook.php');

    }else{
      return FALSE;
    }
  }
  public function display_book(){
    $sql = "SELECT * FROM books";
    $result = $this->conn->query($sql);

    if($result->num_rows >0){
      $container = array();
      while ($row = $result->fetch_assoc()){
        $container[] = $row;
      }
      return $container;
    }else{
      return FALSE;
    }
  }
  public function delete_book($b_id){
    $sql = "DELETE FROM books WHERE book_id = '$b_id'";
    $result = $this->conn->query($sql);
    header ('location:displayBook.php');
  }
  public function update_book($author_id, $b_name, $b_genre, $b_id){
    $sql = "UPDATE books SET author_id = '$author_id', book_name = '$b_name', book_genre = '$b_genre' WHERE book_id = '$b_id'";
    $result = $this->conn->query($sql);

    if(result == TRUE){
      header('location:displayBook.php');
    }else{
      return FALSE;
    }
  }
  public function reserve_book($borrower_fullname, $borrowed_book, $borrowed_date, $returned_date, $borrower_contact){
    $sql = "INSERT INTO reserve (borrower_fullname, borrowed_book, borrowed_date, returned_date, borrower_contact) VALUES ('$borrower_fullname', '$borrowed_book', '$borrowed_date', '$returned_date', '$borrower_contact')";

    $result = $this->conn->query($sql);
    if($result == TRUE){
      header('location:display_reservation.php');
    }else{
      return FALSE;
    }

  }
  public function display_reservation(){
    $sql = "SELECT * FROM reserve";
    $result = $this->conn->query($sql);

    if($result->num_rows >0){
      $container = array();
      while($row = $result->fetch_assoc()){
        $container[] = $row;
      }
      return $container;

    }else{
      return FALSE;
    }
  }
  public function delete_reservation($r_id){
    $sql = "DELETE FROM reserve WHERE reserve_id = '$r_id'";
    $result = $this->conn->query($sql);
    header('location:display_reservation.php');
  }
  
public function update_reservation($r_id, $bor_fname, $bor_book, $bor_date, $ret_date, $bor_contact){
  $sql = "UPDATE reserve SET borrower_fullname = '$bor_fname', borrowed_book = '$bor_book', borrowed_date = '$bor_date', returned_date = '$ret_date', borrower_contact = '$bor_contact' WHERE reserve_id = '$r_id'";

  $result = $this->conn->query($sql);
  if($result == TRUE){
    header('location:display_reservation.php');
  }else{
    return FALSE;
  }

}
public function add_user($u_fname, $u_contact, $u_location, $u_age){
  $sql = "INSERT INTO user (user_fullname, user_contact, user_location, user_age) VALUES ('$u_fname', '$u_contact','$u_location','$u_age')";

  $result = $this->conn->query($sql);
  if($result == TRUE){
    header ('location:displayUser.php');
  }else{
    return FALSE;
  }

}
public function display_user(){
  $sql = "SELECT * FROM user";
  $result = $this->conn->query($sql);
  if($result->num_rows >0){
    $container = array();
    while($row = $result->fetch_assoc()){
      $container[] = $row;
    }
    return $container;
  }else{
    return FALSE;
  }
} 
public function delete_user($u_id){
  $sql = "DELETE FROM user WHERE user_id = '$u_id'";
  $result = $this->conn->query($sql);

  if($result == TRUE){
  header('location:displayUser.php');

  }else{
    return FALSE;
}
}
public function update_user($user_id, $user_fname, $user_contact, $user_location, $user_age){
  $sql = "UPDATE user SET user_fullname = '$user_fname', user_contact = '$user_contact', user_location = '$user_location', user_age = '$user_age' WHERE user_id = '$user_id'";

  $result = $this->conn->query($sql);
    if($result == TRUE){
    header('location:displayUser.php');

  }else{
    die("ERROR: ".$this->conn->error);
  }

}


}
  
 



?>