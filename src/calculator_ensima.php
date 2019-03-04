<!DOCTYPE html>
<html lang="en">
<head>
	<title>Υπολογισμός Σύνταξης | ΙΚΑ</title>
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

<div class="container">
  <form class="form-horizontal" role="form" method="POST">
    <fieldset>
      <legend class="text-center text-primary">Υπολογισμός Πλήθους Ενσήμων</legend>
      <div class="form-group">
        <label class="col-sm-4 control-label" for="card-holder-name">Τύπος Απασχόλησης:</label>
            <div class="col-xs-5">
              <select class="form-control col-sm-2" name="type" id="type">
                <option>Πλήρης Απασχόληση</option>
                <option>Μερική Απασχόληση</option>
              </select>
            </div>
      </div>
      <div class="form-group">
        <label class="col-sm-4 control-label" for="cvv">Χρονίκο Διάστημα Απασχόλησης (Σε μήνες):</label>
        <div class="col-sm-5">
          <input type="number" class="form-control" name="time" id="time" placeholder="" min="0" required="required">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-4 control-label" for="cvv">Μισθός:</label>
        <div class="col-sm-5">
          <input type="number" class="form-control" name="money" id="money" placeholder="" min="0" required="required">
        </div>
      </div>

      <!-- Buttons -->
      <div class="form-group" >
        <div class="col-sm-offset-4 col-sm-9">
          <button class="btn btn-danger " type="reset">Καθαρισμός</button>
          <button  onclick="calculate()" type="button" class="btn btn-success btn-md col-sm-offset-2">Υπολογισμός Ενσήμων</button>
          <!-- <button  type="button" class="btn btn-success btn-md col-sm-offset-2" onclick="calculate()">Υπολογισμός Ενσήμων</button> -->
        </div>
      </div>
      <br>
      <br>
      <div class="form-group">
          <label class="col-sm-5 control-label" for="cvv">Πλήθος ενσήμων που πρέπει να καταβληθούν:</label>
            <div class="col-sm-4" id="result1" name="result1">
              <input type="number" class="form-control" name="result" id="result" readonly>
            </div>
      </div>
    </fieldset>
  </form>
</div>



		<button onclick="topFunction()" id="myBtn" title="Go to top"><span class="glyphicon glyphicon-triangle-top"></span></button>

		<script>
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

      //Gia ton pinaka suntaxhs
      $(function () {
          $('#worked .add-row').click(function () {
              var template = '<tr><td><input class="form-control" type="text"></td><td><input class="form-control" type="text"></td><td><input class="form-control" type="text"></td><td><button type="button" class="btn btn-primary delete-row">-</button></td></tr>';
              $('#worked tbody').append(template);
          });

          $('#worked').on('click', '.delete-row', function () {
              $(this).parent().parent().remove();
          });
      })

      //caclulation
      calculate = function()
      {   
          var type;
          var time=0;
          var money=0;

          type = document.getElementById('type').value;
          time = document.getElementById('time').value;
          if(time==""){
            alert("Συμπληρώστε τους μήνες απασχόλησης του εργαζομένου.");
            return false;
          }
          time = parseInt(time);

          money=document.getElementById('money').value;
          if(money==""){
            alert("Συμπληρώστε τον μισθό του εργαζομένου.");
            return false;
          }
          money=parseInt(money);

          var x = time*money;
          var y;
          if(type==="Πλήρης Απασχόληση"){
            y=x;
          }
          else{
            y=x/2;
          }
          document.getElementById('result').value = y;
        }
        
    </script>

<!-- After tools -->
<div class="foot"  style="margin-top:38%">    
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
