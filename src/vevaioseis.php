<!DOCTYPE html>
<html lang="en">
<head>
  <title>Βεβαιώσεις | ΙΚΑ</title>
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
            <li><a href="./news.php">Ανακοινώσεις</a></li>
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
          
          <form class="navbar-form navbar-right" action="construction.php" style="padding:4px;">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Αναζήτηση" name="search">
                <div class="input-group-btn">
                  <button class="btn btn-default" type="submit">
                    <i class="glyphicon glyphicon-search"></i>
                  </button>
                </div>
              </div>
            </form>
        </div>
      </nav>


<!--     #####################################################                      -->
<div class="center" style='margin-top: 0; '><h3 style='position: relative; left:90px; margin-bottom: 10px; '></h3></div>
<hr style="border-width: 2px 2px 0; border-style: none; border-color: rgb(131, 112, 216); width: 100%; margin-left: auto; margin-right: auto;"/>
<section id="news"><br>
<div class="container-fluid" style='margin-top: -20px; '>
<div class="row">
<div class=" col-sm-0"></div>
	<div class="col-md-8 col-sm-8 col-lg-8 col-sm-offset-1">
            <nav class="breadcrumb">
                    <a class="breadcrumb-item" href="index.php">Αρχική Σελίδα</a> >
                    <span class="breadcrumb-item active">Βεβαιώσεις</span>
            </nav>
	 <div class="panel-group" id="accordion">
    <h4>Δημοφιλή</h4>
	  <div class="panel panel-default">
		<div class="panel-heading">
		  <h4 class="panel-title">
			<a data-toggle="collapse" data-parent="#accordion" href="#collapse10">
                Βεβαίωση Αποδοχών <i class="more-less glyphicon glyphicon-plus"></i></a>
		  </h4>
		</div>
		<div id="collapse10" class="panel-collapse collapse">
		  <div class="panel-body">
        <div class="col-xs-6 text-left" style=" "> <a href="../files/apodoxes.pdf"  target="_blank"><span class="glyphicon glyphicon-file" aria-hidden="true"></span> Βεβαιωση Αποδοχων </a> </div>
        <div class="col-xs-3" style="">Τελευταία Τροποποίηση 01/12/2015</div>
		</div>
		</div>
	  </div>
	  <div class="panel panel-default">
		<div class="panel-heading">
		  <h4 class="panel-title">
			<a data-toggle="collapse" data-parent="#accordion" href="#collapse9">Βεβαίωση Ασφαλιστικής Ενημερότητας <i class="more-less glyphicon glyphicon-plus"></i></a>
		  </h4>
		</div>
		<div id="collapse9" class="panel-collapse collapse">
		  <div class="panel-body">
        <div class="col-xs-6 text-left" style=" "> <a href="../files/apodoxes.pdf"  target="_blank"><span class="glyphicon glyphicon-file" aria-hidden="true"></span> Βεβαίωση Ασφαλιστικής Ενημερότητας </a> </div>
        <div class="col-xs-3" style="">Τελευταία Τροποποίηση 01/12/2015</div>
  
      </div>

		</div>
	  </div>
	  <div class="panel panel-default">
		<div class="panel-heading">
		  <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse8"> Έντυπο Α.Π.Δ.<i class="more-less glyphicon glyphicon-plus"></i></a>		  </h4>
		</div>
		<div id="collapse8" class="panel-collapse collapse">
		<div class="panel-body">
      <div class="col-xs-6 text-left" style=" "> <a href="../files/apodoxes.pdf"  target="_blank"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>  Έντυπο Α.Π.Δ.</a> </div>
      <div class="col-xs-3" style="">Τελευταία Τροποποίηση 01/12/2015</div>
    </div>
		</div>
    </div>
    <br>
	
	
	<?php
				if( isset($_SESSION['usr']) ){
					if ( $_SESSION['kathgoria_eggrafhs'] == 'Εγοδότης' )
					{
						echo '
							<br>
							<h4>Για τον Εργοδότη</h4>
							<div class="panel panel-default">
							<div class="panel-heading">
							  <h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
								Βεβαίωση Ασφάλισης Υπαλλήλου <i class="more-less glyphicon glyphicon-plus"></i></a>
							  </h4>
							</div>
							<div id="collapse6" class="panel-collapse collapse">
							  <div class="panel-body">
                <div class="col-xs-6 text-left" style=" "> <a href="./forma-asfalisis.php" ><span class="glyphicon glyphicon-file" aria-hidden="true"></span> Βεβαίωση Ασφάλισης </a> </div>
							</div>
						  </div>
						';
					}
				}
	?>
	
	
	<?php
				if( isset($_SESSION['usr']) ){
					if ( $_SESSION['kathgoria_eggrafhs'] == 'Ασφαλισμένος' )
					{
						echo '
							<br>
							<h4>Για τον Ασφαλισμένο</h4>
							<div class="panel panel-default">
							<div class="panel-heading">
							  <h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
								Αίτηση Συνταξιοδότησης <i class="more-less glyphicon glyphicon-plus"></i></a>
							  </h4>
							</div>
							<div id="collapse6" class="panel-collapse collapse">
							  <div class="panel-body">
                   <div class="panel-body">
                   <div class="col-xs-6 text-left" style=" "> <a href="./forma.php" ><span class="glyphicon glyphicon-file" aria-hidden="true"></span> Αίτηση Συνταξιοδότησης </a> </div>
							</div>
						  </div>
						';
					}
				}
	?>
	
	
	
	<?php
				if( isset($_SESSION['usr']) ){
					if ( $_SESSION['kathgoria_eggrafhs'] == 'Συνταξιούχος' )
					{
						echo '
							<br>
							<h4>Για τον Συνταξιούχο</h4>
							<div class="panel panel-default">
							<div class="panel-heading">
							  <h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
								Βεβαίωση Σύνταξης <i class="more-less glyphicon glyphicon-plus"></i></a>
							  </h4>
							</div>
							<div id="collapse6" class="panel-collapse collapse">
							  <div class="panel-body">
                 <div class="panel-body">
                  <div class="col-xs-6 text-left" style=" "> <a href="../files/apodoxes.pdf" ><span class="glyphicon glyphicon-file" aria-hidden="true"></span> Βεβαίωση Σύνταξη </a> </div>
                  <div class="col-xs-3" style="">Τελευταία Τροποποίηση 01/12/2015</div>  
                </div>
						  </div>
						';
					}
				}
	?>

	</div> 
	</div> 
	</div></div> 
</section>

<button onclick="topFunction()" id="myBtn" title="Go to top"><span class="glyphicon glyphicon-triangle-top"></span></button>

<script>
    //Top button
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

<!-- After tools -->
<div class="foot"  style="margin-top:42%">    
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
