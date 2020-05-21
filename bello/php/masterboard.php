<?php

header("Content-Type: application/json; charset=UTF-8");


$get = filter_input(INPUT_POST, "z");
$obj = json_decode($get, false);

//$obj = '';

if(!empty($obj)){


//this insert data in my data base
$dsn1='localhost';
$user= 'root';
$password='?/iPTSJ\^@\$TYOEs\|';  
$dbname  = 'pilot';

//balances for the fund made in php and send to database


$conn = new mysqli ($dsn1, $user, $password, $dbname);

if ($conn->connect_error){
	die("Connection Failed: " . $conn->connect_error);
};


$js1 = "JS1";
$js2 = "JS2";
$js3 = "JS3";

$ss1 = "SS1";
$ss2 = "SS2";
$ss3 = "SS3";

$fterm = "FIRST TERM";
$sterm = "SECOND TERM";
$tterm = "THIRD TERM";

$sql_js11 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$fterm' AND class = '$js1'";
$res_js11 = $conn->query($sql_js11);
$row_js11 = mysqli_fetch_array($res_js11);

$sql_js12 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$sterm' AND class = '$js1'";
$res_js12 = $conn->query($sql_js12);
$row_js12 = mysqli_fetch_array($res_js12);

$sql_js13 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$tterm' AND class = '$js1'";
$res_js13 = $conn->query($sql_js13);
$row_js13 = mysqli_fetch_array($res_js13);

//this is to confirm js2 first, second and third term data field
$sql_js21 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$fterm' AND class = '$js2'";
$res_js21 = $conn->query($sql_js21);
$row_js21 = mysqli_fetch_array($res_js21);

$sql_js22 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$sterm' AND class = '$js2'";
$res_js22 = $conn->query($sql_js22);
$row_js22 = mysqli_fetch_array($res_js22);

$sql_js23 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$tterm' AND class = '$js2'";
$res_js23 = $conn->query($sql_js23);
$row_js23 = mysqli_fetch_array($res_js23);

//this is to confirm js3 first, second and third term data field
$sql_js31 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$fterm' AND class = '$js3'";
$res_js31 = $conn->query($sql_js31);
$row_js31 = mysqli_fetch_array($res_js31);

$sql_js32 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$sterm' AND class = '$js3'";
$res_js32 = $conn->query($sql_js32);
$row_js32 = mysqli_fetch_array($res_js32);

$sql_js33 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$tterm' AND class = '$js2'";
$res_js33 = $conn->query($sql_js33);
$row_js33 = mysqli_fetch_array($res_js33);


//this is to confirm ss1 first, second and third term data field
$sql_ss11 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$fterm' AND class = '$ss1'";
$res_ss11 = $conn->query($sql_ss11);
$row_ss11 = mysqli_fetch_array($res_ss11);

$sql_ss12 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$sterm' AND class = '$ss1'";
$res_ss12 = $conn->query($sql_ss12);
$row_ss12 = mysqli_fetch_array($res_ss12);

$sql_ss13 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$tterm' AND class = '$ss1'";
$res_ss13 = $conn->query($sql_ss13);
$row_ss13 = mysqli_fetch_array($res_ss13);


//this is to confirm ss2 first, second and third term data field
$sql_ss21 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$fterm' AND class = '$ss2'";
$res_ss21 = $conn->query($sql_ss21);
$row_ss21 = mysqli_fetch_array($res_ss21);

$sql_ss22 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$sterm' AND class = '$ss2'";
$res_ss22 = $conn->query($sql_ss22);
$row_ss22 = mysqli_fetch_array($res_ss22);

$sql_ss23 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$tterm' AND class = '$ss2'";
$res_ss23 = $conn->query($sql_ss23);
$row_ss23 = mysqli_fetch_array($res_ss23);


//this is to confirm ss3 first, second and third term data field
$sql_ss31 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$fterm' AND class = '$ss3'";
$res_ss31 = $conn->query($sql_ss31);
$row_ss31 = mysqli_fetch_array($res_ss31);

$sql_ss32 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$sterm' AND class = '$ss3'";
$res_ss32 = $conn->query($sql_ss32);
$row_ss32 = mysqli_fetch_array($res_ss32);

$sql_ss33 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$tterm' AND class = '$ss3'";
$res_ss33 = $conn->query($sql_ss33);
$row_ss33 = mysqli_fetch_array($res_ss33);








if ($res_js11 == True &&
	$res_js12 == True &&
	$res_js13 == True &&
	$res_js21 == True &&
	$res_js22 == True &&
	$res_js23 == True &&
	$res_js31 == True &&
	$res_js32 == True &&
	$res_js33 == True &&
	$res_ss11 == True &&
	$res_ss12 == True &&
	$res_ss13 == True &&
	$res_ss21 == True &&
	$res_ss22 == True &&
	$res_ss23 == True &&
	$res_ss31 == True &&
	$res_ss32 == True &&
	$res_ss33 == True){

	//echo  "Data received successfully!";

//This is for JSS ONE first, second and third term data entering
	if($row_js11 != ''){

		if($obj->js1_fterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->js1_fterm' WHERE  year = '$obj->year_selected' AND term = '$fterm' AND class = '$js1'";
		$result = $conn->query($sql1);

		echo "js1 first term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$fterm', '$js1', '$obj->js1_fterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "JS1 first term fees inserted. \n";
	};


	if($row_js12 != ''){

		if($obj->js1_sterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->js1_sterm' WHERE  year = '$obj->year_selected' AND term = '$sterm' AND class = '$js1'";
		$result = $conn->query($sql1);

		echo "js1 second term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$sterm', '$js1', '$obj->js1_sterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "JS1 second term fees inserted. \n";
	};
	

	if($row_js13 != ''){

		if($obj->js1_tterm != ''){
			$sql1 = "UPDATE termly_fees SET amount = '$obj->js1_tterm' WHERE  year = '$obj->year_selected' AND term = '$tterm' AND class = '$js1'";
						$result = $conn->query($sql1);

						echo "js1 third term updated \n" ;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$tterm', '$js1', '$obj->js1_tterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "JS1 first term fees inserted. \n";
	};




//This is for JSS TWO first, second and third term data entering
	if($row_js21 != ''){

		if($obj->js2_fterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->js1_fterm' WHERE  year = '$obj->year_selected' AND term = '$fterm' AND class = '$js2'";
		$result = $conn->query($sql1);

		echo "JS2 first term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$fterm', '$js2', '$obj->js2_fterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "JS2 first term fees inserted. \n";
	};


	if($row_js22 != ''){

		if($obj->js2_sterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->js2_sterm' WHERE  year = '$obj->year_selected' AND term = '$sterm' AND class = '$js2'";
		$result = $conn->query($sql1);

		echo "JS2 second term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$sterm', '$js2', '$obj->js2_sterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "JS2 second term fees inserted. \n";
	};
	

	if($row_js23 != ''){

		if($obj->js2_tterm != ''){
			$sql1 = "UPDATE termly_fees SET amount = '$obj->js2_tterm' WHERE  year = '$obj->year_selected' AND term = '$tterm' AND class = '$js2'";
						$result = $conn->query($sql1);

						echo "JS3 third term updated \n" ;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$tterm', '$js2', '$obj->js2_tterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "JS2 first term fees inserted. \n";
	};



//This is for JSS THREE first, second and third term data entering
	if($row_js31 != ''){

		if($obj->js3_fterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->js1_fterm' WHERE  year = '$obj->year_selected' AND term = '$fterm' AND class = '$js3'";
		$result = $conn->query($sql1);

		echo "JS3 first term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$fterm', '$js3', '$obj->js3_fterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "JS3 first term fees inserted. \n";
	};


	if($row_js32 != ''){

		if($obj->js3_sterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->js3_sterm' WHERE  year = '$obj->year_selected' AND term = '$sterm' AND class = '$js3'";
		$result = $conn->query($sql1);

		echo "JS3 second term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$sterm', '$js3', '$obj->js3_sterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "JS3 second term fees inserted. \n";
	};
	

	if($row_js33 != ''){

		if($obj->js3_tterm != ''){
			$sql1 = "UPDATE termly_fees SET amount = '$obj->js3_tterm' WHERE  year = '$obj->year_selected' AND term = '$tterm' AND class = '$js3'";
						$result = $conn->query($sql1);

						echo "JS3 third term updated \n" ;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$tterm', '$js3', '$obj->js3_tterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "JS3 first term fees inserted. \n";
	};




//This is for SS ONE first, second and third term data entering
	if($row_ss11 != ''){

		if($obj->ss1_fterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->ss1_fterm' WHERE  year = '$obj->year_selected' AND term = '$fterm' AND class = '$ss1'";
		$result = $conn->query($sql1);

		echo "SS1 first term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$fterm', '$ss1', '$obj->ss1_fterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "SS1 first term fees inserted. \n";
	};

	if($row_ss12 != ''){

		if($obj->ss1_sterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->ss1_sterm' WHERE  year = '$obj->year_selected' AND term = '$sterm' AND class = '$ss1'";
		$result = $conn->query($sql1);

		echo "SS1 second term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$sterm', '$ss1', '$obj->ss1_sterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "SS1 second term fees inserted. \n";
	};

	if($row_ss13 != ''){

		if($obj->ss1_tterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->ss1_tterm' WHERE  year = '$obj->year_selected' AND term = '$tterm' AND class = '$ss1'";
		$result = $conn->query($sql1);

		echo "SS1 third term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$tterm', '$ss1', '$obj->ss1_tterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "SS1 first term fees inserted. \n";
	};



//This is for SS TWO first, second and third term data entering
	if($row_ss21 != ''){

		if($obj->ss2_fterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->ss2_fterm' WHERE  year = '$obj->year_selected' AND term = '$fterm' AND class = '$ss2'";
		$result = $conn->query($sql1);

		echo "SS2 first term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$fterm', '$ss2', '$obj->ss2_fterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "SS2 first term fees inserted. \n";
	};

	if($row_ss22 != ''){

		if($obj->ss2_sterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->ss2_sterm' WHERE  year = '$obj->year_selected' AND term = '$sterm' AND class = '$ss2'";
		$result = $conn->query($sql1);

		echo "SS2 second term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$sterm', '$ss2', '$obj->ss2_sterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "SS2 second term fees inserted. \n";
	};

	if($row_ss23 != ''){

		if($obj->ss2_tterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->ss2_tterm' WHERE  year = '$obj->year_selected' AND term = '$tterm' AND class = '$ss2'";
		$result = $conn->query($sql1);

		echo "SS2 third term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$tterm', '$ss2', '$obj->ss2_tterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "SS2 third term fees inserted. \n";
	};
	



//This is for SS THREE first, second and third term data entering
	if($row_ss31 != ''){

		if($obj->ss3_fterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->ss3_fterm' WHERE  year = '$obj->year_selected' AND term = '$fterm' AND class = '$ss3'";
		$result = $conn->query($sql1);

		echo "SS3 first term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$fterm', '$ss3', '$obj->ss3_fterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "SS3 first term fees inserted. \n";
	};

	if($row_ss12 != ''){

		if($obj->ss1_sterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->ss3_sterm' WHERE  year = '$obj->year_selected' AND term = '$sterm' AND class = '$ss3'";
		$result = $conn->query($sql1);

		echo "SS3 second term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$sterm', '$ss3', '$obj->ss3_sterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "SS3 second term fees inserted. \n";
	};

	if($row_ss33 != ''){

		if($obj->ss3_tterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->ss3_tterm' WHERE  year = '$obj->year_selected' AND term = '$tterm' AND class = '$ss3'";
		$result = $conn->query($sql1);

		echo "SS3 third term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$tterm', '$ss3', '$obj->ss3_tterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "SS3 third term fees inserted. \n";
	};
	



//	header("refresh: 1000; location: ../dashboard.html");

/*
print <<< HERE
Your Welcome To Our Room Fill with Men Of Differet Potential.<br>
I Believe You Will Enjoy Residing Here With Us $fname.
<br>
<h3> We Got Your Data Below</h3>
HERE;




//open file for output
$fp = fopen(“contacts.txt”, “a”);
//write to the file
fwrite($fp, $output);
fclose($fp);

//open up the contact file
$fp = fopen(“contacts.txt”, “r”) or die(“error”);
//print a line at a time
while (!feof($fp)){
$line = fgets($fp);
print “$line <br />”;
}
//close the file
fclose($fp);

// writing to and reading from a comma-separated value file
//generate output for text file
$output = $fName . “\t”;
$output .= $lName . “\t”;
$output .= $email . “\t”;
$output .= $phone . “\n”;

print <<< HERE
<table border = "1">
<tr>
<th>First</th>
<th>Last</th>
<th>email</th>
<th>phone</th>
</tr>
HERE;
$data = file("contacts.csv");
foreach ($data as $line){
$lineArray = explode("\t", $line);
list($fName, $lName, $email, $phone) = $lineArray;
print <<< HERE
<tr>
<td>$fName</td>
<td>$lName</td>
<td>$email</td>
<td>$phone</td>
</tr>
HERE;
} // end foreach
//print the bottom of the table
print "</table> \n";
*/
//echo json_encode($responce);
//header("refresh:20; url=maths.html");


} else {echo "ERROR: " . $sql1 . "<br>" . $sql2 . "<br>" . $sql3 . "<br>" . $sql4 . "<br>"  . $conn->error;
	};
$conn->close();




} else {
	 echo  "Your form is empty please input the requested data!";
};
//echo  "A drop of comment will enhance our services to you!";

	//header("refresh: 10");

?>



