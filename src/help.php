<!DOCTYPE html>
<html lang="en">
<head>
  <title>Βοήθεια | ΙΚΑ</title>
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

<div class="center" style='margin-top: 0; '>
<hr style="border-width: 2px 2px 0; border-style: none; border-color: rgb(131, 112, 216); width: 100%; margin-left: auto; margin-right: auto;"/>
<section id="news"><br>

<div class="container-fluid" style='margin-top: -20px; '>
<div class="row">
<div class=" col-sm-0"></div>

	<div class="col-md-8 col-sm-8 col-lg-8 col-sm-offset-1">
              <!-- BREADCRUM -->
              <nav class="breadcrumb">
                  <a class="breadcrumb-item" href="index.php">Αρχική Σελίδα</a> >
                  <span class="breadcrumb-item active">Βοήθεια</span>
          </nav>
	 <div class="panel-group" id="accordion">
       <h4>Γενικά</h4> 
	  <div class="panel panel-default">
		<div class="panel-heading">
		  <h4 class="panel-title">	<a data-toggle="collapse"  href="#collapse10">Τι είναι το ΙΚΑ;<i class="more-less glyphicon glyphicon-plus"></i></a></h4>
		</div>
		<div id="collapse10" class="panel-collapse collapse">
		    <div class="panel-body">
                <p>Το Ίδρυμα Κοινωνικών Ασφαλίσεων - Ενιαίο Ταμείο Ασφάλισης Μισθωτών (ΙΚΑ-ΕΤΑΜ, /ˈika eˈtam/) υπήρξε κρατικός φορέας κύριας ασφάλισης στην Ελλάδα που δημιουργήθηκε το 1934.[1] Επί σειρά ετών ήταν και είναι ένας από τους κύριους ασφαλιστικούς φορείς, ενώ για πολλές δεκαετίες διέθετε το δικό του δίκτυο μονάδων παροχής υπηρεσιών υγείας, το οποίο συγχωνεύθηκε στο Εθνικό Σύστημα Υγείας (ΕΣΥ) και τον Εθνικό Οργανισμό Παροχής Υπηρεσιών Υγείας (ΕΟΠΥΥ).</p>   
		    </div>
		</div>
	  </div>
	  <div class="panel panel-default">
		<div class="panel-heading">
		  <h4 class="panel-title">	<a data-toggle="collapse"  href="#collapse9">Πως γίνεται η θεώρηση των ατομικών και οικογενειακών βιβλιαρίων υγείας; <i class="more-less glyphicon glyphicon-plus"></i></a>	  </h4>
		</div>
		<div id="collapse9" class="panel-collapse collapse">
		    <div class="panel-body">
                <p>Από το 2014 καταργήθηκε η χειρόγραφη θεώρηση των βιβλιαρίων υγείας καθώς και η αποστολή αυτοκόλλητων ετικετών για την ανανέωση τους, διότι η ασφαλιστική ικανότητα αποδίδεται αυτόματα στους δικαιούχους (άμεσα ασφαλισμένοι και τα μέλη της οικογένειάς τους) ενώ παράλληλα ενημερώνεται άμεσα το «Εθνικό Μητρώο Δικαιούχων Περίθαλψης», ώστε οι πάροχοι υγείας να εξυπηρετούν μόνο με την επίδειξη του βιβλιαρίου υγείας (ατομικού και οικογενειακού). </p>
            </div>
		</div>
      </div>
      <br>
      <h4>Σύνδεση & Εγγραφή</h4>

	  <div class="panel panel-default">
		<div class="panel-heading">
		  <h4 class="panel-title">	<a data-toggle="collapse"  href="#collapse8">  Γιατί πρέπει να κάνω εγγραφή; <i class="more-less glyphicon glyphicon-plus"></i></a>		  </h4>
		</div>
		<div id="collapse8" class="panel-collapse collapse">
		    <div class="panel-body">
                <p>Η Εγγραγή στο ιστοχώρο του ΙΚΑ δεν είναι υποχρεωτική για τον χρήστη. Χωρίς όμως εγραφή στο site ο χρήστης δεν θα μπορεί να έχει πρόσβαση στις προσφερόμενες υπηρεσίες. Προτείνεται στο χρήστη η εγγραφή στο site για την αποτελεσματική εξυπηρέτηση των χρηστών.</p>
            </div>
		</div>
    </div>
	  <div class="panel panel-default">
		<div class="panel-heading">
		  <h4 class="panel-title">
			<a data-toggle="collapse"  href="#collapse7">
			΄Εχασα τον κωδικό μου.Τι μπορώ να κάνω; <i class="more-less glyphicon glyphicon-plus"></i></a>
		  </h4>
		</div>
		<div id="collapse7" class="panel-collapse collapse">
		    <div class="panel-body">
                <p>Εάν χάσατε τον κωδικό σας θα πρέπει να στείλετε email μέσω τη φόρμα επικοινωνίας και να αναφέρεται πως χάσατε τν κωδικό σας.
                Στη συνέχεια ένα email θα σας αποσταλεί με αναλυτικές οδηγίες για το πως θα ανακτήσετε το κωδικό σας.</p>
            </div>
		</div>
    </div>
    <br>
    <h4>Για τον Ασφαλισμένο</h4>

	  <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title"><a data-toggle="collapse"  href="#collapse6"> Ποιοί δικαιούνται ατομικό βιβλιάριο;<i class="more-less glyphicon glyphicon-plus"></i></a></h4>
      </div>
      <div id="collapse6" class="panel-collapse collapse">
        <div class="panel-body">
          <p>Ατομικό βιβλιάριο Υγείας δικαιούνται οι άμεσα ασφαλισμένοι, οι συνταξιούχοι λόγω γήρατος, αναπηρίας και θανάτου του ΙΚΑ -ΕΤΑΜ., καθώς και οι ασφαλισμένοι άλλων ασφαλιστικών ταμείων, εφόσον καλύπτονται από το ΙΚΑ-ΕΤΑΜ για παροχές σε είδος.</p>
        </div>
      </div>
    </div>
    
	  <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title"><a data-toggle="collapse"  href="#collapse16">Ποιοί δικαιούνται οικογενειακό βιβλιάριο;<i class="more-less glyphicon glyphicon-plus"></i></a></h4>
      </div>
      <div id="collapse16" class="panel-collapse collapse">
        <div class="panel-body">
          <p>Δικαιούνται τα μέλη της οικογενείας (σύζυγος και τέκνα μέχρι 18 ετών) του άμεσα ασφαλισμένου που δεν εργάζονται ή δεν συνταξιοδοτούνται από δικό στους δικαίωμα. Για τέκνα που σπουδάζουν σε αναγνωρισμένες από το Κράτος Σχολές η ασφαλιστική τους κάλυψη επεκτείνεται μέχρι τη συμπλήρωση του 24ου έτους της ηλικίας τους.</p>
        </div>
      </div>
    </div>
    <!-- # # # -->
    <br>
    <h4>Για τον Εργοδότη</h4>

	  <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title"><a data-toggle="collapse"  href="#collapse62">Πώς θα γνωρίζω εάν δεν έχει πιστοποιηθεί η εγγραφή μου;<i class="more-less glyphicon glyphicon-plus"></i></a></h4>
      </div>
      <div id="collapse62" class="panel-collapse collapse">
        <div class="panel-body">
          <p>Κάθε εγγραφή πιστοποιείται εφόσον τα δηλωμένα σε αυτή στοιχεία προκύψουν σωστά, μετά τη διασταύρωση με αυτά, του ηλεκτρονικά τηρούμενου Μητρώου Εργοδοτών που τηρεί η υπηρεσία μας με την επεξεργασία των εντύπων Αιτήσεων-Δηλώσεων Απογραφής Εργοδότη. Στην περίπτωση αδυναμίας πιστοποίησης μίας εγγραφής, ο εργοδότης λαμβάνει μήνυμα μέσω ηλεκτρονικού ταχυδρομείου (e-mail) με οδηγίες για την αποκατάσταση του προβλήματος.Στην περίπτωση καθυστέρησης πιστοποίησης μιάς εγγραφής (νέος εργοδότης), ο εργοδότης λαμβάνει μήνυμα (e-mail) με σχετική ειδοποίηση.</p>
        </div>
      </div>
    </div>
    
	  <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title"><a data-toggle="collapse"  href="#collapse161">Μπορώ να υποβάλλω Α.Π.Δ. μέσω e-mail;<i class="more-less glyphicon glyphicon-plus"></i></a></h4>
      </div>
      <div id="collapse161" class="panel-collapse collapse">
        <div class="panel-body">
          <p>Η Α.Π.Δ. δε δύναται να υποβληθεί με την αποστολή του αρχείου μέσω e-mail.Η υποβολή της Α.Π.Δ. μέσω διαδικτύου, γίνεται μόνο μέσα από τις ΗΛΕΚΤΡΟΝΙΚΕΣ ΥΠΗΡΕΣΙΕΣ της ιστοσελίδας μας www.ika.gr. Για την υποβολή μέσω διαδικτύου, απαραίτητη προϋπόθεση είναι να είστε εγγεγραμμένος χρήστης στο σύστημα ΗΛΕΚΤΡΟΝΙΚΩΝ ΥΠΗΡΕΣΙΩΝ της ιστοσελίδας μας και να διαθέτετε κωδικούς πρόσβασης.</p>
        </div>
      </div>
    </div>
        <!-- # # # -->
        <br>
        <h4>Για τα ΑΜΕΑ</h4>
    
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><a data-toggle="collapse"  href="#collapse621">Αν υποβάλλω αίτηση ρύθμισης διαδικτυακά πώς μπορώ να παραλάβω την απόφαση ρύθμισης;<i class="more-less glyphicon glyphicon-plus"></i></a></h4>
          </div>
          <div id="collapse621" class="panel-collapse collapse">
            <div class="panel-body">
              <p>Η απόφαση ρύθμισης δημιουργείται ηλεκτρονικά και τίθεται σε ισχύ μετά την καταβολή της πρώτης δόσης της ρύθμισης. Εφόσον επιθυμείτε μπορείτε να παραλάβετε την απόφαση ρύθμισης από την αρμόδια Περιφερειακή Υπηρεσία Κ.Ε.Α.Ο. ή στην Ταμειακή Υπηρεσία Υποκαταστήματος ΙΚΑ-ΕΤΑΜ που ανήκετε.Πάντως η ρύθμιση αποστέλεται ηλεκτρονικά στην ηλεκτρονική διεύθυνση, όπου αναγράφονται και οι απαιτητές δόσεις ρύθμισης.</p>
            </div>
          </div>
        </div>
        
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><a data-toggle="collapse"  href="#collapse1621"> Κι αν κάποιος δεν διαθέτει βιβλιάριο υγείας;
            <i class="more-less glyphicon glyphicon-plus"></i></a></h4>
          </div>
          <div id="collapse1621" class="panel-collapse collapse">
            <div class="panel-body">
              <p>An συμβαίνει αυτό, τότε θα πρέπει να μεταβεί σε οποιοδήποτε Υποκατάστημα του ΙΚΑ-ΕΤΑΜ για να εκδώσει βιβλιάριο υγείας, προσκομίζοντας τα παρακάτω: Πρόσφατη φωτογραφία, αστυνομική ταυτότητα ή διαβατήριο ,βεβαίωση διαγραφής από τον προηγούμενο φορέα ασφάλισης ή Υπεύθυνη Δήλωση ν.1599/86 ότι δεν είναι ασφαλισμένος σε άλλο Ταμείο και τέλος  προσκόμιση άδειας παραμονής για υπηκόους τρίτων χωρών ή έγγραφο πιστοποίησης μόνιμης διαμονής για πολίτες της Ε.Ε.</p>
            </div>
          </div>
        </div>
        <!-- # # # -->
        <br>
        <h4>Για τον Συνταξιούχο</h4>
    
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><a data-toggle="collapse"  href="#collapse111"> Πώς μπορώ να υπολογίσω το ποσόν της προβλεπόμενης σύνταξης μου;<i class="more-less glyphicon glyphicon-plus"></i></a></h4>
          </div>
          <div id="collapse111" class="panel-collapse collapse">
            <div class="panel-body">
              <p>Από την αρχική σελίδα του ΙΚΑ μπορεί κάποιος να υπολογίσει την σύνταξη του πατώντας το κουμπί Υπολογισμός Σύνταξης και συπληρώνοντας την απαιτούμενη φόρμα.Διαφορετικά το ίδιο μπορεί κάποιος να κάνει μέσω των υπηρεσιών για το συνταξιούχο όπου και πάλι μπορεί να βρεί την δυνατότητα για τον υπολογισμό της σύνταξης.</p>
            </div>
          </div>
        </div>
        
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><a data-toggle="collapse"  href="#collapse23">Ποιον τύπο τραπεζικής συναλλαγής πρέπει να επιλέξω για να πληρώσω καθυστερούμενες  εισφορές που έχουν καταλογιστεί;<i class="more-less glyphicon glyphicon-plus"></i></a></h4>
          </div>
          <div id="collapse23" class="panel-collapse collapse">
            <div class="panel-body">
              <p>Κατά την καταβολή ποσών στο πιστωτικό ίδρυμα ή μέσω web banking τόσο οι οφειλέτες Κ.Ε.Α.Ο. όσο και οι οφειλέτες του ΙΚΑ-ΕΤΑΜ πρέπει να επιλέγουν την τραπεζική συναλλαγή με ένδειξη «Κ.Ε.Α.Ο.».</p>
            </div>
          </div>
        </div>

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
<div class="foot"  style="margin-top:28%">    
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