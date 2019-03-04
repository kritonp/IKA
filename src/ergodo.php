<!DOCTYPE html>
<html lang="en">
<head>
  <title>Εργοδότης | ΙΚΑ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="../images/favi.ico"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/Footer-with-social-icons.css">
  <style>
    #myBtn {
        display: none;
        position: fixed;
        bottom: 80px;
        right: 30px;
        z-index: 99;
        border: none;
        outline: none;
        background-color: #417da8;
        color: white;
        cursor: pointer;
        padding: 15px;
        border-radius: 10px;
      }
  </style>
</head>
<body>
        <?php
        session_start();
    ?>
<nav class="navbar navbar-inverse " style="background-color: #417da8;">
  <div class="container-fluid">
    <nav class="navbar-brand" style="padding:12px;">
        <a href="./index.php"><img src="../images/ikk.jpeg" width="70" height="50" class="img-thumbnail align-top" alt="ika logo"/></a>
    </nav>
    <ul class="nav navbar-nav">

      <li><a href="./index.php">Αρχική</a></li>
      <li><a href="./construction.php">Ηλεκτρονικές Υπηρεσίες</a></li>
      <li><a href="./news.php">Ανακοινωσεις</a></li>
      <li><a href="./contact.php">Επικοινωνία</a></li>
      
    </ul>


  
    <?php
	if( isset($_SESSION['usr']) ){
		$name = $_SESSION['usr'];
		echo '
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Συνδεδεμένος <span class="caret"></span></a>
                <ul class="dropdown-menu" >
                    <li><a href="./profil.php"><font color="black">Επεξεργασία Προφίλ</font></a></li>
                    <li><a href="./construction.php"><font color="black">Πολιτικές Απορρήτου</font></a></li>
                    <li><a href="../php/logout.php"><font color="black">Αποσύνδεση</font></a></li>
                </ul>
            </li>
        </ul>
';
	}
	else{
		echo '
<ul class="nav navbar-nav navbar-right">
    <li><a href="./signup.php"><span class="glyphicon glyphicon-user"></span> Εγγραφή</a></li>
    <li><a href="./login.php"><span class="glyphicon glyphicon-log-in"></span> Είσοδος</a></li>
</ul>
';
	}
?>
    
    <form class="navbar-form navbar-right" action="construction.php" style="padding: 4px;">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Αναζήτηση" name="search">
          <div class="input-group-btn">
            <button class="btn btn-default"  type="submit">
              <i class="glyphicon glyphicon-search"></i>
            </button>
          </div>
        </div>
      </form>
  </div>
</nav>

<div class="service-section"> 
    <div class="container">
        <!-- BREADCRUM -->
        <nav class="breadcrumb">
                <a class="breadcrumb-item" href="index.php">Αρχική Σελίδα</a> >
                <span class="breadcrumb-item active">Εργοδότης</span>
        </nav>
		
		
		
		<div class="col-md-4 botmargin">
			<span class="glyphicon glyphicon-user icon"></span>
			<?php
				if( isset($_SESSION['usr']) ){
					if ( $_SESSION['kathgoria_eggrafhs'] == 'Εγοδότης' )
					{
						echo '
							<h4><a href="./forma-asfalisis.php">Ασφάλιση Εργαζομένου</a></h4>
							';
					}
					else{
						echo '
							<h4><a onclick="return check()">Ασφάλιση Εργαζομένου</a></h4>
							';
					}
				}
				else{
					echo '
						<h4><a onclick="return check()">Ασφάλιση Εργαζομένου</a></h4>
					';
				}
			?>
			<p>Ασφαλήστε ηλεκτρονικά τον εργαζόμενο σας.</p>
		</div>



        <div class="col-md-4 botmargin">
            <span class="glyphicon glyphicon-list-alt icon"></span>
			<?php
				if( isset($_SESSION['usr']) ){
					if ( $_SESSION['kathgoria_eggrafhs'] == 'Εγοδότης' )
					{
						echo '
							<h4><a href="./calculator_ensima.php">Υπολογισμός Πλήθους Ενσήμων
                            .</a></h4>
							';
					}
					else{
						echo '
							<h4><a onclick="return check()">Υπολογισμός Πλήθους Ενσήμων
                            .</a></h4>
							';
					}
				}
				else{
					echo '
						<h4><a onclick="return check()">Υπολογισμός Πλήθους Ενσήμων
                        .</a></h4>
					';
				}

			?>
            <p>Βρείτε πόσα ένσημα χρειάζεστε για να ασφαλίσεται έναν υπάλληλο.</p>
        </div>


        <div class="col-md-4 botmargin">
            <span class="glyphicon glyphicon-folder-open icon"></span>
            <h4><a href="construction.php">Οικονομική Καρτέλα Εργοδότη</a></h4>
            <p>Οι πιστοποιημένοι εργοδότες έχουν την δυνατότητα να αντλήσουν οικονομικά στοιχεία που αφορούν στις κινήσεις (χρέωση - πίστωση) για το αιτούμενο χρονικό διάστημα.</p>
        </div>
        <div class="col-md-4 botmargin">
            <span class="glyphicon glyphicon-tasks icon"></span>
            <h4><a href="construction.php">Βεβαίωση Ασφαλιστικής Ενημερότητας</a></h4>
            <p>Παρεχόμενες ηλεκτρονικές υπηρεσίες για την έκδοση ασφαλιστικής ενημερώτητας.</p>
        </div>        
        <div class="col-md-4 botmargin">
            <span class="glyphicon glyphicon-open icon"></span>
            <h4><a href="construction.php">Ηλεκτρονική Υποβολή Α.Π.Δ.</a></h4>
            <p>Πραγματοποιήστε ηλεκτρονική υποβολή των
            Αναλυτικών Περιοδικών Δηλώσεων(Α.Π.Δ.).</p>
        </div>
        <div class="col-md-4 botmargin">
            <span class="glyphicon glyphicon-save icon"></span>
            <h4><a href="construction.php">Ηλεκτρονική Έκδοση Ατομικού Λογαριασμού Ασφάλισης</a></h4>
            <p>"Αποσπάσματα Ατομικού Λογαριασμού Ασφάλισης" για τα απασχολούμενα στον εργοδότη πρόσωπα και την παράδοση σε αυτά για την ενημέρωσή τους. </p>
        </div>

    <button onclick="topFunction()" id="myBtn" title="Go to top"><span class="glyphicon glyphicon-triangle-top"></span></button>
		<!--   Popup parthuro  -->
		<script type='text/javascript'>
  		function check()
  		{
  			alert('Δεν επιτρέπεται η προσβαση!');
  		}
      //Top Button
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {scrollFunction()};
      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }
      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
      //Top Button
    </script>


        <div class="clearfix"> </div>
    </div>
</div>
<!-- After tools -->
<div class="foot"  style="margin-top:23%">    
    <div class="container">
      <p class="navbar-text pull-left">
          <a href="./construction.php"><img src="../images/gr.ico" width="30" height="30"/></a>
          <a href="./construction.php"><img src="../images/uk.png" width="30" height="30"/></a>
          
          <a href="./sitemap.php"  style="margin-left:20px; margin-right:12px; ">Χάρτης Ιστοτόπου</a>
          <a href="./help.php"  style=" margin-right:12px " >Βοήθεια</a>     
      </p>
      <p class="navbar pull-right">
            <a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook-square fa-3x social"></i></a>
            <a href="https://www.twitter.com"  target="_blank"><i class="fa fa-twitter-square fa-3x social"></i></a>
            <a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus-square fa-3x social"></i></a>
            <a href="mailto:#"><i class="fa fa-envelope-square fa-3x social"></i></a>          
       </p>   
</div>
</body>
</html>
