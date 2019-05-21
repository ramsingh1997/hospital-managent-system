<?php
    	$hostname='localhost';
    	$user = 'root';
    	$password = '';
    	$db = 'Hospital';

$db = new mysqli($hostname, $user, $password, $db);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
echo "Connected successfully";


          
?>

