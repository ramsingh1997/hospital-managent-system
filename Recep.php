<html>

<head>
<meta name="spm" content="Hosital Management System">
<title>Registered Patient list</title>
<style>
            #report_table {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
               width:80%;
            }
            #report_table th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #4CAF50;
                color: white;
            }
            .Button {
                background-color: #ff661a; 
                border:none;
                color: white;
                padding: 5px 5px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
            }
        </style>
</head>
<!--41
HOSPITAL MANAGEMENT SYSTEM, MAMCET, 2008IT-->
<body>
<table align=center width=80% cellspacing=0 cellpadding=5>
<tr bgcolor=blue><td align=center><font SIZE=6 color=white>HOSPITAL
MANAGEMENT SYSTEM</font></td></tr>

<tr bgcolor=red><td ><font size=4 color=white>Registered Patient
List</font></td></tr>
<form method="post" action="Recep.php">
<!--<tr><td><table width=750 cellspacing=0 cellpadding=5>
<tr bgcolor=#ccccc><td align="center">Doctor ID </td><td align="center">Doctor
Name</td><td align="center">Specialization</td></tr>-->			

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "Hospital");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM Register";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<div><center><table id='report_table' border=1 align='center'>";
            echo "<tr>";
                echo "<th>Reg_no</th>";
                echo "<th>Pat_name</th>";
                echo "<th>Reg_date</th>";
                echo "<th>Address</th>";
		echo "<th>phno</th>";
                //echo "<th>Reserved_status</th>";
                //echo "<th>Seat_no</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['Reg_no'] . "</td>";
                echo "<td>" . $row['Pat_name'] . "</td>";
                echo "<td>" . $row['Reg_date'] . "</td>";
                echo "<td>" . $row['Address'] . "</td>";
                echo "<td>" . $row['phno'] . "</td>";

		//echo "<td>" . $row['Reserved_status'] . "</td>";
                //echo "<center><td>" . $row['Seat_no'] . "</td></center>";
            echo "</tr>";
        }
        echo "</table></center></div>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "<b>No records to generate Report.<b>";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
										
 <tr><td align=center><a href=ram.html><input type="button" value="CLOSE"></td></tr>
	<tr><td><a href="Recep.html"><input type="button" value="ADD"></a></td></tr>	
</form>	
</table>
</body>
</html>

