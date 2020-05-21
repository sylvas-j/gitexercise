

<?php

header("Content-Type: application/json; charset=UTF-8");

$get = filter_input(INPUT_POST, "x");
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
//$row_js11 = mysqli_fetch_array($res_js11);

if ($res_js11 == True){
	//echo  "Thanks for your cooperation!";
while($row_js11 = mysqli_fetch_array($res_js11)){

	$data['js1_fterm_amt'] = $row_js11['js1_fterm_amt'];
};
};

$sql_js12 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$sterm' AND class = '$js1'";
$res_js12 = $conn->query($sql_js12);
//$row_js12 = mysqli_fetch_array($res_js12);

if ($res_js12 == True){
	//echo  "Thanks for your cooperation!";
while($row_js12 = mysqli_fetch_array($res_js12)){

	$data['js1_sterm_amt'] = $res_js12['js1_sterm_amt'];
};
};


$sql_js13 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$tterm' AND class = '$js1'";
$res_js13 = $conn->query($sql_js13);
//$row_js13 = mysqli_fetch_array($res_js13);

if ($res_js13 == True){
	//echo  "Thanks for your cooperation!";
while($row_js13 = mysqli_fetch_array($res_js13)){

	$data['js1_tterm_amt'] = $row_js13['js1_tterm_amt'];
};
};






//this is to confirm js2 first, second and third term data field
$sql_js21 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$fterm' AND class = '$js2'";
$res_js21 = $conn->query($sql_js21);
//$row_js21 = mysqli_fetch_array($res_js21);

if ($res_js21 == True){
	//echo  "Thanks for your cooperation!";
while($row_js21 = mysqli_fetch_array($res_js21)){

	$data['js2_fterm_amt'] = $row_js21['js2_fterm_amt'];
};
};

$sql_js22 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$sterm' AND class = '$js2'";
$res_js22 = $conn->query($sql_js22);
//$row_js22 = mysqli_fetch_array($res_js22);

if ($res_js22 == True){
	//echo  "Thanks for your cooperation!";
while($row_js22 = mysqli_fetch_array($res_js22)){

	$data['js2_sterm_amt'] = $row_js22['js2_sterm_amt'];
};
};


$sql_js23 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$tterm' AND class = '$js2'";
$res_js23 = $conn->query($sql_js23);
//$row_js23 = mysqli_fetch_array($res_js23);

if ($res_js23 == True){
	//echo  "Thanks for your cooperation!";
while($row_js23 = mysqli_fetch_array($res_js23)){

	$data['js2_tterm_amt'] = $row_js23['js2_tterm_amt'];
};
};


//this is to confirm js3 first, second and third term data field
$sql_js31 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$fterm' AND class = '$js3'";
$res_js31 = $conn->query($sql_js31);
//$row_js31 = mysqli_fetch_array($res_js31);

if ($res_js31 == True){
	//echo  "Thanks for your cooperation!";
while($row_js31 = mysqli_fetch_array($res_js31)){

	$data['js3_fterm_amt'] = $row_js31['js3_fterm_amt'];
};
};



$sql_js32 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$sterm' AND class = '$js3'";
$res_js32 = $conn->query($sql_js32);
//$row_js32 = mysqli_fetch_array($res_js32);

if ($res_js32 == True){
	//echo  "Thanks for your cooperation!";
while($row_js32 = mysqli_fetch_array($res_js32)){

	$data['js3_sterm_amt'] = $row_js32['js3_sterm_amt'];
};
};


$sql_js33 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$tterm' AND class = '$js2'";
$res_js33 = $conn->query($sql_js33);
//$row_js33 = mysqli_fetch_array($res_js33);

if ($res_js33 == True){
	//echo  "Thanks for your cooperation!";
while($row_js33 = mysqli_fetch_array($res_js33)){

	$data['js3_tterm_amt'] = $row_js33['js3_tterm_amt'];
};
};


//this is to confirm ss1 first, second and third term data field
$sql_ss11 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$fterm' AND class = '$ss1'";
$res_ss11 = $conn->query($sql_ss11);
//$row_ss11 = mysqli_fetch_array($res_ss11);

if ($res_ss11 == True){
	//echo  "Thanks for your cooperation!";
while($row_ss11 = mysqli_fetch_array($res_ss11)){

	$data['ss1_fterm_amt'] = $row_ss11['ss1_fterm_amt'];
};
};


$sql_ss12 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$sterm' AND class = '$ss1'";
$res_ss12 = $conn->query($sql_ss12);
//$row_ss12 = mysqli_fetch_array($res_ss12);

if ($res_ss12 == True){
	//echo  "Thanks for your cooperation!";
while($row_ss12 = mysqli_fetch_array($res_ss12)){

	$data['ss1_sterm_amt'] = $row_ss12['ss1_sterm_amt'];
};
};

$sql_ss13 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$tterm' AND class = '$ss1'";
$res_ss13 = $conn->query($sql_ss13);
//$row_ss13 = mysqli_fetch_array($res_ss13);

if ($res_ss13 == True){
	//echo  "Thanks for your cooperation!";
while($row_ss13 = mysqli_fetch_array($res_ss13)){

	$data['ss1_tterm_amt'] = $row_ss13['ss1_tterm_amt'];
};
};


//this is to confirm ss2 first, second and third term data field
$sql_ss21 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$fterm' AND class = '$ss2'";
$res_ss21 = $conn->query($sql_ss21);
//$row_ss21 = mysqli_fetch_array($res_ss21);

if ($res_ss21 == True){
	//echo  "Thanks for your cooperation!";
while($row_ss21 = mysqli_fetch_array($res_ss21)){

	$data['ss2_fterm_amt'] = $row_ss21['ss2_fterm_amt'];
};
};

$sql_ss22 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$sterm' AND class = '$ss2'";
$res_ss22 = $conn->query($sql_ss22);
//$row_ss22 = mysqli_fetch_array($res_ss22);

if ($res_ss22 == True){
	//echo  "Thanks for your cooperation!";
while($row_ss22 = mysqli_fetch_array($res_ss22)){

	$data['ss2_sterm_amt'] = $row_ss22['ss2_sterm_amt'];
};
};

$sql_ss23 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$tterm' AND class = '$ss2'";
$res_ss23 = $conn->query($sql_ss23);
//$row_ss23 = mysqli_fetch_array($res_ss23);

if ($res_ss23 == True){
	//echo  "Thanks for your cooperation!";
while($row_ss23 = mysqli_fetch_array($res_ss23)){

	$data['ss2_tterm_amt'] = $row_ss23['ss2_tterm_amt'];
};
};


//this is to confirm ss3 first, second and third term data field
$sql_ss31 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$fterm' AND class = '$ss3'";
$res_ss31 = $conn->query($sql_ss31);
//$row_ss31 = mysqli_fetch_array($res_ss31);

if ($res_ss31 == True){
	//echo  "Thanks for your cooperation!";
while($row_ss31 = mysqli_fetch_array($res_ss31)){

	$data['ss3_fterm_amt'] = $row_ss31['ss3_fterm_amt'];
};
};

$sql_ss32 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$sterm' AND class = '$ss3'";
$res_ss32 = $conn->query($sql_ss32);
$row_ss32 = mysqli_fetch_array($res_ss32);

if ($res_ss32 == True){
	//echo  "Thanks for your cooperation!";
while($row_ss32 = mysqli_fetch_array($res_ss32)){

	$data['ss3_sterm_amt'] = $row_ss32['ss3_sterm_amt'];
};
};

$sql_ss33 = "SELECT amount FROM termly_fees WHERE year = '$obj->year_selected' AND term = '$tterm' AND class = '$ss3'";
$res_ss33 = $conn->query($sql_ss33);
$row_ss33 = mysqli_fetch_array($res_ss33);

if ($res_ss33 == True){
	//echo  "Thanks for your cooperation!";
while($row_ss33 = mysqli_fetch_array($res_ss33)){

	$data['ss3_tterm_amt'] = $row_ss33['ss3_tterm_amt'];
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

















