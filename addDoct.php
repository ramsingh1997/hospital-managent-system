<?php

	require("config.php");


$Dr_id = $_POST["Dr_id"];
$Dr_name = $_POST["Dr_name"];
$specialization = $_POST["specialization"];


	$sql = "insert into Doctor(Dr_id,Dr_name,specialization) values ('$Dr_id','$Dr_name','$specialization');";
if ($config->query($sql) === TRUE) {
 header("location:doct.html");
} else {
    echo "Error inserting database: " . $config->error;
}

$config->close();
 


?>
	
