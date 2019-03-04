<?php
	header("content-type: text/html;charset=utf-8");
	session_start();

	$amka = $_POST["amka"];


	// Create connection
	$conn = mysqli_connect("localhost", "root", "", "ika_db");
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$amka_ergodoth = $_SESSION["amka"];
	$sql = "UPDATE ergodoths SET amka_ergazomenou = '$amka' where amka = '$amka_ergodoth' ";
	if ($conn->query($sql) === TRUE) {
		$_SESSION["amka_ergazomenou"] = $amka;
		header('Location: ../src/success.php');
	}
	else{
		header('Location: ../src/forma-asfalishs.php');
	}

	$conn->close();
?>