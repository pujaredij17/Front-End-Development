<?php

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
      $data = (preg_match("/^[a-zA-Z0-9 ]*$/", $data)) ? $data : "";
      return $data;
}

function validate() {
  if (isset($_POST['submit'])) {
     $fname = validate_alpha($_POST['usr']);
    $lname = validate_alpha($_POST['lname']);
    $email = validate_email($_POST['email']);
    $topic = validate_alphanum($_POST['topic']);

    /* $fname = $_POST['usr'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
*/
    
    return !empty($fname) and !empty($lname) and !empty($email and !empty($topic)) ;
  }
  return false;
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
  
  <title>Contact us</title>
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
                      <li><a href="index.html">Inicio</a></li>
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
          	  <img src="images/bannercontacto.jpg">
           </div>           
        <div class="container banner-txt-area">
            <div class="zis-md-12">
                <h1 class="main-heading">CONTACTO</h1>
                <div class="sub-heading"><span>Inicio</span><b>CONTACTO</b></div>
            </div>
        </div>
     </div>
     <!--begin:inner-media-page-widget -->
     
     
     <!--begin:contact-info-section -->
     <div class="contactus-info-section">
		<div class="container">        
        	<h3>Información del contacto</h3>
			<div class="zis-md-3">
            	<div class="ct-address">198 West 21th Street,<br>Suite 721 New York NY 10016</div>
            </div> 
            <div class="zis-md-3">
            	<div class="ct-phone">+ 213564987</div>
            </div> 
            <div class="zis-md-3">
            	<div class="ct-info">info@diazapps.com</div>
            </div> 
            <div class="zis-md-3">
            	<div class="ct-web">diazapps.com</div>
            </div> 
		</div>
	 </div>
	 <!--end:contact-info-section -->
     
     <!--begin:contact-info-section -->
     <div class="contactus-social-section">
		<div class="container"> 
       	 <h3>LEAN en las redes sociales</h3>       
			<div class="zis-md-3">
            	<div class="media"><img src="images/ct-fb.png"><a href="#" class="link">LEAN Ayuda Humanitaria</a></div>
            </div> 
            <div class="zis-md-3">
            	<div class="media"><img src="images/ct-twitter.png"><a href="#" class="link">@LeanEmergente</a></div>
            </div> 
            <div class="zis-md-3">
            	<div class="media"><img src="images/ct-inst.png"><a href="#" class="link">@LeanAyudaHumanitaria</a></div>
            </div> 
            <div class="zis-md-3">
            	<div class="media"><img src="images/ct-email.png"><a href="#" class="link">lean.emergente@gmail.com</a></div>
            </div> 
		</div>
	 </div>
	 <!--end:contact-info-section -->   
     
     
     <!--begin:inner-media-page-widget -->
     <?php 
     if (!validate()) {
      ?>
     <div class="logo-form">
     	<div class="container-logo">     	
                <form id="login-form" name="login-form" method="POST">
                	<h3>Estar en contacto</h3>
                    <div class="row">
                    	<div class="zis-md-6">
                        	<div class="form-group">
                              <label for="usr">Nombre</label>
                              <input type="text" class="form-control" id="usr" name="usr" placeholder="Tu Nombre" maxlength="32" pattern="[A-Za-z ]+" required>
                              <p id="error_usr"></p>
                            </div>
                        </div>                        
                        <div class="zis-md-6">
                        	<div class="form-group">
                              <label for="pwd">Apellido</label>
                              <input type="text" class="form-control" id="lname" name="lname" placeholder="Tu Apellido" maxlength="32" pattern="[A-Za-z ]+" required>
                              <p id="error_lname"></p>

                            </div>
                        </div>
                        <div class="zis-md-12">
                        	<div class="form-group">
                              <label for="pwd">Correo</label>
                              <input type="email" class="form-control" id="email" name="email" placeholder="Tu correo electrónico" size="64" maxLength="64" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                              <p id="error_email"></p>
                            </div>
                        </div>
                        <div class="zis-md-12">
                        	<div class="form-group">
                              <label for="pwd">Tema</label>
                              <input type="text" class="form-control" id="topic" name="topic" placeholder="Su asunto de este mensaje." maxlength="64" required>
                              <p id="error_topic"></p>
                            </div>
                        </div> 
                        <div class="zis-md-12">
                        	<div class="form-group">
                              <label for="pwd">Mensaje</label>
                              <textarea placeholder="Di algo sobre nosotros" maxlength="256"></textarea>
                            </div>
                        </div> 
                        <input type="submit" value="Enviar Mensaje" name="submit" class="submit-data" onclick="myFunction()">    
                    </div>
                </form> 
        </div>    
     </div>
     <?php 
   } else {

    echo "Thanks for contacting us";

    $fname = $_POST['usr'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $topic = $_POST['topic'];

    $sql = "INSERT INTO `contact-us` (`fname`, `lname`, `email`,`topic`) VALUES ('$fname', '$lname', '$email','$topic')";

    if ($conn->query($sql) === TRUE) {
        echo "Contact Info Added Successfully";
      } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            echo "Unable to add contact information !!!";
          }
          


  

      
   }
   ?>
    <!--end:inner-media-page-widget -->
        
	<!--begin:footer-->
	<footer>
    	<div class="container">
        		<div class="heading-ft">Registrese para recibir un boletín</div>
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


