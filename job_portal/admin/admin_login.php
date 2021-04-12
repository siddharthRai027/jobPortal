
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>admin login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
">

    <!-- Custom styles for this template -->
    <link href="css/admin_login.css" rel="stylesheet">
    <script src="js/admin_login.js"></script>
  </head>
  <body class="text-center">
    <form class="form-signin" id="admin_login" name="admin_login" method="post" action="admin_login.php">
      <img class="mb-4" src="logo2.png" alt="" width="102" height="102">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="pass" name="pass" class="form-control" placeholder="Password" required>
     
      <input class="btn btn-lg btn-primary btn-block" type="submit" id="submit" name="submit"placeholder="sign in">
      <p class="mt-5 mb-3 text-muted">&copy; 2021-2022</p>
    </form>
  </body>
</html>
<?php
include('connection/db/php');


