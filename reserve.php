<?php
include 'library_action.php';
$book_list = $libraryObj->display_book();

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
      <div class="jumbotron mt-3">
        <div class="alert alert-info text-center">RESERVE BOOK</div>
          <form action="library_action.php" method="post">
            <div class="row mt-3">
              <div class="col-5">
                <select name="book_name" id="" class="form-control"><option disabled selected>LIST OF BOOKS</option>
                <?php
                  foreach($book_list as $elvira){
                    $book_name = $elvira['book_name'];
                    $book_id = $elvira['book_id'];

                    echo "<option value='$book_id'>$book_name</option>";
                  }
                ?>
                </select>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-3">
                <input type="text" name="bor_fname" placeholder="BORROWER FULLNAME" class="form-control">
              </div>
              <div class="col-3">
                <input type="date" name="bor_date" placeholder="BORROWED DATE" class="form-control">
              </div>
              <div class="col-3">
                <input type="date" name="ret_date" placeholder="RETURNED DATE" class="form-control">
              </div>
              <div class="col-3">
                <input type="text" name="bor_contact" placeholder="BORROWER CONTACT" class="form-control"> 
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-12">
                <button type="submit" name="reserve_book" class="btn btn-outline-info">RESERVE BOOK</button>
              </div>
            </div>                     
            
          </form>
      </div>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>