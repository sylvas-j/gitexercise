
<?php

header("Content-Type: application/json; charset=UTF-8");


$get = filter_input(INPUT_POST, "x");
$obj = json_decode($get, false);

//$obj = 13;

if(!empty($obj)){

$dsn1='localhost';
$user= 'root';
$password='?/iPTSJ\^@\$TYOEs\|';  
$dbname  = 'pilot';


$conn = new mysqli ($dsn1, $user, $password, $dbname);

if ($conn->connect_error){
	die("Connection Failed: " . $conn->connect_error);
};


	
$sql = "DELETE FROM students_data WHERE students_id = '$obj->iddd'";

$deleted = $conn->query($sql);

if($deleted == true){

echo "Account deleted successfully!";
echo $obj->iddd;
	
	}else{
		echo "Not deleted!";
		echo $obj->iddd;
	};// endd row if



//} else {echo "ERROR: " . $sql1 . "<br>" . $conn->error;
//	};
$conn->close();




} else {
	 echo  "Something went wrong \n\n Try again.";
};
//echo  "A drop of comment will enhance our services to you!";

	//header("refresh: 10");

?>



