<?php
$url='localhost';
$username='root';
$password='';
$dbname = "event photography";
$conn= new mysqli($url, $username, $password, $dbname);
if($conn->connect_error){
 die('Could not Connect My Sql:' .$conn->connect_error);
}
?>