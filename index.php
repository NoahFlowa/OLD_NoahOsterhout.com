<!doctype html>
<html lang="en">

<head>

  <!-- 
      Hey!  You found my source code!  Lucky you!  See my handywork and
      different things I use to create my websites!  I use the PHP include
      so thats why the formatting is a little wonk on here but check out:
      my GitHub or GitLab accounts for the formatted Source Code!
    -->

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Noah Osterhout</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy"
    crossorigin="anonymous">
  <!-- FontAwesome 4 CDN -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- FontAwesome 5 CDN -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
    crossorigin="anonymous"></script>
  <!-- Google Fonts API | Open Sans -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="main.css">
  <!-- Custom JS -->
  <script src="main.js"></script>

</head>

<body class="container-fluid">
  <div class="row">
    <!-- This Div section is never used, only to create half-wide website -->
    <div class="col-md-1">
    </div>
    <!-- This Div section contains all body content -->
    <div class="col-md-10">

      <!-- Navbar-->
      <?php require 'navbar.php'; ?>

      <!-- Jumbotron-->
      <div class="jumbotron jumbotron-fluid mx-auto">
        <div class="container-fluid">
          <p class="display-3"><strong>Noah <span style="color: #22c2fc;">O</span>sterhout</strong></p>
          <p class="display-4 lead"><strong>Not Just Another <span style="color: #22c2fc;">P</span>rogrammer</strong></p>
        </div>
      </div>

      <!-- About Me-->
      <?php require 'aboutme.php'; ?>

      <br>

      <!-- Add the Bootstrap Collapseable Menus here for better QoS(?) -->

      <!-- Experience-->
      <?php require 'experience.php'; ?>

      <br>

      <!-- Skills & Languages-->
      <?php require 'skills&languages.php'; ?>

      <br>

      <!-- Focuses-->
      <?php require 'focuses.php'; ?>

      <br>

      <!-- Footer-->
      <?php require 'footer.php'; ?>

      <br>

    </div>

    <!-- This Div section is never used, only to create half-wide website -->
    <div class="col-md-1">
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4"
    crossorigin="anonymous"></script>
</body>

</html>