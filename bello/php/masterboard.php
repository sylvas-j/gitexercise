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



$kind = "KINDERGARTEN";
//CRECHE NOW GOES WITH THE NAME PRE NURSERY
$cre = "PRE NURSERY";

$nur1 = "NURSERY ONE";
$nur2 = "NURSERY TWO";
$nur3 = "TRANSCENSION";

$bas1 = "BASIC ONE";
$bas2 = "BASIC TWO";
$bas3 = "BASIC THREE";
$bas4 = "BASIC FOUR";
$bas5 = "BASIC FIVE";

$js1 = "JS1";
$js2 = "JS2";
$js3 = "JS3";

$ss1 = "SS1";
$ss2 = "SS2";
$ss3 = "SS3";

$fterm = "FIRST TERM";
$sterm = "SECOND TERM";
$tterm = "THIRD TERM";


$sql_kind1 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$fterm' AND class = '$kind'";
$res_kind1 = $conn->query($sql_kind1);
$row_kind1 = mysqli_fetch_array($res_kind1);

$sql_kind2 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$sterm' AND class = '$kind'";
$res_kind2 = $conn->query($sql_kind2);
$row_kind2 = mysqli_fetch_array($res_kind2);

$sql_kind3 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$tterm' AND class = '$kind'";
$res_kind3 = $conn->query($sql_kind3);
$row_kind3 = mysqli_fetch_array($res_kind3);

$sql_cre1 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$fterm' AND class = '$cre'";
$res_cre1 = $conn->query($sql_cre1);
$row_cre1 = mysqli_fetch_array($res_cre1);

$sql_cre2 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$sterm' AND class = '$cre'";
$res_cre2 = $conn->query($sql_cre2);
$row_cre2 = mysqli_fetch_array($res_cre2);

$sql_cre3 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$tterm' AND class = '$cre'";
$res_cre3 = $conn->query($sql_cre3);
$row_cre3 = mysqli_fetch_array($res_cre3);


$sql_nur11 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$fterm' AND class = '$nur1'";
$res_nur11 = $conn->query($sql_nur11);
$row_nur11 = mysqli_fetch_array($res_nur11);

$sql_nur12 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$sterm' AND class = '$nur1'";
$res_nur12 = $conn->query($sql_nur12);
$row_nur12 = mysqli_fetch_array($res_nur12);

$sql_nur13 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$tterm' AND class = '$nur1'";
$res_nur13 = $conn->query($sql_nur13);
$row_nur13 = mysqli_fetch_array($res_nur13);


$sql_nur21 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$fterm' AND class = '$nur2'";
$res_nur21 = $conn->query($sql_nur21);
$row_nur21 = mysqli_fetch_array($res_nur21);

$sql_nur22 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$sterm' AND class = '$nur2'";
$res_nur22 = $conn->query($sql_nur22);
$row_nur22 = mysqli_fetch_array($res_nur22);

$sql_nur23 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$tterm' AND class = '$nur2'";
$res_nur23 = $conn->query($sql_nur23);
$row_nur23 = mysqli_fetch_array($res_nur23);


$sql_nur31 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$fterm' AND class = '$nur3'";
$res_nur31 = $conn->query($sql_nur31);
$row_nur31 = mysqli_fetch_array($res_nur31);

$sql_nur32 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$sterm' AND class = '$nur3'";
$res_nur32 = $conn->query($sql_nur32);
$row_nur32 = mysqli_fetch_array($res_nur32);

$sql_nur33 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$tterm' AND class = '$nur3'";
$res_nur33 = $conn->query($sql_nur33);
$row_nur33 = mysqli_fetch_array($res_nur33);



$sql_bas11 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$fterm' AND class = '$bas1'";
$res_bas11 = $conn->query($sql_bas11);
$row_bas11 = mysqli_fetch_array($res_bas11);

$sql_bas12 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$sterm' AND class = '$bas1'";
$res_bas12 = $conn->query($sql_bas12);
$row_bas12 = mysqli_fetch_array($res_bas12);

$sql_bas13 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$tterm' AND class = '$bas1'";
$res_bas13 = $conn->query($sql_bas13);
$row_bas13 = mysqli_fetch_array($res_bas13);

$sql_bas21 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$fterm' AND class = '$bas2'";
$res_bas21 = $conn->query($sql_bas21);
$row_bas21 = mysqli_fetch_array($res_bas21);

$sql_bas22 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$sterm' AND class = '$bas2'";
$res_bas22 = $conn->query($sql_bas22);
$row_bas22 = mysqli_fetch_array($res_bas22);

$sql_bas23 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$tterm' AND class = '$bas2'";
$res_bas23 = $conn->query($sql_bas23);
$row_bas23 = mysqli_fetch_array($res_bas23);

$sql_bas31 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$fterm' AND class = '$bas3'";
$res_bas31 = $conn->query($sql_bas31);
$row_bas31 = mysqli_fetch_array($res_bas31);

$sql_bas32 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$sterm' AND class = '$bas3'";
$res_bas32 = $conn->query($sql_bas32);
$row_bas32 = mysqli_fetch_array($res_bas32);

$sql_bas33 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$tterm' AND class = '$bas3'";
$res_bas33 = $conn->query($sql_bas33);
$row_bas33 = mysqli_fetch_array($res_bas33);

$sql_bas41 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$fterm' AND class = '$bas4'";
$res_bas41 = $conn->query($sql_bas41);
$row_bas41 = mysqli_fetch_array($res_bas41);

$sql_bas42 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$sterm' AND class = '$bas4'";
$res_bas42 = $conn->query($sql_bas42);
$row_bas42 = mysqli_fetch_array($res_bas42);

$sql_bas43 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$tterm' AND class = '$bas4'";
$res_bas43 = $conn->query($sql_bas43);
$row_bas43 = mysqli_fetch_array($res_bas43);

$sql_bas51 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$fterm' AND class = '$bas5'";
$res_bas51 = $conn->query($sql_bas51);
$row_bas51 = mysqli_fetch_array($res_bas51);

$sql_bas52 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$sterm' AND class = '$bas5'";
$res_bas52 = $conn->query($sql_bas52);
$row_bas52 = mysqli_fetch_array($res_bas52);

$sql_bas53 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$tterm' AND class = '$bas5'";
$res_bas53 = $conn->query($sql_bas53);
$row_bas53 = mysqli_fetch_array($res_bas53);




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








if ($sql_kind1 == True &&
	$sql_kind2 == True &&
	$sql_kind3 == True &&
	$res_cre1 == True &&
	$res_cre2 == True &&
	$res_cre3 == True &&
	$res_nur11 == True &&
	$res_nur12 == True &&
	$res_nur13 == True &&
	$res_nur21 == True &&
	$res_nur22 == True &&
	$res_nur23 == True &&
	$res_nur31 == True &&
	$res_nur32 == True &&
	$res_nur33 == True &&
	$res_bas11 == True &&
	$res_bas12 == True &&
	$res_bas13 == True &&
	$res_bas21 == True &&
	$res_bas22 == True &&
	$res_bas23 == True &&
	$res_bas31 == True &&
	$res_bas32 == True &&
	$res_bas33 == True &&
	$res_bas41 == True &&
	$res_bas42 == True &&
	$res_bas43 == True &&
	$res_bas51 == True &&
	$res_bas52 == True &&
	$res_bas53 == True &&
	$res_js11 == True &&
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

	
	if($row_kind1 != ''){

		if($obj->kind_fterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->kind_fterm' WHERE  year = '$obj->year_selected' AND term = '$fterm' AND class = '$kind'";
		$result = $conn->query($sql1);

		echo "KINDERGARTEN first term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$fterm', '$kind', '$obj->kind_fterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "KINDERGARTEN first term fees inserted. \n";
	};
	
	if($row_kind2 != ''){

		if($obj->kind_sterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->kind_sterm' WHERE  year = '$obj->year_selected' AND term = '$sterm' AND class = '$kind'";
		$result = $conn->query($sql1);

		echo "KINDERGARTEN second term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$sterm', '$kind', '$obj->kind_sterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "KINDERGARTEN second term fees inserted. \n";
	};
	
	if($row_kind3 != ''){

		if($obj->kind_tterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->kind_tterm' WHERE  year = '$obj->year_selected' AND term = '$tterm' AND class = '$kind'";
		$result = $conn->query($sql1);

		echo "KINDERGARTEN third term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$tterm', '$kind', '$obj->kind_tterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "KINDERGARTEN third term fees inserted. \n";
	};
	
	if($row_cre1 != ''){

		if($obj->cre_fterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->cre_fterm' WHERE  year = '$obj->year_selected' AND term = '$fterm' AND class = '$cre'";
		$result = $conn->query($sql1);

		echo "PRE NURSERY first term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$fterm', '$cre', '$obj->cre_fterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "PRE NURSERY first term fees inserted. \n";
	};
	
	if($row_cre2 != ''){

		if($obj->cre_sterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->cre_sterm' WHERE  year = '$obj->year_selected' AND term = '$sterm' AND class = '$cre'";
		$result = $conn->query($sql1);

		echo "PRE NURSERY second term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$sterm', '$cre', '$obj->cre_sterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "PRE NURSERY second term fees inserted. \n";
	};
	
	if($row_cre3 != ''){

		if($obj->cre_tterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->cre_tterm' WHERE  year = '$obj->year_selected' AND term = '$tterm' AND class = '$cre'";
		$result = $conn->query($sql1);

		echo "PRE NURSERY third term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$tterm', '$cre', '$obj->cre_tterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "PRE NURSERY third term fees inserted. \n";
	};
	

	if($row_nur11 != ''){

		if($obj->nur1_fterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->nur1_fterm' WHERE  year = '$obj->year_selected' AND term = '$fterm' AND class = '$nur1'";
		$result = $conn->query($sql1);

		echo "NURSERY ONE first term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$fterm', '$nur1', '$obj->nur1_fterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "NURSERY ONE first term fees inserted. \n";
	};

	if($row_nur12 != ''){

		if($obj->nur1_sterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->nur1_sterm' WHERE  year = '$obj->year_selected' AND term = '$sterm' AND class = '$nur1'";
		$result = $conn->query($sql1);

		echo "NURSERY ONE second term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$sterm', '$nur1', '$obj->nur1_sterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "NURSERY ONE second term fees inserted. \n";
	};

	if($row_nur13 != ''){

		if($obj->nur1_tterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->nur1_tterm' WHERE  year = '$obj->year_selected' AND term = '$tterm' AND class = '$nur1'";
		$result = $conn->query($sql1);

		echo "NURSERY ONE third term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$tterm', '$nur1', '$obj->nur1_tterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "NURSERY ONE third term fees inserted. \n";
	};




	if($row_nur21 != ''){

		if($obj->nur2_fterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->nur2_fterm' WHERE  year = '$obj->year_selected' AND term = '$fterm' AND class = '$nur2'";
		$result = $conn->query($sql1);

		echo "NURSERY TWO first term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$fterm', '$nur2', '$obj->nur2_fterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "NURSERY TWO first term fees inserted. \n";
	};

	if($row_nur22 != ''){

		if($obj->nur2_sterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->nur2_sterm' WHERE  year = '$obj->year_selected' AND term = '$sterm' AND class = '$nur2'";
		$result = $conn->query($sql1);

		echo "NURSERY TWO second term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$sterm', '$nur2', '$obj->nur2_sterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "NURSERY TWO second term fees inserted. \n";
	};

	if($row_nur23 != ''){

		if($obj->nur2_tterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->nur2_tterm' WHERE  year = '$obj->year_selected' AND term = '$tterm' AND class = '$nur2'";
		$result = $conn->query($sql1);

		echo "NURSERY TWO third term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$tterm', '$nur2', '$obj->nur2_tterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "NURSERY TWO third term fees inserted. \n";
	};



	if($row_nur31 != ''){

		if($obj->nur3_fterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->nur3_fterm' WHERE  year = '$obj->year_selected' AND term = '$fterm' AND class = '$nur3'";
		$result = $conn->query($sql1);

		echo "TRANSCENSION first term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$fterm', '$nur3', '$obj->nur3_fterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "TRANSCENSION first term fees inserted. \n";
	};

	if($row_nur32 != ''){

		if($obj->nur3_sterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->nur3_sterm' WHERE  year = '$obj->year_selected' AND term = '$sterm' AND class = '$nur3'";
		$result = $conn->query($sql1);

		echo "TRANSCENSION second term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$sterm', '$nur3', '$obj->nur3_sterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "TRANSCENSION second term fees inserted. \n";
	};

	if($row_nur33 != ''){

		if($obj->nur3_tterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->nur3_tterm' WHERE  year = '$obj->year_selected' AND term = '$tterm' AND class = '$nur3'";
		$result = $conn->query($sql1);

		echo "TRANSCENSION third term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$tterm', '$nur3', '$obj->nur3_tterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "TRANSCENSION third term fees inserted. \n";
	};





	if($row_bas11 != ''){

		if($obj->bas1_fterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->bas1_fterm' WHERE  year = '$obj->year_selected' AND term = '$fterm' AND class = '$bas1'";
		$result = $conn->query($sql1);

		echo "BASIC ONE first term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$fterm', '$bas1', '$obj->bas1_fterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "BASIC ONE first term fees inserted. \n";
	};

	if($row_bas12 != ''){

		if($obj->bas1_sterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->bas1_sterm' WHERE  year = '$obj->year_selected' AND term = '$sterm' AND class = '$bas1'";
		$result = $conn->query($sql1);

		echo "BASIC ONE second term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$sterm', '$bas1', '$obj->bas1_sterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "BASIC ONE second term fees inserted. \n";
	};
	if($row_bas13 != ''){

		if($obj->bas1_tterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->bas1_tterm' WHERE  year = '$obj->year_selected' AND term = '$tterm' AND class = '$bas1'";
		$result = $conn->query($sql1);

		echo "BASIC ONE third term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$tterm', '$bas1', '$obj->bas1_tterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "BASIC ONE third term fees inserted. \n";
	};


	
	if($row_bas21 != ''){

		if($obj->bas2_fterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->bas2_fterm' WHERE  year = '$obj->year_selected' AND term = '$fterm' AND class = '$bas2'";
		$result = $conn->query($sql1);

		echo "BASIC TWO first term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$fterm', '$bas2', '$obj->bas2_fterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "BASIC TWO first term fees inserted. \n";
	};

	if($row_bas22 != ''){

		if($obj->bas2_sterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->bas2_sterm' WHERE  year = '$obj->year_selected' AND term = '$sterm' AND class = '$bas2'";
		$result = $conn->query($sql1);

		echo "BASIC TWO second term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$sterm', '$bas2', '$obj->bas2_sterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "BASIC TWO second term fees inserted. \n";
	};
	if($row_bas23 != ''){

		if($obj->bas2_tterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->bas2_tterm' WHERE  year = '$obj->year_selected' AND term = '$tterm' AND class = '$bas2'";
		$result = $conn->query($sql1);

		echo "BASIC TWO third term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$tterm', '$bas2', '$obj->bas2_tterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "BASIC TWO third term fees inserted. \n";
	};


	
	if($row_bas31 != ''){

		if($obj->bas3_fterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->bas3_fterm' WHERE  year = '$obj->year_selected' AND term = '$fterm' AND class = '$bas3'";
		$result = $conn->query($sql1);

		echo "BASIC THREE first term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$fterm', '$bas3', '$obj->bas3_fterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "BASIC THREE first term fees inserted. \n";
	};

	if($row_bas32 != ''){

		if($obj->bas3_sterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->bas3_sterm' WHERE  year = '$obj->year_selected' AND term = '$sterm' AND class = '$bas3'";
		$result = $conn->query($sql1);

		echo "BASIC THREE second term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$sterm', '$bas3', '$obj->bas3_sterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "BASIC THREE second term fees inserted. \n";
	};
	if($row_bas33 != ''){

		if($obj->bas3_tterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->bas3_tterm' WHERE  year = '$obj->year_selected' AND term = '$tterm' AND class = '$bas3'";
		$result = $conn->query($sql1);

		echo "BASIC THREE third term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$tterm', '$bas3', '$obj->bas3_tterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "BASIC THREE third term fees inserted. \n";
	};

	
	if($row_bas41 != ''){

		if($obj->bas4_fterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->bas4_fterm' WHERE  year = '$obj->year_selected' AND term = '$fterm' AND class = '$bas4'";
		$result = $conn->query($sql1);

		echo "BASIC FOUR first term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$fterm', '$bas4', '$obj->bas4_fterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "BASIC FOUR first term fees inserted. \n";
	};

	if($row_bas42 != ''){

		if($obj->bas4_sterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->bas4_sterm' WHERE  year = '$obj->year_selected' AND term = '$sterm' AND class = '$bas4'";
		$result = $conn->query($sql1);

		echo "BASIC FOUR second term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$sterm', '$bas4', '$obj->bas4_sterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "BASIC FOUR second term fees inserted. \n";
	};
	if($row_bas43 != ''){

		if($obj->bas4_tterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->bas4_tterm' WHERE  year = '$obj->year_selected' AND term = '$tterm' AND class = '$bas4'";
		$result = $conn->query($sql1);

		echo "BASIC FOUR third term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$tterm', '$bas4', '$obj->bas4_tterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "BASIC FOUR third term fees inserted. \n";
	};

	
	if($row_bas51 != ''){

		if($obj->bas5_fterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->bas5_fterm' WHERE  year = '$obj->year_selected' AND term = '$fterm' AND class = '$bas5'";
		$result = $conn->query($sql1);

		echo "BASIC FIVE first term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$fterm', '$bas5', '$obj->bas5_fterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "BASIC FIVE first term fees inserted. \n";
	};

	if($row_bas52 != ''){

		if($obj->bas5_sterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->bas5_sterm' WHERE  year = '$obj->year_selected' AND term = '$sterm' AND class = '$bas5'";
		$result = $conn->query($sql1);

		echo "BASIC FIVE second term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$sterm', '$bas5', '$obj->bas5_sterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "BASIC FIVE second term fees inserted. \n";
	};
	if($row_bas53 != ''){

		if($obj->bas5_tterm != ''){

		$sql1 = "UPDATE termly_fees SET amount = '$obj->bas5_tterm' WHERE  year = '$obj->year_selected' AND term = '$tterm' AND class = '$bas5'";
		$result = $conn->query($sql1);

		echo "BASIC FIVE third term amount updated \n" ;
		//echo $row1;
		};
	}else{
		$sql1 = "INSERT INTO termly_fees (year, term, class, amount)
		VALUES ('$obj->year_selected', '$tterm', '$bas5', '$obj->bas5_tterm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "BASIC FIVE third term fees inserted. \n";
	};









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

		$sql1 = "UPDATE termly_fees SET amount = '$obj->js2_fterm' WHERE  year = '$obj->year_selected' AND term = '$fterm' AND class = '$js2'";
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

		$sql1 = "UPDATE termly_fees SET amount = '$obj->js3_fterm' WHERE  year = '$obj->year_selected' AND term = '$fterm' AND class = '$js3'";
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


} else {echo "ERROR: " . $sql1 . "<br>" . $conn->error;
	};
$conn->close();




} else {
	 echo  "Your form is empty please input the requested data!";
};
//echo  "A drop of comment will enhance our services to you!";

	//header("refresh: 10");

?>



