<?php

	$fname=$_POST['fname'];
    $lname= $_POST['lname'];
    $number= $_POST['number'];

	// echo "aavo ".$fname.$lname."<br>";
	// echo "taro mobile no. : " .$number;

	$conn=mysqli_connect("localhost","root","","project");
	// if ($conn) {
	// 	echo " connect thygyu";
	// }

mysqli_query($conn,"insert into formenquiry (firstname,lastname,mobileno) values ('$fname','$lname','$number')");	 

?> 