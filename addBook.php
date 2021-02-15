<?php
include 'library_action.php';
$author_list = $libraryObj->display_author();




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
          <div class="alert alert-info text-center">ADD BOOK</div>
            <form action="library_action.php" method="post">
              <div class="row mt-3">
                <div class="col-3">
                  <select name="author_id" id="" class="form-control">
                    <option disabled selected>CHOOSE AN AUTHOR</option>
                    <?php 
                      foreach($author_list as $author){
                        $author_name = $author['author_fullname'];
                        $author_id = $author['author_id'];
                       
                        echo "<option value='$author_id'>$author_name</option>";

                      }
                    ?>
                  </select>
                </div>
                <div class="col-4">
                  <input type="text" name="book_name" placeholder="BOOK NAME" class="form-control">
                </div>
                <div class="col-4">
                  <input type="text" name="book_genre" placeholder="BOOK GENRE" class="form-control">
                </div>
                <div class="col-4">
                  <!-- <input type="text" name="book_author" placeholder="BOOK AUTHOR" class="form-control"> -->
                </div>
              <div class="row mt-3">
                <div class="col-12">
                  <button type="submit" name="add_book" class="btn btn-outline-info">ADD BOOK</button>
                </div>
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