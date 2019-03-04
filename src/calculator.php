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
      <legend class="text-center text-primary">Υπολογισμός Βασικής Σύνταξης</legend>
      <div class="form-group">
        <label class="col-sm-5 control-label" for="card-holder-name">Συνταξιοδοτικός Φορέας</label>
            <div class="col-xs-4">
              <select class="form-control col-sm-2" name="expiry-month" id="expiry-month">
                <option>ΙΚΑ-ΕΤΕΑΜ</option>
                <option>ΕΤΕΑΜ</option>
              </select>
            </div>
      </div>
      <div class="form-group">
        <label class="col-sm-5 control-label" for="card-holder-name">Τύπος Σύνταξης</label>
            <div class="col-xs-4">
              <select class="form-control col-sm-2" name="expiry-month" id="expiry-month">
                <option>Γήρατος</option>
                <option>Αναπηρίας</option>
                <option>Θανάτου Ασφαλισμένου</option>
                <option>Θανάτου Συνταξιούχου</option>
              </select>
            </div>
      </div>
      <div class="form-group">
        <label class="col-sm-5 control-label" for="cvv">Συνολο Ημερών Εργασίας στην Aσφαλιστική ζωή</label>
        <div class="col-sm-4">
          <input type="number" class="form-control" name="a" id="a" placeholder="" min="0" required="required">
        </div>
      </div>

      <div class="row">
          <u><h4 class="text-center">Στοιχεία Τελευταίων Χρόνων</h4></u>
          <div class="col-sm-offset-3 col-md-6 control-label ">
              <table class="table table-hover " id="worked">
                  <thead>
                      <tr>
                          <th>Έτος</th>
                          <th>Αποδοχές(Ευρώ)</th>
                          <th>Ημέρες Εργασίας</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td> <input class="form-control" type="number" value="2017" max="2017" readonly></td>
                          <td> <input class="form-control" type="number" required="required" ></td>
                          <td><input class="form-control" type="number" name="a1" id="a1" ></td>
                      </tr>
                      <tr>
                          <td> <input class="form-control" type="number" value="2016" max="2017" readonly=""></td>
                          <td> <input class="form-control" type="number"></td>
                          <td><input class="form-control" type="number" min="0" max="365 " name="a2" id="a2" required="required"></td>
                      </tr>
                      <tr>
                          <td> <input class="form-control" type="number" value="2015" max="2017" readonly=""></td>
                          <td><input class="form-control" type="number"></td>
                          <td><input class="form-control" type="number" min="0" max="365" name="a3" id="a3" required="required"></td>
                      </tr>
                      <tr>
                          <td> <input class="form-control" type="number" value="2014" max="2017" readonly=""></td>  
                          <td><input class="form-control" type="number"></td>
                          <td><input class="form-control" type="number" min="0" max="365" name="a4" id="a4" required="required"></td>
                      </tr>
                  </tbody>
              </table>
          </div>
      </div>

 
      <!-- Buttons -->
      <div class="form-group" >
        <div class="col-sm-offset-3 col-sm-9">
          <button class="btn btn-danger " type="reset">Καθαρισμός Φόρμας</button>
          <button  type="button" class="btn btn-success col-sm-offset-3" onclick="calculate()">Υπολογισμός Σύνταξης</button>
        </div>
      </div>
      <div class="form-group">
          <label class="col-sm-5 control-label" for="cvv">Προβλεπόμενη Σύνταξη</label>
            <div class="col-sm-4">
              <input type="number" class="form-control" name="b" id="b" readonly>
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
          var a=0;
          var a1=0;
          var a2=0;
          var a3=0;
          var a4=0;
          var x;

          x = document.getElementById('a').value;
          if(x==""){
            alert("Συμπληρώστε τις Συνολικές Μέρες Εργασίας στην Ασφαλιστική Ζωή.");
            return false;
          }
          a=document.getElementById('a').value;
          a=parseInt(a);
          if(a<300){
            alert("Οι Συνολικές Ημέρες Εργασίας σας δεν επαρκούν για να βγείτε στη σύνταξη.");
            return false;
          }

          x = document.getElementById('a1').value;
          if(x==""){
            alert("Συμπληρώστε τις Ημέρες Εργασίας για το 2017.");
            return false;
          }
          a1 = document.getElementById('a1').value;
          a1 = parseInt(a1);
          if(a1>365){
            alert("Οι ετήσιες ημέρες εργασίας για το 2017 πρέπει να είναι το πολύ 365");
            return false;
          }

          x = document.getElementById('a2').value;
          if(x==""){
            alert("Συμπληρώστε τις Ημέρες Εργασίας για το 2016.");
            return false;
          }
          a2=document.getElementById('a2').value;
          a2=parseInt(a2);
          if(a2>365){
            alert("Οι ετήσιες ημέρες εργασίας για το 2016 πρέπει να είναι το πολύ 365");
            return false;
          }

          x = document.getElementById('a3').value;
          if(x==""){
            alert("Συμπληρώστε τις Ημέρες Εργασίας για το 2015.");
            return false;
          }
          a3=document.getElementById('a3').value;
          a3=parseInt(a3);
          if(a3>365){
            alert("Οι ετήσιες ημέρες εργασίας για το 2015 πρέπει να είναι το πολύ 365");
            return false;
          }

          x = document.getElementById('a4').value;
          if(x==""){
            alert("Συμπληρώστε τις Ημέρες Εργασίας για το 2014.");
            return false;
          }
          a4=document.getElementById('a4').value;
          a4=parseInt(a4);
          if(a4>365){
            alert("Οι ετήσιες ημέρες εργασίας για το 2016 πρέπει να είναι το πολύ 365");
            return false;
          }
          var x=a+a1+a2+a3+a4;
          var y;
         if(x < 600){
           y = 340;
         }else if(x >= 600 && x<800){
           y=450;
         }else if(x >= 800 && x<1200){
           y=640;
         }else if(x >= 1200 && x<1700){
           y=790;
         }else if(x>=1700){
           y=1000;
         }
         document.getElementById('b').value = y;
        }
        
    </script>

<!-- After tools -->
<div class="foot"  style="margin-top:30%">    
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
