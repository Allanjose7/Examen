
<!DOCTYPE html>
<html>
<head>
<head>
  <title>Validando...</title>
  <meta charset="utf-8">
  <meta id="view" name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1">
  <style type="text/css">
    
.promo{ position: relative; 
    margin: 40px; 
    font-size: 16px; 
    font-family: 'Indie Flower', cursive;
    text-align: center;

    }

  </style>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!-- Favicon ================== -->
      <!-- Standard -->
      <link rel="shortcut icon" href="img/logo4.png">
      <!-- Retina iPad Touch Icon-->
      <link rel="apple-touch-icon" sizes="144x144" href="img/favicon-144.png">
      <!-- Retina iPhone Touch Icon-->
      <link rel="apple-touch-icon" sizes="114x114" href="img/favicon-114.png">
      <!-- Standard iPad Touch Icon-->
      <link rel="apple-touch-icon" sizes="72x72" href="img/favicon-72.png">
      <!-- Standard iPhone Touch Icon-->
      <link rel="apple-touch-icon" sizes="57x57" href="img/favicon-57.png">
     <link href="css/theme-Rradilet.css" rel="stylesheet" type="text/css" media="all"/>
</head>
</head>
<body >
  
  <section class="animsition">

<div class="background-img-holder overlay">
                <img src="img/intro.png">
              </div>

</section>


<script src="js/jquery.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script src="js/jquery-1.11.3.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/animsition.min.js"></script>
 
      <script src="js/jquery.magnific-popup.min.js"></script>
      <script src="js/jquery.countdown.min.js"></script>
      <script src="js/twitterFetcher_min.js"></script>
      <script src="js/masonry.pkgd.min.js"></script>
      <script src="js/imagesloaded.pkgd.min.js"></script>
      <script src="js/jquery.flexslider-min.js"></script>
      <script src="js/photoswipe.min.js"></script>
      <script src="js/photoswipe-ui-default.min.js"></script>
      <script src="js/jqinstapics.min.js"></script>
      <script src="js/script.js"></script>
    <?php
    $pass=$_POST['pass'];
    $user=$_POST['user'];
    
    
        if($user=='prueba' and $pass=='12345'){
          echo '<script> window.location="maps.php"; </script>';
        }else{
          echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
          echo '<script> window.location="login.php"; </script>';
        
      }


?>  
</body>
</html>
