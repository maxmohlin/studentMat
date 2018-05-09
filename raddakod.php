<?php

include "connect.php";


$fnamn = $mysqli->real_escape_string($_REQUEST['Fnamn']);
$lnamn = $mysqli->real_escape_string($_REQUEST['Lnamn']);
$email = $mysqli->real_escape_string($_REQUEST['Email']);
$kommentar = $mysqli->real_escape_string($_REQUEST['kommentar']);

$sql = "INSERT INTO kommentarer (förnamn, efternamn, email, kommentar)
VALUES ('$fnamn', '$lnamn', '$email', '$kommentar')";

if($mysqli->query($sql) === true){
    echo " Kommentaren är skickad! Du blir snart skickad till nästa sida.";
  } else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
    }

// Close connection
$mysqli->close();
?>


<?php
$user = 'root';
$password = 'root';
$db = 'Comments';
$host = 'localhost';
$port = 8889;

$mysqli = new mysqli("$host:$port",$user, $password, $db);

 if (mysqli_connect_error()) {
   die('Connect Error ('.mysqli_connect_error().') '.mysqli_connect_error());
 }
//else {
// echo 'Connected successfully.';
//}


?>
