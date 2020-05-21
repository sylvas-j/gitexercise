<?php


//header("Content-Type: application/json; charset=UTF-8");


$get = filter_input(INPUT_POST, "k");
$obj = json_decode($get, false);

//$obj = 1;
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

 
$sql = "SELECT amount FROM termly_fees WHERE term = '$obj->term_tv' AND class = (SELECT class FROM students_data WHERE students_id = '$obj->students_id')";

$result1 = mysqli_query($conn, $sql);

if ($result1 == true){

while ($row1 = mysqli_fetch_array($result1)) {
	$data['amount'] = $row1['amount'];
};
echo json_encode($data);

//	$row = $result->fetch_assoc()
//echo json_encode($test);
//header("refresh:20; url=maths.html");
} else {echo "ERROR: " . $sql . "<br>" . $conn->error;
	};
	$conn->close();

} else {
	 echo  "A drop of comment will enhance our services to you!";
};






?>
