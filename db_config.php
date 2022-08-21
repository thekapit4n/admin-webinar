<?php
ini_set('mbstring.internal_encoding','UTF-8');
ini_set('mbstring.func_overload',7);
header('Content-Type: text/html; charset=UTF-8');


require_once(dirname(__FILE__)."/../../../config/settings.inc.php");

include(dirname(__FILE__).'/../../../config/config.inc.php');
$thisContext=Context::getContext();
if (stripos($thisContext->customer->email,'nurengroup')>0){
}else
	die('Employees only! Please logout and login again to use the system');


//get category data
$conn = mysqli_connect(_DB_SERVER_, _DB_USER_, _DB_PASSWD_, _DB_NAME_);

$host = _DB_SERVER_;
$id = _DB_USER_;
$pass = _DB_PASSWD_;
$db = _DB_NAME_;
//print_r($host.",".$id.",".$pass.",".$db);
				
$conn = mysqli_connect($host,$id,$pass,$db);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  
  mysqli_set_charset($conn,'utf8');
?>

