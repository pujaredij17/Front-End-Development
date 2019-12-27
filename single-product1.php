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
 //echo "Your session is running " . $_SESSION['username'];

  $current_user = $_SESSION['username'];
 //echo "$current_user";
}

  //$sql = "SELECT * FROM users WHERE email='$current_user' OR username =  '$current_user'";
   $sql = "SELECT * FROM product WHERE id='1'";
   $result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["password"]. "<br>";

      $image = $row["image"];
      $price = $row["price"];
      $description = $row["description1"];
     
    }
} else {
    //echo "0 results";
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <title>Product</title>
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
            <img src="images/banner-inner-page.png">
        </div>
        <div class="container banner-txt-area">
            <div class="zis-md-12">
                <h1 class="main-heading"> COMPRAR BOLETOS</h1>
                <div class="sub-heading"><span>Inicio</span><b>Comprar Boletos</b></div>
            </div>
        </div>
    </div>
    <!--begin:inner-media-page-widget -->

    <!--Section Part Start Product -->

    <div class="container">

        <div class="custom-container-148">
        <div class="row">

            <div class="zis-md-4">

                <div class="productinner-wrp">

                    <?php
                     echo '<img src="data:image/jpeg;base64,'.base64_encode( $image ).'"/>';
                    ?>

					<span class="sale-view-item">Sale</span>
                </div>

            </div>
			
		    <div class="zis-md-8">

                    <div class="producttext-wrp">


                        <h1 name="product_name">NO PERDAMOS LA FE</h1>

                    
                            <div class="textdoller-ft">
							
							 <div class="row">	

								<div class="zis-md-3">		
										<h6><?php echo $price;?></h6>								
								</div>
								
								<div class="zis-md-9">		
									
                            <div class="textrating-rt">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i> (74 Rating)

                          
                        </div>							
								</div>
							</div>
								
				     	
								

                                <p><?php echo $description;?></p>
                          <h5>Puedes ayudar</h5>

                                <form method="POST">
  <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
  <input type="number" name="quantity" id="cart_number" value="0" readonly />
  <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>

                                <br>

                              

                                <div class="Comprar-btn-click-id-146" >
                                    <input type="submit" value="Comprar" i class="fa fa-shopping-cart" name="cart" aria-hidden="true"> </i>
                                </div>
                                </form>

                            </div>

                   

                       

                    </div>
                </div>
			
			




        </div>
        </div>
    </div>

    <section id="oppestionft-wrp">
  <div class="container">
        <div class="inner-container-id-150">
      
            <div class="row">
                <div class="zis-md-12">
                    <div class="tab" role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">consectetur</a></li>
                            <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">Donsectetur</a></li>
                            <li role="presentation"><a href="#Section3" aria-controls="messages" role="tab" data-toggle="tab">Eonsectetur</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content tabs">
                            <div role="tabpanel" class="tab-pane fade in active" id="Section1">

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor. Proin accumsan felis ac felis dapibus, non iaculis mi varius Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor. Proin accumsan felis ac felis dapibus, non iaculis mi varius.</p>
								
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor. </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Section2">

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor. Proin accumsan felis ac felis dapibus, non iaculis mi varius Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor. Proin accumsan felis ac felis dapibus, non iaculis mi varius.</p>
								
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor. </p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Section3">

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor. Proin accumsan felis ac felis dapibus, non iaculis mi varius Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor. Proin accumsan felis ac felis dapibus, non iaculis mi varius.</p>
								
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </section>

    <!--Section part end -->
    <br>
    <br>
    <br>

    <!-- begin:suscribe-widget -->
    <div class="suscribe-widget">
                    <div class="container">
                        <div class="zis-md-1"></div>
                        <div class="zis-md-5">
                            <div class="heading">Registrese para recibir un boletín</div>
                        </div>
                        <div class="zis-md-5">
                            <form class="form-field">
                                <input type="text" placeholder ="Escasez de medicinas">
                                <input type="submit" value="Subcribir">
                            </form>
                        </div>
                        <div class="zis-md-1"></div>
                    </div>
                </div>
                <!-- end:suscribe-widget -->

                <?php

                if (isset($_POST['cart'])){

  //$product_name = $_POST['product_name'];
    $quantity = $_POST['quantity'];

   //echo "$product_name";
    //echo "$quantity";
    //echo "$current_user";

     $sql = "INSERT INTO `user_cart` (`name`, `product_name`, `quantity`,`price`) VALUES ('$current_user', 'NO PERDAMOS LA FE', '$quantity','300*($quantity)')";

    if ($conn->query($sql) === TRUE) {
        echo "product Info Added Successfully";
      } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            echo "Unable to add contact information !!!";
          }

}
else{
   //echo "lol";
}
$conn->close();

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

                    <a href="#scroller-bottom-top" class="home-tag-ft"><i class="fas fa-arrow-up"></i></a>

                </footer>
    <!--end:footer-->
    <script src="js/javascript.js"></script>

</body>

</html>