<?php
if(!isset($_POST['submit'])){
    echo "ASd";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = "EUMoblity contact";

echo mail("mwgoinda@gmail.com","EUMobility",$message)?"OK":"ERROR";
?>