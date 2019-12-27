<?php

// Start the session
//session_start();

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

function validate_address($data) {
    $data = test_input($data);
    $data = (preg_match("/^[a-zA-Z0-9\s,'-]*$/",$data)) ? $data : "";
    return $data;
}

function validate_date($data) {
    $data = test_input($data);
    $data = (preg_match("/(0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])[- \/.](19|20)\d\d/",$data)) ? $data : "";
    return $data;
}

function validate_time($data) {
    $data = test_input($data);
    $data = (preg_match("/^(0[0-9]|1[0-9]|2[0-3]|[0-9]):[0-5][0-9]$/",$data)) ? $data : "";
    return $data;
}

function validate_price($data) {
    $data = test_input($data);
    $data = (preg_match("/^[0-9]+.[0-9]+$/",$data)) ? $data : "";
    return $data;
}


function validate() {
  if (isset($_POST['submit'])) {

   // $username = $_POST['username'];
    $nombre = validate_alpha($_POST['nombre']);
    $respo = validate_alpha($_POST['respo']);
    $lugar = validate_address($_POST['lugar']);
    $fetcha = validate_date($_POST['fetcha']);
    $hora = validate_time($_POST['hora']);
    $valor = validate_price($_POST['valor']);


    //$login_pwd = test_input($_POST['login_pwd']);
    return !empty($nombre) and !empty($respo) and !empty($lugar) and !empty($fetcha) and !empty($hora) and !empty($valor);
  }
  return false;
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
  
  <title>Events</title>
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
                <h1 class="main-heading">Registro De Evento</h1>
                <div class="sub-heading"><span>INICIO</span><b>Registro</b></div>
            </div>
        </div>
     </div>
	 <!--begin:inner-media-page-widget -->
    
    





<?php
  if (!validate()) {
      ?>
	 <!--begin:profile contact-form -section -->

<div class="container">
    <section class="profile-contact-form-section">
        <div class="inner-section-address-info">
                          <form id="login-form" method="POST">

            <div class="row">
                <div class="zis-md-12">
                    <h1 class="entrytitle-header1">Registro De Evento</h1>
                </div>
            </div>
            <div class="row">
                <div class="zis-md-8">
                    <div class="form-group">
                        <label for="usr">Nombres</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del Evento" required>
                        <p id="error_nombre"></p>
                    </div>

                    <div class="form-group">
                        <label for="usr">Responsable</label>
                        <input type="text" class="form-control" id="respo" name="respo" placeholder="Nombre del Responsable" required>
                         <p id="error_respo"></p>
                    </div>
                </div>

                <div class="zis-md-4">
                    <div class="logo-su">
                        <img src="images/imagensubir.png">
                         <form action="/action_page.php" method="POST">
                        <input class="sub-btn-click-bd" type="file" name="upload" id="upload" value="Select logo" required>
                      </form>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="zis-md-12">
                    <div class="form-group">
                        <label for="usr">Lugar</label>
                        <input type="text" class="form-control" id="lugar" name="lugar" placeholder="Direccion del Lugar del Eventos" required >
                        <p id="error_lugar"></p>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="zis-md-4">
                    <div class="form-group">
                        <label for="usr">Fetcha</label>
                        <input type="text" class="form-control" id="fetcha" name="fetcha" placeholder="00/00/0000" required >
                        <p id="error_fetcha"></p>
                    </div>

                </div>
                <div class="zis-md-4">
                    <div class="form-group">
                        <label for="usr">Hora</label>
                        <input type="text" class="form-control" id="hora" name="hora" placeholder="00:00" required>
                        <p id="error_hora"></p>
                    </div>

                </div>
                <div class="zis-md-4">
                    <div class="form-group">
                        <label for="usr">Valor de Boleto</label>
                        <input type="text" class="form-control" id="valor" name="valor" placeholder="$000.00" required>
                        <p id="error_valor"></p>
                    </div>

                </div>

            </div>

            <div class="row">
                <div class="zis-md-12">
                    <div class="note-info">
                      <div class="button-center-01">
                          <input class="sub-btn-click-bd" type="submit" name="submit" value="Subcribe" onclick="myEvent()">
                        </div>
                    </div>
                </div>
            </div>
          </form>
        </div>
    </section>
</div>

	 <!--begin:profile contact-form -section -->
	
	 <?php 
   } else {

    
    $nombre = $_POST['nombre'];
    $respo = $_POST['respo'];
    $lugar = $_POST['lugar'];
    $fetcha = $_POST['fetcha'];
    $hora = $_POST['hora'];
    $valor = $_POST['valor'];

  //  $sql = "SELECT * FROM eve WHERE email = '$username' OR username = '$username' AND password = '$login_pwd'";
    $sql = "INSERT INTO events(name, responsible, address, event_date, event_time, price) VALUES ('$nombre', '$respo', '$lugar', '$fetcha', '$hora', '$valor')";

    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

$conn->close();
   }
   ?>
	
	

	<!--begin:footer-->
	<footer>
    	<div class="container">
        	
                <div class="copy-right">La asociación civil LEAN fue creada con el objetivo de ayudar, a través de acciones conc by <a href="#">zeroitsolution</a></div>
        </div>  
        
        <a href="#scroller-bottom-top" class="home-tag-ft"><i class="fas fa-arrow-up"></i></a>
          	
    </footer>
    <!--end:footer-->

  <script src="js/jscript.js"></script> 
 
</body>
</html>
