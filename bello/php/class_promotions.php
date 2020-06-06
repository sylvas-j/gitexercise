<?php





header("Content-Type: application/json; charset=UTF-8");


$get = filter_input(INPUT_POST, "k");
$class = json_decode($get, false);



if(!empty($class)){


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
// THE NAME CRECHE NOW GOES WITH THE NAME PRE NURSERY
$cre = "PRE NURSERYS";


$nur1 = "NURSERY ONE";
$nur2 = "NURSERY TWO";
//THE NAME NURSERY THREE NOW GOES WITH THE NAME TRANSCENSION
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

$ex_student = "EX STUDENT";


	$sql_ex = "UPDATE students_data SET class = '$class->ex_students_v' WHERE class = '$ss3'";
	$result_ex = $conn->query($sql_ex);

	$sql_ss3 = "UPDATE students_data SET class = '$class->ss3_v'WHERE class = '$ss2'";
	$result_ss3 = $conn->query($sql_ss3);

	$sql_ss2 = "UPDATE students_data SET class = '$class->ss2_v'WHERE class = '$ss1'";
	$result_ss2 = $conn->query($sql_ss2);	

	$sql_ss1 = "UPDATE students_data SET class = '$class->ss1_v'WHERE class = '$js3'";
	$result_ss1 = $conn->query($sql_ss1);

	$sql_js3 = "UPDATE students_data SET class = '$class->js3_v'WHERE class = '$js2'";
	$result_js3 = $conn->query($sql_js3);

	$sql_js2 = "UPDATE students_data SET class = '$class->js2_v'WHERE class = '$js1'";
	$result_js2 = $conn->query($sql_js2);

	$sql_js1 = "UPDATE students_data SET class = '$class->js1_v'WHERE class = '$bas5'";
	$result_js1 = $conn->query($sql_js1);

	$sql_bas5 = "UPDATE students_data SET class = '$class->bas5_v'WHERE class = '$bas4'";
	$result_bas5 = $conn->query($sql_bas5);

	$sql_bas4 = "UPDATE students_data SET class = '$class->bas4_v'WHERE class = '$bas3'";
	$result_bas4 = $conn->query($sql_bas4);

	$sql_bas3 = "UPDATE students_data SET class = '$class->bas3_v'WHERE class = '$bas2'";
	$result_bas3 = $conn->query($sql_bas3);

	$sql_bas2 = "UPDATE students_data SET class = '$class->bas2_v'WHERE class = '$bas1'";
	$result_bas2 = $conn->query($sql_bas2);

	$sql_bas1 = "UPDATE students_data SET class = '$class->bas1_v'WHERE class = '$nur3'";
	$result_bas1 = $conn->query($sql_bas1);

	$sql_nur3 = "UPDATE students_data SET class = '$class->nur1_v'WHERE class = '$nur2'";
	$result_nur3 = $conn->query($sql_nur3);

	$sql_nur2 = "UPDATE students_data SET class = '$class->nur2_v'WHERE class = '$nur1'";
	$result_nur2 = $conn->query($sql_nur2);

	$sql_nur1 = "UPDATE students_data SET class = '$class->nur1_v'WHERE class = '$cre'";
	$result_nur1 = $conn->query($sql_nur1);

	$sql_cre = "UPDATE students_data SET class = '$class->cre_v'WHERE class = '$kind'";
	$result_cre = $conn->query($sql_cre);






if($result_ex == True &&
	$result_ss3 == True &&
	$result_ss2 == True &&
	$result_ss1 == True &&
	$result_js3 == True &&
	$result_js2 == True &&
	$result_js1 == True &&
	$result_bas5 == True &&
	$result_bas4 == True &&
	$result_bas3 == True &&
	$result_bas2 == True &&
	$result_bas1 == True &&
	$result_nur3 == True &&
	$result_nur2 == True &&
	$result_nur1 == True &&
	$result_cre == True){

echo "Congratulations! \n All your students are successfully promoted. ";


} else {echo "ERROR: " . $sql_js2 . "<br>" . $sql_js3 . "<br>" . $sql_ss1 . "<br>" . $sql_ss2 . "<br>" . $sql_ss3 . "<br>"  . $conn->error;
	};
$conn->close();




} else {
	 echo  "Your form is empty please input the requested data!";
};

//echo $get;


?>