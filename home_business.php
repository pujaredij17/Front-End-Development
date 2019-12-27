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

}

else{
  echo "no session";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Index</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link href="css/custom-grid.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/custom-js.js"></script>  
  <link type="text/css" href="css/leanevent.css" rel="stylesheet" />  <link type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> 
</head>


<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

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
                       <li><a href="home_individual.php">Inicio</a></li>
                       <li><a href="profile-business.php">Fundacion</a></li>
                  </ul>
                </div>
              </div>
          </nav>
      </header>   
      <!--end:header -->
      
      
   
	<!-- Container (list header) -->    
    

     <div id="list-header button-header-design-bd" class="container text-center">
           <div class="zis-md-1"></div>
            <div class="zis-md-10 heading">
            <h3>Lista de Eventos</h3>
            </div>
            <div class="row">            <div class="zis-md-8">					
            	</div>					
            	<div class="zis-md-4">			

            			</div>			
                </div>
     </div>
     <!-- end:list-header -->
	  <!-- begin:table-list -->
	<div class="container text-center  details_table_design_01_bd">


  <table align="center">
	
    <thead>
      <tr class="w3-red">
		<th style="text-align: center;"> <span class="title-details-142">DETAILS DEL EVENTOS</span></th>
        <th></th>
        <th>LUGAR</th>
        <th>FECHA</th>
		<th>HORA</th>
		<th>ASISTENCIA</th>
      </tr>
    </thead>
    <tr>
	  <td class="pl-0"><div class="custom-img-bannerlean1"><span><img src="images/bannerlean1.jpg"></span> <strong>Jill</strong></div></td> 
      <td></td>
      <td>Smith</td>
      <td>50</td>
	  <!--td><button class="btn"><i class="fa fa-pencil-square" aria-hidden="true"></i></button></td-->
        <td>8 AM</td>
	  <!--td><button class="btn" id="trash"><i class="fa fa-trash"></i></button></td-->
               <form method="POST">
                <td class="gray-color"><a href="#" class="assig-link" id="myBtn"><input type="submit"  name="confirm" value="Confirmer" style="background: #ffc300;color: #fff;padding: 9px 15px;border-radius: 50px;font-size: 11px;"></a></td>
              </form>

    </tr>
    <tr>
	  <td class="pl-0"><div class="custom-img-bannerlean1"><span><img src="images/bannerlean2.jpg"></span> <strong>Eve</strong></div></div></td>
      <td></td>
      <td>Jackson</td>
      <td>94</td>
        <td>8 AM</td>
                <form method="POST">
                <td class="gray-color"><a href="#" class="assig-link" id="myBtn1"><input type="submit"  name="confirm1" value="Confirmer" style="background: #ffc300;color: #fff;padding: 9px 15px;border-radius: 50px;font-size: 11px;"></a></td>
              </form>
    </tr>
    <tr>
	  <td class="pl-0"> <div class="custom-img-bannerlean1"><span><img src="images/bannerlean3.jpg"></span> <strong>Adam</strong></div></td>
      <td></td>
      <td>Johnson</td>
      <td>67</td>
        <td>8 AM</td>
                 <form method="POST">
                <td class="gray-color"><a href="#" class="assig-link" id="myBtn2"><input type="submit"  name="confirm2" value="Confirmer" style="background: #ffc300;color: #fff;padding: 9px 15px;border-radius: 50px;font-size: 11px;"></a></td>
              </form>
    </tr>
  </table>   

 <!--begin:Second Pop Up -->
    
   <!--center>  <button id="myBtn" class="submit-data">Submit</button> </center-->  
   <div id="myModal" class="modal">
   <div class="modal-content">
<div class="popup-header">
  <!--<span class="close">&times;</span>-->
  <h2>Bienvenido</h2>
 
</div>
   <div class="popup-body">
  <h3>Escasez de medicinas</h3>
    </div>
   <div class="modal-footer form-footer">

   <input value="close" class="submit-data close single-close" type="submit">  
  
    </div>
   
  </div>
   </div>
  <!--End:Second Pop Up -->



     <!--begin:footer--><div class="pagination-widget">  <nav aria-label="Page navigation example">    <ul class="pagination">      <li class="page-item"> <a class="page-link" href="#" aria-label="Previous"> <span aria-hidden="true">&laquo;</span> <span class="sr-only">Previous</span> </a> </li>      <li class="page-item"><a class="page-link" href="#">1</a></li>      <li class="page-item"><a class="page-link" href="#">2</a></li>      <li class="page-item"><a class="page-link" href="#">3</a></li>      <li class="page-item"> <a class="page-link" href="#" aria-label="Next"> <span aria-hidden="true">&raquo;</span> <span class="sr-only">Next</span> </a> </li>    </ul>  </nav></div><!--begin:pagination-->
</div>
 <!-- end:table-list -->
 <?php

                if (isset($_POST['confirm'])){

      $sql = "INSERT INTO `event_business` (`event_name`, `user_name`) VALUES ('Event1', '$current_user')";

    if ($conn->query($sql) === TRUE) {
        //echo "product Info Added Successfully";
      } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            echo "Unable to add contact information !!!";
          }

}
else{
   //echo "lol";
}
 if (isset($_POST['confirm1'])){

      $sql = "INSERT INTO `event_business` (`event_name`, `user_name`) VALUES ('Event2', '$current_user')";

    if ($conn->query($sql) === TRUE) {
       // echo "product Info Added Successfully";
      } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            echo "Unable to add contact information !!!";
          }

}
else{
   //echo "lol";
}
 if (isset($_POST['confirm2'])){

      $sql = "INSERT INTO `event_business` (`event_name`, `user_name`) VALUES ('Event3', '$current_user')";

    if ($conn->query($sql) === TRUE) {
       // echo "product Info Added Successfully";
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
                <div class="copy-right">La asociación civil LEAN fue creada con el objetivo de ayudar, a través de acciones conc by <a href="#">zeroitsolution</a></div>
        </div>  
        
        <a href="#home" class="home-tag-ft"><i class="fas fa-arrow-up"></i></a>
          	
    </footer>
    <!--end:footer-->





<script>

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

//for btn2

var modal1 = document.getElementById('myModal');

// Get the button that opens the modal
var btn1 = document.getElementById("myBtn1");


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn1.onclick = function() {
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


//for btn3

var modal2 = document.getElementById('myModal');

// Get the button that opens the modal
var btn2 = document.getElementById("myBtn2");


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn2.onclick = function() {
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









$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>
