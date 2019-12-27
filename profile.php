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

if(isset($_SESSION['username'])) {
 // echo "Your session is running " . $_SESSION['username'];

  $current_user = $_SESSION['username'];
 //echo "$current_user";

  $sql = "SELECT * FROM users WHERE email='$current_user' OR username =  '$current_user'";
  $result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["password"]. "<br>";

      $fname = $row["fname"];
      $lname = $row["lname"];
      $email = $row["email"];
      $password = $row["password"];
      $username = $row["username"];

       // echo "id: " . $password. "<br>";
    }
} else {
    //echo "0 results";
}
$conn->close();
}

?>


<!DOCTYPE html>
<html lang="es">
<head>
  
  <title>Profile Business</title>
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
                         <li><a href="home_agent.php">Inicio</a></li>
                        <li><a href="list-individual.html">Lista de Voluntarios</a></li>
                        <li><a href="list-business.html">Lista de Fundaciones</a></li>
                        <li><a href="list-of-events.php">Eventos</a></li>
                        <li><a href="profile-business.php">Agente</a></li>
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
                <h1 class="main-heading">Profile</h1>
                <div class="sub-heading"><span>Inicio</span><b>Profile</b></div>
            </div>
        </div>
     </div>
   <!--begin:inner-media-page-widget -->
    
    

   <!--begin:address-section -->

    <div class="container">
      <section class="address-section">
      <div class="inner-section-address-info">
      <div class="row">
      <div class="zis-md-12">
      <h1>Tu Information del profile</h1>
      </div>    
      <div class="zis-md-4">
      <ul>
        <li><i class="fa fa-book" aria-hidden="true"></i> Lorem Ipsum is simply dummy </li>
        <li><i class="fa fa-book" aria-hidden="true"></i> Lorem Ipsum is simply dummy </li>
        <li><i class="fa fa-user" aria-hidden="true"></i> Lorem Ipsum is simply dummy </li>
      </ul>
      </div>
      
      <div class="zis-md-4">
        <ul>
        <li><img src="./images/loc-icon.png"> Lorem Ipsum is simply dummy </li>
        <li><i class="fa fa-phone" aria-hidden="true"></i> + 8818 8828 88</li>
        <li><img src="./images/send-icon.png"> demo@gmail.com</li>
      </ul>
      </div>
      <div class="zis-md-4">
      <div class="logo-su"><img src="images/nologo.png"></div>
      </div>
      
      </section>
      </div>
    </div>
    </div>
  
  <!--begin:address-section -->




   <!--begin:profile contact-form -section -->
<div class="container">
    <section class="profile-contact-form-section">
        <div class="inner-section-address-info">
            <div class="row">
                <div class="zis-md-12">
                    <h1 class="entrytitle-header1">Estar en contact</h1>
                </div>
            </div>
            <div class="row">
                <div class="zis-md-8">
                    <div class="form-group">
                        <label for="usr">Nombre</label>
                        <input type="text" class="form-control" id="usr" placeholder="Escasez de medicinas" value="<?php echo $fname;?>" required maxlength="32" pattern=[A-Za-z ]+>
                                                      <p id="error_usr"></p>

                    </div>

                    <div class="form-group">
                        <label for="usr">Apellido</label>
                        <input type="text" class="form-control" id="lname" placeholder="Escasez de medicinas" value="<?php echo $lname;?>" required maxlength="32" pattern=[A-Za-z ]+>
                                                      <p id="error_lname"></p>

                    </div>
                </div>

                <div class="zis-md-4">
                    <div class="logo-su">
                        <img src="images/user.png">
                        <input class="sub-btn-click-bd" type="submit" value="Select logo">

                    </div>

                </div>
            </div>

            <div class="row">
                <div class="zis-md-12">
                    <div class="form-group">
                        <label for="usr">Correo</label>
                        <input type="text" class="form-control" id="email" placeholder="Escasez de medicinas" value="<?php echo $email;?>" required size="64" maxLength="64" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                                                      <p id="error_email"></p>

                    </div>

                </div>
            </div>

            <div class="row">
                <div class="zis-md-4">
                    <div class="form-group">
                        <label for="usr">Telefono</label>
                        <input type="tel" class="form-control" id="Telefono" placeholder="Escasez de medicinas" title='Phone Number (Format: +99(99)9999-9999)'>
                        <p id="error_phone"></p>

                    </div>

                </div>
                <div class="zis-md-4">
                    <div class="form-group">
                        <label for="usr">Nombre de Usuario</label>
                        <input type="text" class="form-control" id="username" placeholder="Escasez de medicinas" value="<?php echo $username;?>" required pattern="[A-Za-z]{1,15}+ | [a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                                                      <p id="error_username"></p>

                    </div>

                </div>
                <div class="zis-md-4">
                    <div class="form-group">
                        <label for="usr">Contraseña</label>
                        <input type="password" class="form-control" id="login_pwd" placeholder="Escasez de medicinas" value="<?php echo $password;?>" required placeholder="Contraseña" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                         <p id="error_pwd"></p>
                    </div>

                </div>

            </div>

            <div class="row">
                <div class="zis-md-12">
                    <div class="note-info">

                        <span class="nots-design">Note:</span>
                        <p>Lorem Ipsum is simply dummy Ipsum is simply dummy</p>

                        <div class="button-center-01"><input class="sub-btn-click-bd" type="submit" value="Subcribe" onclick="myProfile()"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

   <!--begin:profile contact-form -section -->
  
  
  
  

  <!--begin:footer-->
  <footer>
      <div class="container">
          
                <div class="copy-right">La asociación civil LEAN fue creada con el objetivo de ayudar, a través de acciones conc by <a href="#">zeroitsolution</a></div>
        </div>  
        
        <a href="#scroller-bottom-top" class="home-tag-ft"><i class="fas fa-arrow-up"></i></a>
            
    </footer>
    <!--end:footer-->

  <script src="js/javascript.js"></script> 

</body>
</html>
