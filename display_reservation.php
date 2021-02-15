<?php
include 'library_action.php';

$reservation_list = $libraryObj->display_reservation();

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <table class="mt-5 table table-info table-bordered table-striped">
        <thead>
          <th>BORROWER FULLNAME</th>
          <th>BORROWED BOOK</th>
          <th>BORROWED DATE</th>
          <th>RETURNED DATE</th>
          <th>BORROWER CONTACT</th>
        </thead>
        <tbody>
          <?php
            foreach($reservation_list as $reserve){
              $reserve_id = $reserve['reserve_id'];
              echo "<tr>";
              echo "<td>".$reserve['borrower_fullname'];
              echo "<td>".$reserve['borrowed_book'];
              echo "<td>".$reserve['borrowed_date'];
              echo "<td>".$reserve['returned_date'];
              echo "<td>".$reserve['borrower_contact'];
              echo "<td><a href='delete_reservation.php?r_id=$reserve_id'class='btn btn-outline-danger'>DELETE RESERVATION</a></td>";
              echo "<td><a href='update_reservation.php?r_id=$reserve_id' class='btn btn-outline-warning'>UPDATE RESERVATION</a></td>";
              echo "</tr>";
            }

          ?>
        
        </tbody>
      
      </table>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>