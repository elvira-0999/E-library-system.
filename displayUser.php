<?php
include "library_action.php";
$user = $libraryObj->display_user();

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
          <th>USER FULLNAME</th>
          <th>USER CONTACT</th>
          <th>USER LOCATION</th>
          <th>USER AGE</th>
        </thead>
        <tbody>
        <?php
          foreach($user as $user_detail){
           $u_id = $user_detail['user_id'];
           echo "<tr>";
           echo "<td>".$user_detail['user_fullname']."</td>";
           echo "<td>".$user_detail['user_contact']."</td>";
           echo "<td>".$user_detail['user_location']."</td>";
           echo "<td>".$user_detail['user_age']."</td>";
           echo "<td><a href='deleteUser.php?elvira=$u_id'class='btn btn-outline-danger'>DELETE USER</a></td>";
           echo "<td><a href='updateUser.php?elvira=$u_id'class='btn btn-outline-warning'>UPDATE USER</a></td>";
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