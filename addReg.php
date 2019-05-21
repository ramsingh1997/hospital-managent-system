<?php

	require("config.php");


$Reg_no = $_POST["Reg_no"];
$Pat_name = $_POST["Pat_name"];
$Reg_date = $_POST["Reg_date"];
$Address = $_POST["Address"];
$phno = $_POST["phno"];


	$sql = "insert into Register(Reg_no,Pat_name,Reg_date,Address,phno) values ('$Reg_no','$Pat_name','$Reg_date','$Address','$phno');";
if ($config->query($sql) === TRUE) {

} else {
    echo "Error inserting database: " . $config->error;
}

$config->close();
 


?>
	
