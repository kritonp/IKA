<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ανακοινώσεις | ΙΚΑ</title>
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
    <div class="col-md-12">
        <!-- BREADCRUM -->
        <nav class="breadcrumb">
            <a class="breadcrumb-item" href="index.php">Αρχική Σελίδα</a> >
            <span class="breadcrumb-item active">Ανακοινώσεις</span>
        </nav>
        <h3>Μηνιαία Στοιχεία Απασχόλησης</h3>
            <p>Από την επεξεργασία των στοιχείων, μέσω του Ολοκληρωμένου Πληροφοριακού
              Συστήματος (Ο.Π.Σ./Ι.Κ.Α.), που αφορούν τη πορεία των ρυθμίσεων τμηματικής
              καταβολής στο Ι.Κ.Α.-Ε.Τ.Α.Μ., προέκυψαν τα ακόλουθα αποτελέσματα τα οποία
              αποτυπώνονται στους τέσσερις επισυναπτόμενους πίνακες με συγκεντρωτικά στοιχεία
              για τη «Πάγια» ρύθμιση της υποπαραγράφου ΙΑ.1 της παραγράφου ΙΑ' του άρθρου
              πρώτου του Ν. 4152/2013 και τη ρύθμιση «Νέας Αρχής» της υποπαραγράφου ΙΑ.2 της
              παραγράφου ΙΑ' του άρθρου πρώτου του ιδίου νόμου, των διατάξεων του άρθρου 54 του
              Ν.4305/2014 (ΦΕΚ 237/τ.Α’ /31-10-2014) καθώς και του άρθρου 28 του Ν. 4321/2015
              (ΦΕΚ 32/τ. Α721-3-2015). </p>
        <div>
            <span class="badge">Δημοσίευση 02/08/2017 20:47:04</span>       
        </div>
        <hr>
        <h3>Μηνιαία Στοιχεία Απασχόλησης</h3>
        <p>Από την επεξεργασία των στοιχείων, μέσω του Ολοκληρωμένου Πληροφοριακού
          Συστήματος (Ο.Π.Σ./Ι.Κ.Α.), που αφορούν τη πορεία των ρυθμίσεων τμηματικής
          καταβολής στο Ι.Κ.Α.-Ε.Τ.Α.Μ., προέκυψαν τα ακόλουθα αποτελέσματα τα οποία
          αποτυπώνονται στους τέσσερις επισυναπτόμενους πίνακες με συγκεντρωτικά στοιχεία
          για τη «Πάγια» ρύθμιση της υποπαραγράφου ΙΑ.1 της παραγράφου ΙΑ' του άρθρου
          πρώτου του Ν. 4152/2013 και τη ρύθμιση «Νέας Αρχής» της υποπαραγράφου ΙΑ.2 της
          παραγράφου ΙΑ' του άρθρου πρώτου του ιδίου νόμου, των διατάξεων του άρθρου 54 του
          Ν.4305/2014 (ΦΕΚ 237/τ.Α’ /31-10-2014) καθώς και του άρθρου 28 του Ν. 4321/2015
          (ΦΕΚ 32/τ. Α721-3-2015). </p>
        <div>
            <span class="badge">Δημοσίευση 02/08/2017 20:47:04</span><div class="pull-right"></div>
        </div>     
        <hr>
            <h3>Μηνιαία Στοιχεία Απασχόλησης</h3>
            <p>Από την επεξεργασία των στοιχείων, μέσω του Ολοκληρωμένου Πληροφοριακού
              Συστήματος (Ο.Π.Σ./Ι.Κ.Α.), που αφορούν τη πορεία των ρυθμίσεων τμηματικής
              καταβολής στο Ι.Κ.Α.-Ε.Τ.Α.Μ., προέκυψαν τα ακόλουθα αποτελέσματα τα οποία
              αποτυπώνονται στους τέσσερις επισυναπτόμενους πίνακες με συγκεντρωτικά στοιχεία
              για τη «Πάγια» ρύθμιση της υποπαραγράφου ΙΑ.1 της παραγράφου ΙΑ' του άρθρου
              πρώτου του Ν. 4152/2013 και τη ρύθμιση «Νέας Αρχής» της υποπαραγράφου ΙΑ.2 της
              παραγράφου ΙΑ' του άρθρου πρώτου του ιδίου νόμου, των διατάξεων του άρθρου 54 του
              Ν.4305/2014 (ΦΕΚ 237/τ.Α’ /31-10-2014) καθώς και του άρθρου 28 του Ν. 4321/2015
              (ΦΕΚ 32/τ. Α721-3-2015). </p>
        <div>
          <span class="badge">Δημοσίευση 02/08/2017 20:47:04</span><div class="pull-right"></div>         
        </div>
        <hr>
        <h3>Μηνιαία Στοιχεία Απασχόλησης</h3>
        <p>Από την επεξεργασία των στοιχείων, μέσω του Ολοκληρωμένου Πληροφοριακού
          Συστήματος (Ο.Π.Σ./Ι.Κ.Α.), που αφορούν τη πορεία των ρυθμίσεων τμηματικής
          καταβολής στο Ι.Κ.Α.-Ε.Τ.Α.Μ., προέκυψαν τα ακόλουθα αποτελέσματα τα οποία
          αποτυπώνονται στους τέσσερις επισυναπτόμενους πίνακες με συγκεντρωτικά στοιχεία
          για τη «Πάγια» ρύθμιση της υποπαραγράφου ΙΑ.1 της παραγράφου ΙΑ' του άρθρου
          πρώτου του Ν. 4152/2013 και τη ρύθμιση «Νέας Αρχής» της υποπαραγράφου ΙΑ.2 της
          παραγράφου ΙΑ' του άρθρου πρώτου του ιδίου νόμου, των διατάξεων του άρθρου 54 του
          Ν.4305/2014 (ΦΕΚ 237/τ.Α’ /31-10-2014) καθώς και του άρθρου 28 του Ν. 4321/2015
          (ΦΕΚ 32/τ. Α721-3-2015). </p>
    <div>
      <span class="badge">Δημοσίευση 02/08/2017 20:47:04</span><div class="pull-right"></div>         
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
