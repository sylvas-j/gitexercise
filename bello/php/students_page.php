

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



$sql = "SELECT * FROM students_data WHERE students_id = '$obj->id'";
$result = $conn->query($sql);
//$result = mysqli_query($conn, $sql);
if ($result == True){

	//echo  "Thanks for your cooperation!";
while($row = mysqli_fetch_array($result)){

	$data['sname'] = $row['sname'];
	$data['students_id'] = $row['students_id'];
	$data['class'] = $row['class'];
	$data['category'] = $row['category'];
	$data['other_name'] = $row['other_name'];
	$data['phone'] = $row['phone'];
	$data['parents_no'] = $row['parents_no'];
	$data['email'] = $row['email'];
	$data['address'] = $row['address'];
	$data['dob'] = $row['dob'];
	$data['age'] = $row['age'];
	$data['sex'] = $row['sex'];
	$data['former_sch'] = $row['former_sch'];
	$data['year_admin'] = $row['year_admin'];
};

echo json_encode($data);//to json
// i have beeb struggleing to send this data to my html problem but it was not working. also to discovered that is all because of seending the data with other feedback like "echo success" kind of feedback.



// ;
//header("refresh:20; url=maths.html");
} else {echo "ERROR: " . $sql . "<br>" . $conn->error;
	};
	

} else {
	 echo  "A drop of comment will enhance our services to you!";
};
$conn->close();



  ?>

















