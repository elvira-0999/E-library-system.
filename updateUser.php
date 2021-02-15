<?php

$upUser = $_GET['elvira'];

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
      <div class="card">
        <div class="card-header">UPDATE USER</div>
          <div class="card-body">
            <form action="library_action.php?elvira=<?php echo $upUser ?>" method="post">
              <div class="row mt-3">
                <div class="col-3">
                  <input type="text" name="user_fname" placeholder="USER FULLNAME" class="form-control">
                </div>
                <div class="col-3">
                  <input type="text" name="user_contact" placeholder="USER CONTACT" class="form-control">
                </div>
                <div class="col-3">
                  <input type="text" name="user_location" placeholder="USER LOCATION" class="form-control">
                </div>
                <div class="col-3">
                  <input type="text" name="user_age" placeholder="USER AGE" class="form-control">
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-12">
                  <button type="submit" name="update_user" class="btn btn-outline-warning">UPDATE USER</button>
                </div>
              </div>
            </form>
          </div>
      </div>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>