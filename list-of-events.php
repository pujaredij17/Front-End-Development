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


  $events = "SELECT * from events";
 //echo "$current_user";

  $result = $conn->query($events);


}

else{
  echo "no session";
}

?>

<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
  
  <title>Index</title>
  
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
      
      
   
	<!-- Container (list header) -->    
    

     <div id="list-header button-header-design-bd" class="container text-center">
           <div class="zis-md-1"></div>
            <div class="zis-md-10 heading">
            <h3>Lista de Eventos</h3>
            </div>
            <div class="row">            <div class="zis-md-8">						</div>						<div class="zis-md-4">			<button onclick="location.href='events.html'" class="btn" id="trash-main"><i class="fa fa"></i>Agrogar</button>			</div>			</div>
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
		<th>MODIFICAR</th>
		<th>ELIMINAR</th>
      </tr>
    </thead>
    <tr>
       <?php
      if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>

	  <td class="pl-0"><div class="custom-img-bannerlean1"><span><img src="images/bannerlean1.jpg"></span> <strong><?php echo $row["name"] ?></strong></div></td> 
      <td></td>
      <td><?php echo $row["address"] ?></td>
      <td><?php echo $row["event_date"] ?></td>
      <form method="POST">
	  <td><button class="btn"><i class="fa fa-pencil-square" aria-hidden="true"></i></button></td>
	  <td><button class="btn" name="trash" id="trash"><i class="fa fa-trash"></i></button></td>
  </form>
    </tr>
       <?php

               }
} else {
    //echo "0 results";
}
              ?>
   
  </table>      <!--begin:footer--><div class="pagination-widget">  <nav aria-label="Page navigation example">    <ul class="pagination">      <li class="page-item"> <a class="page-link" href="#" aria-label="Previous"> <span aria-hidden="true">&laquo;</span> <span class="sr-only">Previous</span> </a> </li>      <li class="page-item"><a class="page-link" href="#">1</a></li>      <li class="page-item"><a class="page-link" href="#">2</a></li>      <li class="page-item"><a class="page-link" href="#">3</a></li>      <li class="page-item"> <a class="page-link" href="#" aria-label="Next"> <span aria-hidden="true">&raquo;</span> <span class="sr-only">Next</span> </a> </li>    </ul>  </nav></div><!--begin:pagination-->
</div>
 <!-- end:table-list -->
	<!--begin:footer-->
	<footer>
    	<div class="container">
                <div class="copy-right">La asociación civil LEAN fue creada con el objetivo de ayudar, a través de acciones conc by <a href="#">zeroitsolution</a></div>
        </div>  
        
        <a href="#home" class="home-tag-ft"><i class="fas fa-arrow-up"></i></a>
          	
    </footer>
    <!--end:footer-->

    <?php

                if (isset($_POST['trash'])){

      $sql = "DELETE FROM `events` WHERE name='event one'";

    if ($conn->query($sql) === TRUE) {
       // echo "product Info Added Successfully";
      } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            echo "Unable to add contact information !!!";
          }

   }
 if (isset($_POST['trash1'])){

    $sql = "DELETE FROM `events` WHERE name='event two'";

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
 if (isset($_POST['trash2'])){

    $sql = "DELETE FROM `events` WHERE name='event three'";

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





<script>
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
