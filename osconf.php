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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Fonts API | Open Sans -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="main.css">
    <!-- Custom JS -->
    <script src="main.js"></script>

    <style>
      @font-face {
          font-family: abberancy;
          src: url("abberancy.otf");
      }

      #abber {
        font-family: abberancy;
      }
    </style>

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

        <!-- Ahh Shit -->
        <div style="text-align: center; content-align: center;">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <h2>Noah's Starter OS Kit</h2>
            <h3>This is my Starter Kit for new Operating Systems that includes fonts, background images and more!</h3>
            <br>
            <br>
            <br> 
            <br>
            <br>
            <br>           
        </div>
        <div style="text-align: center; content-align: center;">
          <a href="NODesign1.png" download><img src="NODesign1.png" alt="Background Image" width="50px" height="50px"></a>
          <br>
          <br>
          <br>
          <a href="abberancy.otf" download><h2 id="abber">Abberancy</h2></a>
          <br>
          <a href="opensans.zip" download><h2>Open Sans</h2></a>
          <br>
          <br> 
        </div>

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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  </body>
</html>