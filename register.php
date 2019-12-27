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
    $pwd_reg = validate_pwd($_POST['pwd_reg']);
    $email_reg = validate_email($_POST['email_reg']);
    $Nombre_reg =  validate_alpha($_POST['Nombre_reg']);
    $Apellido_reg = validate_alpha($_POST['Apellido_reg']);
  

    //$login_pwd = test_input($_POST['login_pwd']);
    return !empty($email_reg) and !empty($pwd_reg) and !empty($Nombre_reg) and !empty($Apellido_reg) ;
  }
  return false;
}

function validate1() {
  if (isset($_POST['submit1'])) {

   // $username = $_POST['username'];
    $pwd_reg1 = validate_pwd($_POST['pwd_reg1']);
    $email_reg1 = validate_email($_POST['email_reg1']);
    $Nombre_reg1 =  validate_alpha($_POST['Nombre_reg1']);
    $Apellido_reg1 = validate_alpha($_POST['Apellido_reg1']);
  

    //$login_pwd = test_input($_POST['login_pwd']);
    return !empty($email_reg1) and !empty($pwd_reg1) and !empty($Nombre_reg1) and !empty($Apellido_reg1) ;
  }
  return false;
}

function validate2() {
  if (isset($_POST['submit2'])) {

   // $username = $_POST['username'];
    $pwd_reg2 = validate_pwd($_POST['pwd_reg2']);
    $email_reg2 = validate_email($_POST['email_reg2']);
    $Nombre_reg2 =  validate_alpha($_POST['Nombre_reg2']);
    $Apellido_reg2 = validate_alpha($_POST['Apellido_reg2']);
  

    //$login_pwd = test_input($_POST['login_pwd']);
    return !empty($email_reg2) and !empty($pwd_reg2) and !empty($Nombre_reg2) and !empty($Apellido_reg2) ;
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
          	  <img src="images/bannerregistro.jpg">
           </div>           
        <div class="container banner-txt-area">
            <div class="zis-md-12">
                <h1 class="main-heading">REGISTRATE</h1>
                <div class="sub-heading"><span>Inicio</span><b>REGISTRATE</b></div>
            </div>
        </div>
     </div>
     <!--begin:inner-media-page-widget -->
     
     
    <div class="register-section">     	
     <h3>Elija el tipo de usauario para registrarse</h3>
            <div class="zis-md-4 zis-btn">
  <input id="myBtn" value="Como individual" class="reg-btn" type="submit">
    
            </div>
			<div class="zis-md-4 zis-btn">
  <input id="myBtn2" value="Como Negocio o Fundacion" class="reg-btn" type="submit">
    
            </div>
			  <div class="zis-md-4 zis-btn">
  <input id="myBtn3" value="Como egnte LEAN" class="reg-btn" type="submit">
    
            </div>
	
	</div>
	
	
	     <!--begin:Pop Up -->
     <?php 
     if (!validate()) {
      ?>
	 <div id="myModal" class="modal register-modal">
	 <div class="modal-content">
   <div class="modal-header">
  <!--<span class="close">&times;</span>-->
  <h5>Elija el tipo de usauario para registrarse</h5>
 
</div>

   <div class="register-body">
  <form id="login-form" method="POST">
                	
                    <div class="row">
                    	<div class="zis-md-6">
                        	<div class="form-group">
                              <label for="usr">Correo</label>
                              <input class="form-control pop-form-control" id="email_reg" name="email_reg" type="text" placeholder="Correo" required size="64" maxLength="64" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                              <p id="error_email_reg"></p>
                            </div>
                        </div>                        
                        <div class="zis-md-6">
                        	<div class="form-group">
                              <label for="usr">contrasaera</label>
                              <input class="form-control pop-form-control" id="pwd_reg" name="pwd_reg" type="password" required placeholder="Contraseña" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" >
                              <p id="error_pwd_reg"></p>
                            </div>
                        </div>  
						   	<div class="zis-md-6">
                        	<div class="form-group">
                              <label for="usr">Nombre</label>
                              <input class="form-control pop-form-control" id="Nombre_reg" name="Nombre_reg" type="text" placeholder="Tu Nombre" required maxlength="32" pattern=[A-Za-z ]+>
                              <p id="error_fname_reg"></p>
                            </div>
                        </div>                        
                        <div class="zis-md-6">
                        	<div class="form-group">
                              <label for="usr">Apellido</label>
                              <input class="form-control pop-form-control" id="Apellido_reg" name="Apellido_reg" type="text" required maxlength="32" pattern=[A-Za-z ]+ placeholder="Apellido">
                              <p id="error_lname_reg"></p>
                            </div>
                        </div>  
						    <div class="zis-md-12">
                        	<div class="form-group">
                              <label for="usr">dirección</label>
                              <input class="form-control pop-form-control" id="dirección" type="text" placeholder="dirección">
                              <p id="error_address"></p>
                            </div>
                        </div>  
						    <div class="zis-md-12">
                        	<div class="form-group">
                              <label for="usr">Ciulad</label>
                              <input class="form-control pop-form-control" id="Ciulad" type="text" placeholder="Ciulad">
                              <p id="error_city"></p>
                            </div>
                        </div>  
							    <div class="zis-md-8">
                        	<div class="form-group">
                              <label for="usr">Estado</label>
                      
							   <select class="form-control pop-form-control" id="estado_reg" type="text" placeholder="Estado">
              <option value="Select State">Select State</option>    
							<option value="Texas">Texas</option>
              <option value="Michigan">Michigan</option>
              <option value="Florida">Florida</option>
              <option value="Ohio">Ohio</option>
                             </select> 
                             <p id="error_state_reg"></p>
                            </div>
                        </div> 
							    <div class="zis-md-4">
                        	<div class="form-group">
                              <label for="usr">Código Postal</label>
                              <input class="form-control pop-form-control" id="postal" type="text" placeholder="Código Postal" pattern="[0-9]{5}" title="Five digit zip code">
                              <p id="error_postal"></p>
                            </div>
                        </div>             
                          <div class="zis-md-12">  <input value="Register" class="register-submit" name="submit" type="submit" onclick="myRegister()"></div>  
                    </div>
                </form>
    </div>
	 <div class="modal-footer form-footer">

   <input value="close" class="submit-data close single-close" type="submit">  
	
    </div>

   
  </div>
	 </div>

      <?php 
   } else {

    $email_reg = $_POST['email_reg'];
    $pwd_reg = $_POST['pwd_reg'];
    $Nombre_reg = $_POST['Nombre_reg'];
    $Apellido_reg = $_POST['Apellido_reg'];

   $sql = "INSERT INTO users (email, password, fname,lname,roleId) VALUES ('$email_reg', '$pwd_reg', '$Nombre_reg','$Apellido_reg',1)";

   if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}

?>
  <!--End:Pop Up -->
   <!--begin:Pop Up -->
     <?php 
     if (!validate2()) {
      ?>
	 <div id="myModal2" class="modal register-modal">
	 <div class="modal-content">
   <div class="modal-header">
  <!--<span class="close">&times;</span>-->
  <h5>Elija el tipo de usauario para registrarse</h5>
 
</div>
   <div class="register-body">
  <form id="login-form" method="POST">
                	
                    <div class="row">
                    	<div class="zis-md-6">
                          <div class="form-group">
                              <label for="usr">Correo</label>
                              <input class="form-control pop-form-control" id="email_reg2" name="email_reg2" type="text" placeholder="Correo" required size="64" maxLength="64" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                              <p id="error_email_reg2"></p>
                            </div>
                        </div>                        
                         <div class="zis-md-6">
                          <div class="form-group">
                              <label for="usr">contrasaera</label>
                              <input class="form-control pop-form-control" id="pwd_reg2" name="pwd_reg2" type="password" required placeholder="Contraseña" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" >
                              <p id="error_pwd_reg2"></p>
                            </div>
                        </div>  
						   	<div class="zis-md-6">
                          <div class="form-group">
                              <label for="usr">Nombre</label>
                              <input class="form-control pop-form-control" id="Nombre_reg2" name="Nombre_reg2" type="text" placeholder="Tu Nombre" required maxlength="32" pattern=[A-Za-z ]+>
                              <p id="error_fname_reg2"></p>
                            </div>
                        </div>                        
                        <div class="zis-md-6">
                          <div class="form-group">
                              <label for="usr">Apellido</label>
                              <input class="form-control pop-form-control" id="Apellido_reg2" name="Apellido_reg2" type="text" required maxlength="32" pattern=[A-Za-z ]+ placeholder="Apellido">
                              <p id="error_lname_reg2"></p>
                            </div>
                        </div>  
						   <div class="zis-md-12">
                          <div class="form-group">
                              <label for="usr">dirección</label>
                              <input class="form-control pop-form-control" id="dirección2" type="text" placeholder="dirección">
                              <p id="error_address2"></p>
                            </div>
                        </div>  
						     <div class="zis-md-12">
                          <div class="form-group">
                              <label for="usr">Ciulad</label>
                              <input class="form-control pop-form-control" id="Ciulad2" type="text" placeholder="Ciulad">
                              <p id="error_city2"></p>
                            </div>
                        </div>  
							    <div class="zis-md-8">
                          <div class="form-group">
                              <label for="usr">Estado</label>
                      
                 <select class="form-control pop-form-control" id="estado_reg2" type="text" placeholder="Estado">
              <option value="Select State">Select State</option>    
              <option value="Texas">Texas</option>
              <option value="Michigan">Michigan</option>
              <option value="Florida">Florida</option>
              <option value="Ohio">Ohio</option>
                             </select> 
                             <p id="error_state_reg2"></p>
                            </div>
                        </div> 
							    <div class="zis-md-4">
                          <div class="form-group">
                              <label for="usr">Código Postal</label>
                              <input class="form-control pop-form-control" id="postal2" type="text" placeholder="Código Postal" pattern="[0-9]{5}" title="Five digit zip code">
                              <p id="error_postal2"></p>
                            </div>
                        </div> 
						
                 <div class="zis-md-4">
                          <div class="form-group">
                           
                            <input type="radio" name="Tipo de negodo 1" value="Tipo de negodo 1" required> Tipo de negodo 1<br>
                            </div>
                                                    <p id="error_radio"></p>

                        </div> 
                  <div class="zis-md-4">
                          <div class="form-group">
                             <input type="radio" name="Tipo de negodo 1" value="Tipo de negodo 2"> Tipo de negodo 2<br>
                            </div>
                                                    <p id="error_radio"></p>

                        </div> 
              <div class="zis-md-4">
                          <div class="form-group">
                             <input type="radio" name="Tipo de negodo 1" value="Tipo de negodo 3"> Tipo de negodo 3<br>
                            </div>
                                                    <p id="error_radio"></p>

                        </div> 
                          <div class="zis-md-12">  <input value="Register" class="register-submit" type="submit" name="submit2" onclick="myRegister2()"></div>  


					
                    </div>
                </form>
    </div>
	 <div class="modal-footer form-footer">

   <input value="close" class="submit-data close2 single-close" type="submit">  
	
    </div>
   
  </div>
	 </div>

      <?php 
   } else {

    $email_reg2 = $_POST['email_reg2'];
    $pwd_reg2 = $_POST['pwd_reg2'];
    $Nombre_reg2 = $_POST['Nombre_reg2'];
    $Apellido_reg2 = $_POST['Apellido_reg2'];

   $sql = "INSERT INTO users (email, password, fname,lname,roleId) VALUES ('$email_reg2', '$pwd_reg2', '$Nombre_reg2','$Apellido_reg2',3)";

   if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}
?>

  <!--End:Pop Up -->
    <!--begin:Pop Up -->
     <?php 
     if (!validate1()) {
      ?>
    
	 <div id="myModal3" class="modal register-modal">
	 <div class="modal-content">
   <div class="modal-header">
  <!--<span class="close">&times;</span>-->
  <h5>Elija el tipo de usauario para registrarse</h5>
 
</div>
 
   <div class="register-body">
  <form id="login-form" method="POST">
                	
                    <div class="row">
                    	<div class="zis-md-6">
                        	<div class="form-group">
                              <label for="usr">Correo</label>
                              <input class="form-control pop-form-control" id="email_reg1" name="email_reg1" type="text" placeholder="Correo" required size="64" maxLength="64" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                              <p id="error_email_reg1"></p>
                            </div>
                        </div>                        
                        <div class="zis-md-6">
                        	<div class="form-group">
                              <label for="usr">contrasaera</label>
                              <input class="form-control pop-form-control" id="pwd_reg1" name="pwd_reg1" type="password" required placeholder="Contraseña" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                              <p id="error_pwd_reg1"></p>
                            </div>
                        </div>  
						   	<div class="zis-md-6">
                        	<div class="form-group">
                              <label for="usr">Nombre</label>
                              <input class="form-control pop-form-control" id="Nombre_reg1" name="Nombre_reg1" type="text" placeholder="Tu Nombre" required maxlength="32" pattern=[A-Za-z ]+>
                              <p id="error_fname_reg1"></p>
                            </div>
                        </div>                        
                        <div class="zis-md-6">
                        	<div class="form-group">
                              <label for="usr">Apellido</label>
                              <input class="form-control pop-form-control" id="Apellido_reg1" name="Apellido_reg1" type="text" required maxlength="32" pattern=[A-Za-z ]+>
                              <p id="error_lname_reg1"></p>
                            </div>
                        </div>  
                        <div class="zis-md-12">
                          <div class="form-group">
                              <label for="usr">dirección</label>
                              <input class="form-control pop-form-control" id="dirección1" type="text" placeholder="dirección">
                              <p id="error_address1"></p>
                            </div>
                        </div>  
						    <div class="zis-md-12">
                          <div class="form-group">
                              <label for="usr">Ciulad</label>
                              <input class="form-control pop-form-control" id="Ciulad1" type="text" placeholder="Ciulad">
                              <p id="error_city1"></p>
                            </div>
                        </div>  
							    <div class="zis-md-8">
                          <div class="form-group">
                              <label for="usr">Estado</label>
                 <select class="form-control pop-form-control" id="estado_reg1" type="text" placeholder="Estado">
              <option value="Select State">Select State</option>    
              <option value="Texas">Texas</option>
              <option value="Michigan">Michigan</option>
              <option value="Florida">Florida</option>
              <option value="Ohio">Ohio</option>
                             </select> 
                             <p id="error_state_reg1"></p>
                            </div>
                        </div> 
							    <div class="zis-md-4">
                          <div class="form-group">
                              <label for="usr">Código Postal</label>
                              <input class="form-control pop-form-control" id="postal1" type="text" placeholder="Código Postal" pattern="[0-9]{5}" title="Five digit zip code">
                              <p id="error_postal1"></p>
                            </div>
                        </div>              
                          <div class="zis-md-12"><input value="Register" class="register-submit" name="submit1" type="submit" onclick="myRegister1()"></div>  			
                    </div>
                </form>
    </div>
	 <div class="modal-footer form-footer">

   <input value="close" class="submit-data close3 single-close" type="submit">  
	
    </div>

    
  </div>
	 </div>

      <?php 
   } else {

    $email_reg1= $_POST['email_reg1'];
    $pwd_reg1= $_POST['pwd_reg1'];
    $Nombre_reg1= $_POST['Nombre_reg1'];
    $Apellido_reg1= $_POST['Apellido_reg1'];

   $sql = "INSERT INTO users (email, password, fname,lname,roleId) VALUES ('$email_reg1', '$pwd_reg1', '$Nombre_reg1','$Apellido_reg1',2)";


   if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}
?>
  <!--End:Pop Up -->
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

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<script>
// Get the modal
var modal2 = document.getElementById('myModal2');

// Get the button that opens the modal
var btn2 = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close2")[0];

// When the user clicks the button, open the modal 
btn2.onclick = function() {
  modal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal2.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}
</script>
<script>
// Get the modal
var modal3 = document.getElementById('myModal3');

// Get the button that opens the modal
var btn3 = document.getElementById("myBtn3");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close3")[0];

// When the user clicks the button, open the modal 
btn3.onclick = function() {
  modal3.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal3.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal3) {
    modal3.style.display = "none";
  }
}
</script>
  <script src="js/javascript.js"></script> 

</body>
</html>
