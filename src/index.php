<!DOCTYPE html>
<html lang="en">
<head>
  <title>Αρχική | ΙΚΑ</title>
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
        <div class="big-grid-1 clearfix">
         <div class="col-md-6 relative big-grid">
             <div class="grid-inner">
                 <a href="./asfalismenos.php">
                 <img src="../images/asfalismenos.jpg" class="img-responsive">
                 <div class="big-grid-overlay layed">
                     <!--<button class="grid-2-category"> Συνταξη </button>-->
                     <h3>Ασφαλισμένος</h3>
                 </div>
                 </a>
             </div> 
            </div>
          <!-- First big Grid-->
         
         
         <div class="col-md-6 relative medium-grid">
             <div class="col-xs-12 medium-grid">
             <div class="grid-inner">
                 <a href="./construction.php">
                         <img src="../images/ame.jpg" class="img-responsive">
                         <div class="big-grid-overlay layed">
                             <!--<button class="grid-2-category hidden-xs hidden-sm"> ΑΜΕΑ </button>-->
                             <h3>ΑΜΕΑ</h3>
                         </div>
                     </a> 
                 </div>
                 </div> 
             <!-- Seound big Grid-->

             <div class="col-xs-12 small-grid-group">
                 <div class="col-xs-6 relative small-grid mobile-padded">
                     <div class="grid-inner">
                         <a href="./construction.php">
                         <img src="../images/retirement.jpg" class="img-responsive">
                         <div class="big-grid-overlay layed">
                             <!--<button class="grid-2-category hidden-xs hidden-sm"> Ασφαλισμενος </button>-->
                             <h3>Συνταξιούχος</h3>
                         </div>
                         </a>
                 </div> 
                 </div> 
              <!-- Seound big Grid-->

                 <div class="col-xs-6 relative small-grid mobile-padded">
                     <div class="grid-inner">
                         <a href="./ergodo.php">
                         <img src="../images/boss.jpg" class="img-responsive">
                         <div class="big-grid-overlay layed">
                             <!--<button class="grid-2-category hidden-xs hidden-sm"> Εργοδοτης </button>-->
                             <h3>Εργοδότης</h3>
                         </div>
                         </a>
                     </div>
                 </div> 
              <!-- Seound big Grid-->
             </div>
         </div>
     </div>
 </div>

<div class="products">
    <div class="yolo">
            
      <a href="./calculator.php"> <img   alt="calc_logo" src="../images/calcu.png" ></a>                
      <h3><a href="./calculator.php">Υπολογισμός Σύνταξης</a></h3>
      <p class="gray" style="text-align: center; "> Υπολόγισε αν μπορείς να <br>συνταξιοδοτηθείς αλλά και το<br>ποσό της σύνταξης σου. </p>
    </div>
    <div>
      <a href="./vevaioseis.php"> <img  alt="vevaioseis_logo" alt="" src="../images/docs.png" ></a> 
      <h3><a href="./vevaioseis.php">Βεβαιώσεις</a></h3>
      <p style="text-align: center; "> Εύρεση χρήσιμων βεβαιώσεων <br>για κάθε ιδιότη.</p>
    </div>
    <div>
      <a href="./construction.php"> <img  alt="afm_logo" alt="./construction.php" src="../images/ssn.png" ></a> 
      <h3><a href="./construction.php">ΑΦΜ</a></h3>
      <p style="text-align: center; "> Εύρεση του Αριθμού Φορολογικού <br>Μητρώου.</p>
    </div>
    <div>
        <a href="./help.php"> <img  alt="help_logo" src="../images/help.png" width="50" height="50"></a>         
        <h3><a href="./help.php">Βοήθεια</a></h3>
        <p style="text-align: center; "> Χρειάζεστε Βοηθεία; <br>Δείτε τις πιο συχνές ερωτήσεις.</p>
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
<div class="foot"  style="margin-top:10%">    
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
