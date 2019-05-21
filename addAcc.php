<?php

	require("config.php");


$Reg_no = $_POST["Reg_no"];
$Recp_no = $_POST["Recp_no"];
$Reg_date = $_POST["Reg_date"];
$Medicine_fees = $_POST["Medicine_fees"];
$Lab_fees = $_POST["Lab_fees"];
$Dr_fees = $_POST["Dr_fees"];


	$sql = "insert into Account(Reg_no,Recp_no,Reg_date,Medicine_fees,Lab_fees,Dr_fees) values ('$Reg_no','$Recp_no','$Reg_date','$Medicine_fees','$Lab_fees','$Dr_fees');";
if ($config->query($sql) === TRUE) {

} else {
    echo "Error inserting database: " . $config->error;
}

$config->close();
 


?>
	
