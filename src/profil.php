<!DOCTYPE html>
<html lang="en">
<head>
  <title>Προφίλ | ΙΚΑ</title>
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



<div class="container">
			<div class="row">
					<h1>Επεξεργασία Προφίλ</h1>
					<hr>
				<div class="col-lg-6"> <!-- μηκος των πεδιων της φορμας -->

					<!-- FORMA EGGRAFHS -->

					<form id="signin-form" method='post'>


						<div class="form-group">
							Όνομα:
							<input type="text" placeholder="Όνομα" name="onoma" class="form-control" value='<?php echo $_SESSION["onoma"]?>' required="required">
						</div>

						<div class="form-group">
							Επώνυμο:
							<input type="text" placeholder="Όνομα" name="epwnumo" class="form-control" value='<?php echo $_SESSION["epwnumo"]?>' required="required">
						</div>

						<div class="form-group">
							Όνομα Πατρός :
							<input type="text" placeholder="Όνομα Πατρός" name="onoma_patros" class="form-control" value = '<?php echo $_SESSION["onoma_patros"]?>' required="required">
						</div>

						<div class="form-group">
							Ημερομηνία γέννησης:
							<input type="date" name="birthdate" min="1910-01-01" max="2000-01-02" class="form-control" value = '<?php echo $_SESSION["birthdate"]?>' required="required">
						</div>

						<div class="form-group">
							ΑΜΚΑ :
							<input readonly type="number" placeholder="ΑΜΚΑ" name="amka" class="form-control" value = '<?php echo $_SESSION["amka"]?>' required="required">
						</div>

						<div class="form-group">
							Διεύθυνση :
							<input type="text" placeholder="Διεύθυνση" name="dieuthunsh" class="form-control" value = '<?php echo $_SESSION["dieuthunsh"]?>' required="required">
						</div>

						<div class="form-group">
							Πόλη Κατοικίας :
							<input type="text" placeholder="Πόλη Κατοικίας" name="polh_katoikias" class="form-control" value = '<?php echo $_SESSION["polh_katoikias"]?>' required="required">
						</div>

						<div class="form-group">
							Αριθμός Τηλεφώνου :
							<input type="number" placeholder="Αριθμός Τηλεφώνου" name="arithmos_thlefwnou" class="form-control" value = '<?php echo $_SESSION["arithmos_thlefwnou"]?>' required="required">
						</div>

						<div class="form-group">
							E-mail :
							<input type="email" placeholder="E-mail" name="email" class="form-control" value = '<?php echo $_SESSION["email"]?>' required="required">
						</div>
<?php
	if( $_SESSION["kathgoria_eggrafhs"] == 'Συνταξιούχος' ){
		echo '
						<div class="form-group">
							Ποσό Σύνταξης :
							<input type="number" name="amount" class="form-control" placeholder="Συμπληρώστε το μηνιαίο ποσό σύνταξης" required="required">
						</div>
		';
	}
	if( $_SESSION["kathgoria_eggrafhs"] == 'Εγοδότης' ){
		if ( $_SESSION["amka_ergazomenou"] != null ){
			$amka_ergazomenou = $_SESSION["amka_ergazomenou"];
			echo 'ΑΜΚΑ Υπαλλήλου :';
			echo '<br>';
			echo $amka_ergazomenou;
		}
	}
?>
						<div class="form-group">
							Κωδικός :
							<input type="password" placeholder="●●●●●●●●●●" name="password" id="password" class="form-control" value = '<?php echo $_SESSION["password"]?>' required="required">
						</div>

						<div class="form-group">
							Επαλήθευση Κωδικού :
							<input type="password" placeholder="●●●●●●●●●●" name="password_v" id="password_v" class="form-control" required="required">
						</div>
						<div class="row">
							<div class="col-sm-12">
								<span id="pwmatch" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span>Επαλήθευση Κωδικού
							</div>
						</div>
						<head>
							<style>
							input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}
input[type=number] {
										-moz-appearance:textfield;
								}
								.button {
									background-color: #FFFFFFFF;
									border: none;
									margin: 10px 25px;
								}
								.button_1 {
									border: none;
									outline: none;
									background-color: #417da8;
									color: white;
									border-radius: 8px;
								}
							</style>
						</head>
						<div>
							<button class="button_1" onclick="Sumbit_Function()"  style="float: right;"><h4>Καταχώρηση</h4></input>
							<button class="button" onclick="Reset_Function()" style="float: right;">Εκαθάριση</button>
						</div>
					</form>
	<script type="text/javascript">
			$("input[type=password]").keyup(function(){
				if($("#password").val() == $("#password_v").val()){
					$("#pwmatch").removeClass("glyphicon-remove");
					$("#pwmatch").addClass("glyphicon-ok");
					$("#pwmatch").css("color","#00A41E");
				}else{
					$("#pwmatch").removeClass("glyphicon-ok");
					$("#pwmatch").addClass("glyphicon-remove");
					$("#pwmatch").css("color","#FF0004");
				}
			});
	</script>
					<!-- Script gia to button ekatharishs ths formas -->
					<script>
						function Reset_Function() {
							<!-- document.getElementById("signin-form").action = "hello.php"; -->
							document.getElementById("signin-form").reset();
						}
					</script>
					<!-- Script gia to button ekxwrhshs twn dedomenwn -->
					<script>
						function Sumbit_Function() {
							if($("#password").val() == $("#password_v").val()){
								document.getElementById("signin-form").action = "../php/profil.php";
							}
							else{
								alert("Λαθος Κωδικος");
							}
						}
					</script>
				</div>
			</div>
		</div>

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
