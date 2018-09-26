<?php
  $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>

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
    <!-- FontAwesome 4 CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- FontAwesome 5 CDN -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
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

        <!-- Ahh Shit -->
        <div style="text-align: center; content-align: center;">
            <br>
            <br>           
            <br>           
            <br>           
            <br>
            <br>           
            <br>           
            <br>
            <br>
            <br>
            <br>
            <!-- So this code is suppose to work?  Anyways come back to this and fix it! -->
            <?php
              if (($actual_link == "https//noahosterhout.com/sitemap.php") || ($actual_link == "https//www.noahosterhout.com/sitemap.php")) {
                echo "<h1 style=\"font-size: 4em;\">Ahh.... Shit?</h2><br><h3>Hey you requested my sitemap!  Hang on for a bit while I am still creating it and styling it, for now just head back to my home page here ----> <a href=\"https://noahosterhout.com\">Head Home!</a></h3>";
              } else {
                echo "<h1 style=\"font-size: 4em;\">Ahh Shit!</h2><br><h3>Something happened with the links or something rather, go ahead and <a href=\"mailto:noah@noahosterhout.com?subject=Fix your website!&body=Hey, I went to a URL on your site and I got a 404 error.  Yeah, I broke your site, deal with it.  Anyways here's the stuff and things you need dummy: Requested Link: <?php echo $actual_link ?>\">email</a> me and tell me what happened!</h3>
                <p><i class=\"fas fa-frown fa-2x\"></i></p>";
              }
            ?>
            <br>
            <br>
            <h5>Requested Link: <?php echo "<a href=".$actual_link.">$actual_link</a>"; ?></h5>
            <br>           
            <h5><a href="sitemap.php"><i class="fas fa-sitemap fa-lg"></i><a/></h5>
            <br>           
            <br>           
            <br>           
            <br>           
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