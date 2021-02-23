<?php

include 'library_action.php';

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
    <style>
     footer{
        /* position: fixed; */
       position:relative;
        top:100px; 
       
         /* height: 145px; */
        width: 100%;
      }
      
      {
        background-color:red;
      }
      .footer-distributed{
        background-color: #4169E1;
        box-sizing: border-box;
        width: 100%;
        text-align: left;
        font: bold 10px sans-serif;
        

        padding-top: 50px;
        padding-right: 30px;
        padding-left: 30px;
        /* margin-top: 90px; */
        
        
      }
      .footer-distributed .footer-left,
      .footer-distributed .footer-center,
      .footer-distributed .footer-right{
        display: inline-block;
        vertical-align: top;
        
      }
      .footer-distributed .footer-left{
        width: 40%;
      }
      .footer-distributed h3{
        color: #000000;
        font: normal 16px 'Cookie', cursive;
        margin: 0;
        
      }
      .footer-distributed h3 span{
        color: #ffffff;
      }
      .footer-distributed .footer-links a{
        display: inline-block;
        line-height: 1.2;
        text-decoration: none;
        color: #ffffff;
      }
      .footer-distributed .copyright{
        color: #000000;
        font-size: 10px;
        font-weight: normal;
        margin: 0;
      }
      .footer-distributed .footer-center{
        width: 35%; 
      }
      .footer-distributed .footer-center i{
        background-color: #33383b;
        color: #ffffff;
        font-size: 12px;
        width: 38px;
        /* height: 28px; */
        border-radius: 30%;
        text-align: center;
        line-height: 20px;
        /* margin: 10px 15px; */
        vertical-align: middle;
      }
      .footer-distributed .footer-center i.fa-envelope{
        font-size: 12px;
        line-height: 20px;
      }
      .footer-distributed .footer-center p{
        display: inline-block;
        color: #ffffff;
        vertical-align: middle;
        margin-bottom: 10px;
      }
      .footer-distributed .footer-center p span{
        display: block;
        font-weight: normal;
        font-size: 11px;
        
      }
      .footer-distributed .footer-center p a{
        color: #ffffff;
        text-decoration: none;
      }
      .footer-distributed .footer-right{
        width: 20%;
      }
      .footer-distributed .copyright{
        line-height: 60px;
        color: #000000;
        font-size: 11px;
        font-weight: normal;
        /* margin-top: 70px; */
      }
      .footer-distributed .copyright span{
        display: block;
        color: #ffffff;
        font-size: 12px;
        font-weight: normal;
        margin-bottom: 20px;
      }
      .footer-distributed .footer-icons{
        margin-top: 5px;
      }
      .footer-distributed .footer-right p span{
        color: #000000;
        font: bold 12px 'Cookie', cursive;
        

      }
      .footer-distributed .footer-icons a{
        display: inline-block;
        width: 35px;
        height:35px;
        cursor:pointer;
        border-radius: 2px;

        font-size: 18px;
        color: #ffffff;
        text-align: center;
        line-height: 25px;

        margin-right: 3px;
        margin-bottom: 5px;
      }
      body{             
         background-image:url('IMG/adduser.jpg');
         background-position: center;
         background-repeat: no-repeat;
         background-attachment: fixed;
         background-size:cover;

       }
    </style>
  </head>
  <body>
      <div class="container">
      <nav class="navbar navbar-expand-sm navbar-light bg-light">
         <a class="navbar-brand font-weight-bold" href="#">E-LIBRARY</a>
         <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
             aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="collapsibleNavId">
           <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
             <li class="nav-item active">
               <a class="nav-link text-primary" href="#">HOME <span class="sr-only">(current)</span></a>
             </li>
             <li class="nav-item">
               
             </li>
             <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle text-primary" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">USERS</a>
               <div class="dropdown-menu" aria-labelledby="dropdownId">
                 <a class="dropdown-item" href="addUser.php">Add User</a>
                 <a class="dropdown-item" href="displayUser.php">Display User</a>
               </div>
             </li>
             <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle text-primary" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">BOOKS</a>
               <div class="dropdown-menu" aria-labelledby="dropdownId">
                 <a class="dropdown-item" href="addBook.php">Add Book</a>
                 <a class="dropdown-item" href="displayBook.php">Display Book</a>
               </div>
             </li>
             <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle text-primary" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">AUTHORS</a>
               <div class="dropdown-menu" aria-labelledby="dropdownId">
                 <a class="dropdown-item" href="addAuthor.php">Add Author</a>
                 <a class="dropdown-item" href="readAuthor.php">Display Author</a>
                 <a class="dropdown-item" href="logout.php">Logout</a>
               </div>
             </li>
             <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle text-primary" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">RESERVATIONS</a>
               <div class="dropdown-menu" aria-labelledby="dropdownId">
                 <a class="dropdown-item" href="reserve.php">Add Reservation</a>
                 <a class="dropdown-item" href="display_reservation.php">Display Reservation</a>
               </div>
             </li>
           </ul>
           <form class="form-inline my-2 my-lg-0">
             <input class="form-control mr-sm-2" type="text" placeholder="Search">
             <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
           </form>
         </div>
       </nav>
      
        <div class="card mt-3">
          <div class="card-header">ADD USER</div>
          <div class="card-body">
            <form action="library_action.php" method="post">
              <input type="text" name="u_fname" placeholder="USER FULLNAME" class="form-control"><br>
              <input type="text" name="u_contact" placeholder="USER CONTACT" class="form-control"><br>
              <input type="text" name="u_location" placeholder="USER LOCATION" class="form-control"><br>
              <input type="text" name="u_age" placeholder="USER AGE" class="form-control"><br>

              <button type="submit" name="add_user" class="btn btn-outline-success">ADD USER</button>
            </form> 
          </div>
        </div>
        <div class="main">
            <footer class="footer-distributed">
              <div class="footer-left">
                      <h3>E-Library system<span></span></h3>
                      <p class="footer-links">
                        <a href="#">Home</a>
                        <a href="#">Blog</a>
                        <a href="#">About</a>
                        <a href="#">Contact</a>
                      </p>
                      <p class="copyright">Copyright &copy 2021 All Rights Reserved by Elvira SMAN</p>
              </div>
              <div class="footer-center">
                      <div>
                        <i class="fa fa-map-marker"></i>
                        <p><span>IT-school:Kredo Online</span>Japan/Phillipines</p>
                      </div>
                      <div>
                        <i class="fa fa-phone"></i>
                        <p>+81-90-123-456</p>
                      </div>
                      <div>
                        <i class="fa fa-envelope"></i>
                        <p><a href="mailto:elvira_smanova@yahoo.com">contact@elvirasman.com</a></p>
                      </div>
              </div>
              <div class="footer-right">
                      <p class="footer-about-me">
                        <span>Follow Me!</span>
                      </p>
                    <div class="footer-icons">
                      <a href="#"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-instagram"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
              </div>                       
               
            </footer>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>