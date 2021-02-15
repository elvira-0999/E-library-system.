<?php
include 'library_action.php';
$authors = $libraryObj->display_author(); 


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
          <th>AUTHOR FULLNAME</th>
          <th>AUTHOR AGE</th>
          <th>AUTHOR USERNAME</th>
          <th>AUTHOR PASSWORD</th>
          <th colspan="3">Options</th>
        </thead>
        <tbody>
        <?php
          foreach($authors as $authors_detail){
            $a_id = $authors_detail['author_id'];
            echo "<tr>";
            echo "<td>".$authors_detail['author_fullname']."</td>";
            echo "<td>".$authors_detail['author_age']."</td>";
            echo "<td>".$authors_detail['author_username']."</td>";
            echo "<td>".$authors_detail['author_password']."</td>";
            echo "<td><a href='deleteAuthor.php?a_id=$a_id'class='btn btn-outline-danger'>DELETE AUTHOR</a></td>";
            echo "<td><a href='updateAuthor.php?a_id=$a_id'class='btn btn-outline-warning'>UPDATE AUTHOR</a></td>";
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