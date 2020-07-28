<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$username = $_POST["ucid"];
$password = $_POST["pass"];
$info = ["ucid" => $username, "pass" => $password];
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_POSTFIELDS, $info); 
curl_setopt($ch, CURLOPT_URL, "https://web.njit.edu/~oaa46/490.1/RV/mid/midlogin.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch); 
curl_close($ch); 
echo $response; 


?>