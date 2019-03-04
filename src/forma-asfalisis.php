<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ασφάλιση Εργαζομένου | ΙΚΑ</title>
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




<form id="asfalish-form" class="form-horizontal" method = "post">
    <fieldset>
        <!-- Form Name -->
        <legend class="text-center text-primary"><h2>Ασφάλιση Εργαζομένου</h2></legend>
        
        <!-- Text input-->
        <u><h4 class="text-center">Στοιχεία Εργαζομένου</h4></u>
        <div class="form-group">
            <label class="col-md-4 control-label" >Όνομα :</label>  
            <div class="col-md-4">
                <input   type="text" placeholder="Όνομα" name="onoma" class="form-control" required="required">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" >Επώνυμο :</label>  
            <div class="col-md-4">
                <input  type="text" placeholder="Επώνυμο" name="epwnumo" class="form-control" required="required">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" >Όνομα Πατρός :</label>  
            <div class="col-md-4">
                <input   type="text" placeholder="Όνομα Πατρός" name="onoma_patros" class="form-control" required="required">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" >Ημερομηνία γέννησης :</label>  
            <div class="col-md-4">
                <input  type="date" name="birthdate" min="1910-01-01" max="2000-01-02" class="form-control" required="required">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" >Α.Μ.Κ.Α :</label>  
            <div class="col-md-4">
                <input  type="number" max="9999999999" placeholder="ΑΜΚΑ" name="amka" class="form-control" required="required">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" >Διεύθυνση :</label>  
            <div class="col-md-4">
                <input  type="text" placeholder="Διεύθυνση" name="dieuthunsh" class="form-control" required="required">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" >Πόλη Κατοικίας :</label>  
            <div class="col-md-4">
                <input  type="text" placeholder="Πόλη Κατοικίας" name="polh_katoikias" class="form-control" required="required">
            </div>
        </div>


        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" >Αριθμός Τηλεφώνου :</label>  
            <div class="col-md-4">
                <input  type="number" placeholder="Αριθμός Τηλεφώνου" name="arithmos_thlefwnou" class="form-control" required="required">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" >E-mail :</label>  
            <div class="col-md-4">
                <input  type="email" placeholder="E-mail" name="email" class="form-control" required="required">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" >Ένσημα :</label>  
            <div class="col-md-4">
                <input min = "10000" type="number" placeholder=""  class="form-control" required="required">
            </div>
        </div>
         <div class="form-group">
            <label class="col-md-4 control-label" >Λόγος Απασχόλησης :</label>  
            <div class="col-md-4">
                <input min = "10000" type="text" placeholder=""  class="form-control">
            </div>
        </div>
        <div class="form-group">
          <label class="col-sm-4 control-label" for="card-holder-name">Χρόνος Απασχόλησης: </label>
              <div class="col-xs-4">
                <select class="form-control col-sm-2" name="expiry-month" id="expiry-month">
                  <option>Πλήρης Απασχόληση</option>
                  <option>Μερικη Απασχόληση</option>
                </select>
              </div>
        </div>
        <div class="form-group">
          <label class="col-sm-4 control-label" for="card-holder-name">Σχόλια: </label>
              <div class="col-xs-4">
                  <textarea class="form-control" rows="3" id="comment"></textarea>
              </div>
        </div>
        
        <!-- Buttons -->
        <div class="form-group" >
          <div class="col-sm-offset-4 col-sm-6">
            <button class="btn btn-danger " type="reset">Καθαρισμός Φόρμας</button>
            <button class="btn btn-success col-sm-offset-2" onclick="Sumbit_Function()">Υποβολή Αίτησης</button>
          </div>
        </div>

    </fieldset>
</form>
<script>
	function Sumbit_Function() {
		document.getElementById("asfalish-form").action = "../php/form_asfalishs.php";
	}
</script>
        <style>
            .button_1 {
                border: none;
                outline: none;
                background-color: #417da8;
                color: white;
                border-radius: 81px;
                margin:20px;
                
            }
        </style>
<style>
    input[type=number]::-webkit-inner-spin-button, 
    input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none; 
    margin: 0; 
    }
	input[type=number] {
		-moz-appearance:textfield;
	}
</style>

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
<div class="foot"  style="margin-top:20%">    
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
