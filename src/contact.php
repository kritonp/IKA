<!DOCTYPE html>
<html lang="en">
<head>
  <title>Επικοινωνία | ΙΚΑ</title>
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
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }
    
    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
    
    tr:nth-child(even) {
        background-color: #dddddd;
    }

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
<section>
    
    <div class="row" align="center"><!--<H1>Επικοινωνηστε Μαζι μας</H1>--></div>
    <br><br>
    <div class="row">

        <div class="col-lg-4" style="padding-left:60px; ">
            <br>
            <table>
              <tr>
                <th>ΙΚΑ</th>
                <th>Τηλέφωνο</th>
                <th>Τοποθεσία</th>
              </tr>
              <tr>
                <td>Αμαρουσίου</td>
                <td>210 6360790</td>
                <td><a href="https://www.google.gr/maps?q=ika+amarousiou&um=1&ie=UTF-8&sa=X&ved=0ahUKEwjZqM7l4NLYAhWCXiwKHRLXDC8Q_AUICigB" target="_blank">Χάρτης</a></td>
              </tr>
              <tr>
                <td>Γέρακα</td>
                <td>210 6360790</td>
                <td><a href="https://www.google.gr/maps?q=ika+amarousiou&um=1&ie=UTF-8&sa=X&ved=0ahUKEwjZqM7l4NLYAhWCXiwKHRLXDC8Q_AUICigB" target="_blank">Χάρτης</a></td>
              </tr>
              <tr>
                <td>Μελίσσια</td>
                <td>210 6360790</td>
                <td><a href="https://www.google.gr/maps?q=ika+amarousiou&um=1&ie=UTF-8&sa=X&ved=0ahUKEwjZqM7l4NLYAhWCXiwKHRLXDC8Q_AUICigB" target="_blank">Χάρτης</a></td>
              </tr>
              <tr>
                <td>Χαλάνδρι</td>
                <td>210 6360790</td>
                <td><a href="https://www.google.gr/maps?q=ika+amarousiou&um=1&ie=UTF-8&sa=X&ved=0ahUKEwjZqM7l4NLYAhWCXiwKHRLXDC8Q_AUICigB" target="_blank">Χάρτης</a></td>
              </tr>
              <tr>
                <td>Χαλάνδρι</td>
                <td>210 6360790</td>
                <td><a href="https://www.google.gr/maps?q=ika+amarousiou&um=1&ie=UTF-8&sa=X&ved=0ahUKEwjZqM7l4NLYAhWCXiwKHRLXDC8Q_AUICigB" target="_blank">Χάρτης</a></td>
              </tr>
              <tr>
                <td>Χαλάνδρι</td>
                <td>210 6360790</td>
                <td><a href="https://www.google.gr/maps?q=ika+amarousiou&um=1&ie=UTF-8&sa=X&ved=0ahUKEwjZqM7l4NLYAhWCXiwKHRLXDC8Q_AUICigB" target="_blank">Χάρτης</a></td>
              </tr>
            </table>
        </div>
        
        <div class="col-lg-4" align="center">
        
        </div>
        
        <div class="col-lg-5">
            <div class="row">
                <div class="col-md-12 col-md-offset-5">
                  <div class="well well-sm">
                    <form class="form-horizontal" action="construction.php" method="post">
                    <fieldset>
                      <legend class="text-center">Eπικοινωνήστε μαζί μας με email</legend>
              
                      <!-- Name input-->
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="name">Όνομα</label>
                        <div class="col-md-9">
                          <input id="name" name="name" type="text" placeholder="Εισάγεται το ονομά σας" class="form-control">
                        </div>
                      </div>
              
                      <!-- Email input-->
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="email">E-mail</label>
                        <div class="col-md-9">
                          <input id="email" name="email" type="text" placeholder="Εισάγεται το email σας" class="form-control">
                        </div>
                      </div>
              
                      <!-- Message body -->
                      <div class="form-group">
                        <label class="col-md-3 control-label" for="message">Το μήνυμα σας</label>
                        <div class="col-md-9">
                          <textarea class="form-control" id="message" name="message" placeholder="Γράψτε το μήνυμα σας εδώ..." rows="3"></textarea>
                        </div>
                      </div>
              
                      <!-- Form actions -->
 
                        <div class="form-group"  >
                          <div class="col-md-12 text-right">
                            <button type="submit" class="btn btn-primary btn-lg">Υποβολή</button>
                          </div>
                        </div>



                    </fieldset>
                    </form>
                  </div>
                </div>
            </div>
        </div>
        
    </div> 
        
    </section>

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
      //Top Button
    </script>

<!-- After tools -->
<div class="foot"  style="margin-top:50%">    
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
