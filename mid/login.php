<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$username = $_POST["ucid"];
$password = $_POST["pass"];
$res_project=login_project($username,$password);
function login_project($username,$password)
{
 	$data = array('ucid' => $username,'pass' =>$password);
 	$url = "https://web.njit.edu/~oaa46/490.1/RV/back/login.php";
 	$ch = curl_init();
 	curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
 	curl_setopt($ch, CURLOPT_URL, $url);
 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 	$output = curl_exec($ch);
 	curl_close ($ch);
	return $output;


}

$res = array("back" => $res_project);

$respond = json_encode($res);

 echo $respond;
 
?>

