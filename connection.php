<?php 
 $servername="localhost";
 $username="username";
 $password="password";
 $dbname="Matthew";

 $conn= new mysqli($servername,$username,$password,$dbname);
/*if ($conn->connect_error) {
 	die("Connect Failed: ".$conn->connect_error);

 }
 else{
 	echo "Connected Sucessfully";
 }
 $sql="SELECT * FROM games";
$result=$conn->query($sql);

if ($result->num_rows>0) {
 	while($row=$result->fetch_assoc()) {
 		echo $row["Name"]." ".$row["Age"]."<br>";
 	}
 }
 $conn->close();

*/