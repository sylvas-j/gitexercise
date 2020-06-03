

<?php

header("Content-Type: application/json; charset=UTF-8");

$get = filter_input(INPUT_POST, "g");
$obj = json_decode($get, false);


if(!empty($obj)){



//this insert data in my data base
$dsn1='localhost';
$user= 'root';
$password='?/iPTSJ\^@\$TYOEs\|';  
$dbname  = 'pilot';

$conn = new mysqli ($dsn1, $user, $password, $dbname);

if ($conn->connect_error){
	die("Connection Failed: " . $conn->connect_error);
};


$kind = "KINDERGARTEN";
$cre = "CRECHE";

$nur1 = "NURSERY ONE";
$nur2 = "NURSERY TWO";
$nur3 = "NURSERY THREE";


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
//$row_js11 = mysqli_fetch_array($res_js11);

if ($res_kind1 == True){
	//echo  "Thanks for your cooperation!";
while($row_kind1 = mysqli_fetch_array($res_kind1)){

	$data['kind_fterm_amt'] = $row_kind1['amount'];
};
};

$sql_kind2 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$sterm' AND class = '$kind'";
$res_kind2 = $conn->query($sql_kind2);
//$row_js11 = mysqli_fetch_array($res_js11);

if ($res_kind2 == True){
	//echo  "Thanks for your cooperation!";
while($row_kind2 = mysqli_fetch_array($res_kind2)){

	$data['kind_sterm_amt'] = $row_kind2['amount'];
};
};

$sql_kind3 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$tterm' AND class = '$kind'";
$res_kind3 = $conn->query($sql_kind3);
//$row_js11 = mysqli_fetch_array($res_js11);

if ($res_kind3 == True){
	//echo  "Thanks for your cooperation!";
while($row_kind3 = mysqli_fetch_array($res_kind3)){

	$data['kind_tterm_amt'] = $row_kind3['amount'];
};
};

$sql_cre1 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$fterm' AND class = '$cre'";
$res_cre1 = $conn->query($sql_cre1);
//$row_js11 = mysqli_fetch_array($res_js11);

if ($res_cre1 == True){
	//echo  "Thanks for your cooperation!";
while($row_cre1 = mysqli_fetch_array($res_cre1)){

	$data['cre_fterm_amt'] = $row_cre1['amount'];
};
};

$sql_cre2 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$sterm' AND class = '$cre'";
$res_cre2 = $conn->query($sql_cre2);
//$row_js11 = mysqli_fetch_array($res_js11);

if ($res_cre2 == True){
	//echo  "Thanks for your cooperation!";
while($row_cre2 = mysqli_fetch_array($res_cre2)){

	$data['cre_sterm_amt'] = $row_cre2['amount'];
};
};

$sql_cre3 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$tterm' AND class = '$cre'";
$res_cre3 = $conn->query($sql_cre3);
//$row_js11 = mysqli_fetch_array($res_js11);

if ($res_cre3 == True){
	//echo  "Thanks for your cooperation!";
while($row_cre3 = mysqli_fetch_array($res_cre3)){

	$data['cre_tterm_amt'] = $row_cre3['amount'];
};
};


$sql_nur11 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$fterm' AND class = '$nur1'";
$res_nur11 = $conn->query($sql_nur11);
//$row_js11 = mysqli_fetch_array($res_js11);

if ($res_nur11 == True){
	//echo  "Thanks for your cooperation!";
while($row_nur11 = mysqli_fetch_array($res_nur11)){

	$data['nur1_fterm_amt'] = $row_nur11['amount'];
};
};

$sql_nur12 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$sterm' AND class = '$nur1'";
$res_nur12 = $conn->query($sql_nur12);
//$row_js11 = mysqli_fetch_array($res_js11);

if ($res_nur12 == True){
	//echo  "Thanks for your cooperation!";
while($row_nur12 = mysqli_fetch_array($res_nur12)){

	$data['nur1_sterm_amt'] = $row_nur12['amount'];
};
};

$sql_nur13 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$tterm' AND class = '$nur1'";
$res_nur13 = $conn->query($sql_nur13);
//$row_js11 = mysqli_fetch_array($res_js11);

if ($res_nur13 == True){
	//echo  "Thanks for your cooperation!";
while($row_nur13 = mysqli_fetch_array($res_nur13)){

	$data['nur1_tterm_amt'] = $row_nur13['amount'];
};
};



$sql_nur21 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$fterm' AND class = '$nur2'";
$res_nur21 = $conn->query($sql_nur21);
//$row_js11 = mysqli_fetch_array($res_js11);

if ($res_nur21 == True){
	//echo  "Thanks for your cooperation!";
while($row_nur21 = mysqli_fetch_array($res_nur21)){

	$data['nur2_fterm_amt'] = $row_nur21['amount'];
};
};

$sql_nur22 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$sterm' AND class = '$nur2'";
$res_nur22 = $conn->query($sql_nur22);
//$row_js11 = mysqli_fetch_array($res_js11);

if ($res_nur22 == True){
	//echo  "Thanks for your cooperation!";
while($row_nur22 = mysqli_fetch_array($res_nur22)){

	$data['nur2_sterm_amt'] = $row_nur22['amount'];
};
};

$sql_nur23 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$tterm' AND class = '$nur2'";
$res_nur23 = $conn->query($sql_nur23);
//$row_js11 = mysqli_fetch_array($res_js11);

if ($res_nur23 == True){
	//echo  "Thanks for your cooperation!";
while($row_nur23 = mysqli_fetch_array($res_nur23)){

	$data['nur2_tterm_amt'] = $row_nur23['amount'];
};
};



$sql_nur31 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$fterm' AND class = '$nur3'";
$res_nur31 = $conn->query($sql_nur31);
//$row_js11 = mysqli_fetch_array($res_js11);

if ($res_nur31 == True){
	//echo  "Thanks for your cooperation!";
while($row_nur31 = mysqli_fetch_array($res_nur31)){

	$data['nur3_fterm_amt'] = $row_nur31['amount'];
};
};

$sql_nur32 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$sterm' AND class = '$nur3'";
$res_nur32 = $conn->query($sql_nur32);
//$row_js11 = mysqli_fetch_array($res_js11);

if ($res_nur32 == True){
	//echo  "Thanks for your cooperation!";
while($row_nur32 = mysqli_fetch_array($res_nur32)){

	$data['nur3_sterm_amt'] = $row_nur32['amount'];
};
};

$sql_nur33 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$tterm' AND class = '$nur3'";
$res_nur33 = $conn->query($sql_nur33);
//$row_js11 = mysqli_fetch_array($res_js11);

if ($res_nur33 == True){
	//echo  "Thanks for your cooperation!";
while($row_nur33 = mysqli_fetch_array($res_nur33)){

	$data['nur3_tterm_amt'] = $row_nur33['amount'];
};
};



$sql_bas11 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$fterm' AND class = '$bas1'";
$res_bas11 = $conn->query($sql_bas11);
//$row_js11 = mysqli_fetch_array($res_js11);

if ($res_bas11 == True){
	//echo  "Thanks for your cooperation!";
while($row_bas11 = mysqli_fetch_array($res_bas11)){

	$data['bas1_fterm_amt'] = $row_bas11['amount'];
};
};

$sql_bas12 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$sterm' AND class = '$bas1'";
$res_bas12 = $conn->query($sql_bas12);
//$row_js11 = mysqli_fetch_array($res_js11);

if ($res_bas12 == True){
	//echo  "Thanks for your cooperation!";
while($row_bas12 = mysqli_fetch_array($res_bas12)){

	$data['bas1_sterm_amt'] = $row_bas12['amount'];
};
};

$sql_bas13 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$tterm' AND class = '$bas1'";
$res_bas13 = $conn->query($sql_bas13);
//$row_js11 = mysqli_fetch_array($res_js11);

if ($res_bas13 == True){
	//echo  "Thanks for your cooperation!";
while($row_bas13 = mysqli_fetch_array($res_bas13)){

	$data['bas1_tterm_amt'] = $row_bas13['amount'];
};
};


$sql_bas21 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$fterm' AND class = '$bas2'";
$res_bas21 = $conn->query($sql_bas21);
//$row_js11 = mysqli_fetch_array($res_js11);

if ($res_bas21 == True){
	//echo  "Thanks for your cooperation!";
while($row_bas21 = mysqli_fetch_array($res_bas21)){

	$data['bas2_fterm_amt'] = $row_bas21['amount'];
};
};

$sql_bas22 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$sterm' AND class = '$bas2'";
$res_bas22 = $conn->query($sql_bas22);
//$row_js11 = mysqli_fetch_array($res_js11);

if ($res_bas22 == True){
	//echo  "Thanks for your cooperation!";
while($row_bas22 = mysqli_fetch_array($res_bas22)){

	$data['bas2_sterm_amt'] = $row_bas22['amount'];
};
};

$sql_bas23 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$tterm' AND class = '$bas2'";
$res_bas23 = $conn->query($sql_bas23);
//$row_js11 = mysqli_fetch_array($res_js11);

if ($res_bas23 == True){
	//echo  "Thanks for your cooperation!";
while($row_bas23 = mysqli_fetch_array($res_bas23)){

	$data['bas2_tterm_amt'] = $row_bas23['amount'];
};
};

$sql_bas31 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$fterm' AND class = '$bas3'";
$res_bas31 = $conn->query($sql_bas31);
//$row_js11 = mysqli_fetch_array($res_js11);

if ($res_bas31 == True){
	//echo  "Thanks for your cooperation!";
while($row_bas31 = mysqli_fetch_array($res_bas31)){

	$data['bas3_fterm_amt'] = $row_bas31['amount'];
};
};

$sql_bas32 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$sterm' AND class = '$bas3'";
$res_bas32 = $conn->query($sql_bas32);
//$row_js11 = mysqli_fetch_array($res_js11);

if ($res_bas32 == True){
	//echo  "Thanks for your cooperation!";
while($row_bas32 = mysqli_fetch_array($res_bas32)){

	$data['bas3_sterm_amt'] = $row_bas32['amount'];
};
};

$sql_bas33 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$tterm' AND class = '$bas3'";
$res_bas33 = $conn->query($sql_bas33);
//$row_js11 = mysqli_fetch_array($res_js11);

if ($res_bas33 == True){
	//echo  "Thanks for your cooperation!";
while($row_bas33 = mysqli_fetch_array($res_bas33)){

	$data['bas3_tterm_amt'] = $row_bas33['amount'];
};
};

$sql_bas41 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$fterm' AND class = '$bas4'";
$res_bas41 = $conn->query($sql_bas41);
//$row_js11 = mysqli_fetch_array($res_js11);

if ($res_bas41 == True){
	//echo  "Thanks for your cooperation!";
while($row_bas41 = mysqli_fetch_array($res_bas41)){

	$data['bas4_fterm_amt'] = $row_bas41['amount'];
};
};

$sql_bas42 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$sterm' AND class = '$bas4'";
$res_bas42 = $conn->query($sql_bas42);
//$row_js11 = mysqli_fetch_array($res_js11);

if ($res_bas42 == True){
	//echo  "Thanks for your cooperation!";
while($row_bas42 = mysqli_fetch_array($res_bas42)){

	$data['bas4_sterm_amt'] = $row_bas42['amount'];
};
};

$sql_bas43 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$tterm' AND class = '$bas4'";
$res_bas43 = $conn->query($sql_bas43);
//$row_js11 = mysqli_fetch_array($res_js11);

if ($res_bas43 == True){
	//echo  "Thanks for your cooperation!";
while($row_bas43 = mysqli_fetch_array($res_bas43)){

	$data['bas4_tterm_amt'] = $row_bas43['amount'];
};
};

$sql_bas51 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$fterm' AND class = '$bas5'";
$res_bas51 = $conn->query($sql_bas51);
//$row_js11 = mysqli_fetch_array($res_js11);

if ($res_bas51 == True){
	//echo  "Thanks for your cooperation!";
while($row_bas51 = mysqli_fetch_array($res_bas51)){

	$data['bas5_fterm_amt'] = $row_bas51['amount'];
};
};

$sql_bas52 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$sterm' AND class = '$bas5'";
$res_bas52 = $conn->query($sql_bas52);
//$row_js11 = mysqli_fetch_array($res_js11);

if ($res_bas52 == True){
	//echo  "Thanks for your cooperation!";
while($row_bas52 = mysqli_fetch_array($res_bas52)){

	$data['bas5_sterm_amt'] = $row_bas52['amount'];
};
};

$sql_bas53 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$tterm' AND class = '$bas5'";
$res_bas53 = $conn->query($sql_bas53);
//$row_js11 = mysqli_fetch_array($res_js11);

if ($res_bas53 == True){
	//echo  "Thanks for your cooperation!";
while($row_bas53 = mysqli_fetch_array($res_bas53)){

	$data['bas5_tterm_amt'] = $row_bas53['amount'];
};
};







$sql_js11 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$fterm' AND class = '$js1'";
$res_js11 = $conn->query($sql_js11);
//$row_js11 = mysqli_fetch_array($res_js11);

if ($res_js11 == True){
	//echo  "Thanks for your cooperation!";
while($row_js11 = mysqli_fetch_array($res_js11)){

	$data['js1_fterm_amt'] = $row_js11['amount'];
};
};

$sql_js12 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$sterm' AND class = '$js1'";
$res_js12 = $conn->query($sql_js12);
//$row_js12 = mysqli_fetch_array($res_js12);

if ($res_js12 == True){
	//echo  "Thanks for your cooperation!";
while($row_js12 = mysqli_fetch_array($res_js12)){

	$data['js1_sterm_amt'] = $row_js12['amount'];
};
};


$sql_js13 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$tterm' AND class = '$js1'";
$res_js13 = $conn->query($sql_js13);
//$row_js13 = mysqli_fetch_array($res_js13);

if ($res_js13 == True){
	//echo  "Thanks for your cooperation!";
while($row_js13 = mysqli_fetch_array($res_js13)){

	$data['js1_tterm_amt'] = $row_js13['amount'];
};
};


//this is to confirm js2 first, second and third term data field
$sql_js21 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$fterm' AND class = '$js2'";
$res_js21 = $conn->query($sql_js21);
//$row_js21 = mysqli_fetch_array($res_js21);

if ($res_js21 == True){
	//echo  "Thanks for your cooperation!";
while($row_js21 = mysqli_fetch_array($res_js21)){

	$data['js2_fterm_amt'] = $row_js21['amount'];
};
};

$sql_js22 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$sterm' AND class = '$js2'";
$res_js22 = $conn->query($sql_js22);
//$row_js22 = mysqli_fetch_array($res_js22);

if ($res_js22 == True){
	//echo  "Thanks for your cooperation!";
while($row_js22 = mysqli_fetch_array($res_js22)){

	$data['js2_sterm_amt'] = $row_js22['amount'];
};
};


$sql_js23 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$tterm' AND class = '$js2'";
$res_js23 = $conn->query($sql_js23);
//$row_js23 = mysqli_fetch_array($res_js23);

if ($res_js23 == True){
	//echo  "Thanks for your cooperation!";
while($row_js23 = mysqli_fetch_array($res_js23)){

	$data['js2_tterm_amt'] = $row_js23['amount'];
};
};


//this is to confirm js3 first, second and third term data field
$sql_js31 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$fterm' AND class = '$js3'";
$res_js31 = $conn->query($sql_js31);
//$row_js31 = mysqli_fetch_array($res_js31);

if ($res_js31 == True){
	//echo  "Thanks for your cooperation!";
while($row_js31 = mysqli_fetch_array($res_js31)){

	$data['js3_fterm_amt'] = $row_js31['amount'];
};
};



$sql_js32 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$sterm' AND class = '$js3'";
$res_js32 = $conn->query($sql_js32);
//$row_js32 = mysqli_fetch_array($res_js32);

if ($res_js32 == True){
	//echo  "Thanks for your cooperation!";
while($row_js32 = mysqli_fetch_array($res_js32)){

	$data['js3_sterm_amt'] = $row_js32['amount'];
};
};


$sql_js33 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$tterm' AND class = '$js2'";
$res_js33 = $conn->query($sql_js33);
//$row_js33 = mysqli_fetch_array($res_js33);

if ($res_js33 == True){
	//echo  "Thanks for your cooperation!";
while($row_js33 = mysqli_fetch_array($res_js33)){

	$data['js3_tterm_amt'] = $row_js33['amount'];
};
};


//this is to confirm ss1 first, second and third term data field
$sql_ss11 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$fterm' AND class = '$ss1'";
$res_ss11 = $conn->query($sql_ss11);
//$row_ss11 = mysqli_fetch_array($res_ss11);

if ($res_ss11 == True){
	//echo  "Thanks for your cooperation!";
while($row_ss11 = mysqli_fetch_array($res_ss11)){

	$data['ss1_fterm_amt'] = $row_ss11['amount'];
};
};


$sql_ss12 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$sterm' AND class = '$ss1'";
$res_ss12 = $conn->query($sql_ss12);
//$row_ss12 = mysqli_fetch_array($res_ss12);

if ($res_ss12 == True){
	//echo  "Thanks for your cooperation!";
while($row_ss12 = mysqli_fetch_array($res_ss12)){

	$data['ss1_sterm_amt'] = $row_ss12['amount'];
};
};

$sql_ss13 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$tterm' AND class = '$ss1'";
$res_ss13 = $conn->query($sql_ss13);
//$row_ss13 = mysqli_fetch_array($res_ss13);

if ($res_ss13 == True){
	//echo  "Thanks for your cooperation!";
while($row_ss13 = mysqli_fetch_array($res_ss13)){

	$data['ss1_tterm_amt'] = $row_ss13['amount'];
};
};


//this is to confirm ss2 first, second and third term data field
$sql_ss21 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$fterm' AND class = '$ss2'";
$res_ss21 = $conn->query($sql_ss21);
//$row_ss21 = mysqli_fetch_array($res_ss21);

if ($res_ss21 == True){
	//echo  "Thanks for your cooperation!";
while($row_ss21 = mysqli_fetch_array($res_ss21)){

	$data['ss2_fterm_amt'] = $row_ss21['amount'];
};
};

$sql_ss22 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$sterm' AND class = '$ss2'";
$res_ss22 = $conn->query($sql_ss22);
//$row_ss22 = mysqli_fetch_array($res_ss22);

if ($res_ss22 == True){
	//echo  "Thanks for your cooperation!";
while($row_ss22 = mysqli_fetch_array($res_ss22)){

	$data['ss2_sterm_amt'] = $row_ss22['amount'];
};
};

$sql_ss23 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$tterm' AND class = '$ss2'";
$res_ss23 = $conn->query($sql_ss23);
//$row_ss23 = mysqli_fetch_array($res_ss23);

if ($res_ss23 == True){
	//echo  "Thanks for your cooperation!";
while($row_ss23 = mysqli_fetch_array($res_ss23)){

	$data['ss2_tterm_amt'] = $row_ss23['amount'];
};
};


//this is to confirm ss3 first, second and third term data field
$sql_ss31 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$fterm' AND class = '$ss3'";
$res_ss31 = $conn->query($sql_ss31);
//$row_ss31 = mysqli_fetch_array($res_ss31);

if ($res_ss31 == True){
	//echo  "Thanks for your cooperation!";
while($row_ss31 = mysqli_fetch_array($res_ss31)){

	$data['ss3_fterm_amt'] = $row_ss31['amount'];
};
};

$sql_ss32 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$sterm' AND class = '$ss3'";
$res_ss32 = $conn->query($sql_ss32);
//$row_ss32 = mysqli_fetch_array($res_ss32);

if ($res_ss32 == True){
	//echo  "Thanks for your cooperation!";
while($row_ss32 = mysqli_fetch_array($res_ss32)){

	$data['ss3_sterm_amt'] = $row_ss32['amount'];
};
};

$sql_ss33 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$tterm' AND class = '$ss3'";
$res_ss33 = $conn->query($sql_ss33);
//$row_ss33 = mysqli_fetch_array($res_ss33);

if ($res_ss33 == True){
	//echo  "Thanks for your cooperation!";
while($row_ss33 = mysqli_fetch_array($res_ss33)){

	$data['ss3_tterm_amt'] = $row_ss33['amount'];
};
};



echo json_encode($data);//to json
// i have beeb struggleing to send this data to my html problem but it was not working. also to discovered that is all because of seending the data with other feedback like "echo success" kind of feedback.



// ;
//header("refresh:20; url=maths.html");
//} else {echo "ERROR: " . $sql . "<br>" . $conn->error;
//	};
	

} else {
	 echo  "A drop of comment will enhance our services to you!";
};
$conn->close();



  ?>

















