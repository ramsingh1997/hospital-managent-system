<?php

	require("db.php");


$Reg_no = $_POST["Reg_no"];
$Pat_name = $_POST["Pat_name"];
$Gender = $_POST["Gender"];
$Age = $_POST["Age"];
$Phone_no = $_POST["Phone_no"];
$Dr_id = $_POST["Dr_id"];


	$sql = "insert into patient_detail(Reg_no,Pat_name,Gender,Age,Phone_no,Dr_id) values ('$Reg_no','$Pat_name','$Gender','$Age','$Phone_no','$Dr_id');";
if ($db->query($sql) === TRUE) {
    echo "Records added successfully.";
    header("location:addPat.php");

} else {
    echo "Error inserting database: " . $db->error;
}

$db->close();
 


?>
	
