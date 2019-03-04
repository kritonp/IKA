<?php
    session_start();
    if( isset($_SESSION['usr']) ){
		echo "<h1>sundedemenos</h1>";
	}
	else{
		echo "<h1>ektos sudeshs_1</h1>";
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<style type="text/css">
.center {
	margin: auto;
	width: 50%;
	border: 3px solid #0A33A7;
	padding: 10px;
	font-family: Constantia, "Lucida Bright", "DejaVu Serif", Georgia, serif;
}
.center h2 img {
	float: left;
	margin-top: 22px;
	margin-right: 22px;
	margin-bottom: 22px;
	margin-left: 22px;
}
</style>
</head>

<body>
<div class="center">
  <h2><a href="./index.php"><img src="../images/ika_ico.jpeg" alt="ika logo" width="130"/></a></h2>
  <h3>Σφάλμα 404 - Η σελίδα δεν βρέθηκε</h3>
  <p>Η σελίδα που ζητήσατε μπορεί να έχει διαγραφεί, να έχει μετονομαστεί ή να μην είναι προσβάσιμη προσωρινά.</p>
  <p>Παρακαλούμε δοκιμάστε μια από τις παρακάτω ενέργειες:</p>
  <ul>
    <li>Ελέγξτε ότι η διεύθυνση (URL) που πληκτρολογήσατε είναι γραμμένη σωστά.</li>
    <li> Επισκεφθείτε τη <a href="./index.php">κεντρική σελίδα</a> και ακολουθήστε το μενού.</li>
  </ul>
</div>
</body>
</html>
