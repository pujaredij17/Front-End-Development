<?php

// Start the session
session_start();

//$servername = "167.99.105.36";
$servername = "uta.cloud";
$username = "pujaredi_lean";

// Create connection
$conn = new mysqli($servername, $username ,'Leanevent1','pujaredi_leanevent');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function validate_alpha($data) {
    $data = test_input($data);
    $data = (preg_match("/^[a-zA-Z ]+$/",$data)) ? $data : "";
    return $data;
}

function validate_email($data) {
    $data = test_input($data);
    $data = (preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/",$data)) ? $data : "";
    return $data;
}

function validate_alphanum($data){
      $data = test_input($data);
      $data = (preg_match("/^[a-zA-Z0-9]*$/", $data)) ? $data : "";
      return $data;
}

function validate_pwd($data){
  $data = test_input($data);
  $data = (preg_match("/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,16}$/", $data)) ? $data : "";
  return $data;
}

function validate() {
  if (isset($_POST['submit'])) {

   // $username = $_POST['username'];
    $login_pwd = validate_pwd($_POST['login_pwd']);
    $username1 = validate_email($_POST['username']);
    $username2 = validate_alphanum($_POST['username']);
    $username = ($username1 || $username2);

    //$login_pwd = test_input($_POST['login_pwd']);
    return !empty($username) and !empty($login_pwd);
  }
  return false;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link href="css/custom-grid.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/custom-js.js"></script>  
  <link type="text/css" href="css/leanevent.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> 
   
  
</head>


<body id="scroller-bottom-top" data-spy="scroll" data-target=".navbar" data-offset="50">

	<!--begin:header -->
	 <header class="header-section">
         <nav class="navbar navbar-default">
              <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                  </button>
                  <a class="navbar-brand" href="#"><img src="images/logo-site.png" alt="Logo" width="200" /></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                   <ul class="nav navbar-nav navbar-right">
                       <li><a href="index.php">Inicio</a></li>
                        <li><a href="about-us.html">Quienes Somos</a></li>
                        <li><a href="http://pujaredij.uta.cloud/REDIJ_LEANEVENT/blog">Blog</a></li>
                        <li><a href="register.php">Registrate</a></li>
                        <li><a href="contact-us.php">Contacto</a></li>
                        <li><a href="login.php">Iniciar Sesión</a></li>
                        <li><a href="buy-from-us.html">Comprar Boletos</a></li>
                  </ul>
                </div>
              </div>
          </nav>
      </header>   
      <!--end:header -->
      
      
	  
	 <!--begin:inner-media-page-widget -->
     <div class="inner-media-page-widget">
           <div class="media-banner">
          	  <img src="images/bannerlogin.jpg">
           </div>           
        <div class="container banner-txt-area">
            <div class="zis-md-12">
                <h1 class="main-heading">Iniciar Sesión</h1>
                <div class="sub-heading"><span>Inicio</span><b>Iniciar Sesión</b></div>
            </div>
        </div>
     </div>
     <!--begin:inner-media-page-widget -->
     
     
     
     <?php 
     if (!validate()) {
      ?>
     <!--begin:inner-media-page-widget -->
     <div class="logo-form">
     	<div class="container-logo">     	
                <form id="login-form" method="POST">
                	<h3>Iniciar Sesión</h3>
                    <div class="row">
                    	<div class="zis-md-6">
                        	<div class="form-group">
                              <label for="usr">Nombre de Usuario</label>
                              <!--input type="text" class="form-control" id="username" name="username" placeholder="Nombre de Usuario o Correo" required pattern="[A-Za-z]{1,15}+ | [a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"-->
                              <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de Usuario o Correo" required>
                              <p id="error_username"></p>
                            </div>
                        </div>                        
                        <div class="zis-md-6">
                        	<div class="form-group">
                              <label for="pwd">Contraseña</label>
                              <input type="password" class="form-control" id="login_pwd" name="login_pwd" required placeholder="Contraseña" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                              <p id="error_pwd"></p>
                            </div>
                        </div>  
                        <a href="#" class="for-pass"><label for="reset-toggle">Olvido so contraseña</label></a>

                       


                        <input type="submit" value="Entra" name="submit" class="submit-data" onclick="myLogin()">  

                         <input type ="checkbox" id="reset-toggle" value="link" style="visibility: hidden;">

                        <dialog > 
                        
                        <div class="reset_content"> 
                                          <form id="reset_form" novalidate>
                                            <h3>Recuperar Su Contraseña</h3>
                                            <label for="reset_pwd">Correo</label>
                                            <input type="email" id="reset_pwd" name="reset_pwd" placeholder="Correo" style="width:100%" size="64" maxLength="64" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                                            <p id="error_reset"></p>
                                            <input type="submit" value="Enviar" name="reset_submit" class="submit-data" onclick="resetPwd()">  
                                        </form>
    </div>
   <label for="reset-toggle">Cerrar</label>
</dialog>

                    </div>
                </form> 
        </div>    
     </div>
    <!--end:inner-media-page-widget -->
     <?php 
   } else {

   // echo "Thanks for contacting us";     

    $username = $_POST['username'];
    $login_pwd = $_POST['login_pwd'];
  //  $email = $_POST['email'];

    $sql = "SELECT * FROM users WHERE email = '$username' OR username = '$username' AND password = '$login_pwd'";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

      if($row["roleId"] == 1){
        $_SESSION['username']=$username;
       // $_SESSION['fName']=$row['fName'];
        //$_SESSION['lName']=$row['lName'];
        //$_SESSION['email']=$row
       // header("location: home_individual.php");
        echo "<script>window.location.assign('home_individual.php');</script>";
      }

      elseif ($row["roleId"] == 3) {
        $_SESSION['username']=$username;
       //$_SESSION['username']=$row['username'];  
      // header("location: home_business.php");
       echo "<script>window.location.assign('home_business.php');</script>";

    }
    elseif ($row["roleId"] == 2) {
       $_SESSION['username']=$username;
      // $_SESSION['username']=$row['username'];  
       //header("location: home_agent.php");
        echo "<script>window.location.assign('home_agent.php');</script>";

    }

    }
  }
      else{

        echo " Invalid Credentials";

      }



$conn->close();
   }
   ?>

    
    
	<!--begin:footer-->
	<footer>
    	<div class="container">
        		<div class="heading-ft">LEAN EN LAS REDES SOCIALES</div>
                <ul class="footer-social">
                	<li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
                <div class="copy-right">Copyright @2019 All rights reserved | This web is made with &#9825 by <a href="#">DiazApps</a></div>
        </div>  
        
        <a href="#scroller-bottom-top" class="home-tag-ft"><i class="fas fa-arrow-up"></i></a>    </footer>
    <!--end:footer-->
  <script src="js/javascript.js"></script> 
</body>
</html>
