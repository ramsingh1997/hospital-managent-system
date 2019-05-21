<?php
    	$hostname='localhost';
    	$user = 'root';
    	$password = '';
    	$mysql_database = 'Hospital';
  echo"4";  	
$config = mysqli_connect($hostname, $user, $password,$mysql_database);

       if(!$config){
             die("DATABASE CONNECTION FAILED".mysqli_connect_error());
         }
echo "3";
    
         $selected_db= mysqli_select_db($config,"Hospital");
           if(!$selected_db){
               die("DATABASE SELECTION FAILED".mysqli_error());
          }

          
?>

