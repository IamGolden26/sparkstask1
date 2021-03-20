<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background-color : #aa0000;
background-image: linear-gradient(315deg, #003B41 0%, #1AE9FF 74%);">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  
                  <h1>SOCIETY BANK</h1>
                  <h3>By Sonal Rao</h3>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/banki.png"  width="300px" height="200px">
              </div><br>
            </div>

      <!-- Activity section -->
      <h2><marquee>Welcome to Society Bank</marquee></h2>
     
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/user.png" width="500px" height="300px">
                    <br>
                    <a href="createuser.php"><button style="background-color : #2785C4;">New User</button></a><br>
                  </div><br>
                  
                  <div class="col-md act">
                    <img src="img/transfers.png" width="500px" height="300px">
                    <br>
                    <a href="createuser.php"><button style="background-color : #2785C4;">Money Transfer </button></a><br>
                  </div><br>
                  <div class="col-md act">
                    <img src="img/muser.png" width="500px" height="300px">
                    <br>
                    <a href="createuser.php"><button style="background-color : #2785C4;">All Users</button></a><br>
                  </div><br>
                  <div class="col-md act">
                    <img src="img/thistory.png" width="500px" height="300px">
                    <br>
                    <a href="createuser.php"><button style="background-color : #2785C4;">Transaction History</button></a><br>
                  </div><br>
                  
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>Sonal Suhas Rao</b> <br> WEB DEVELOPER :- THE SPARKS FOUNDATION </p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>