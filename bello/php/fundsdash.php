
<?php


header("Content-Type: application/json; charset=UTF-8");


$get1 = filter_input(INPUT_POST, "y");
$obj1 = json_decode($get1, false);

//$obj1 = 3;

if(!empty($obj1)){



//this insert data in my data base
$dsn1='localhost';
$user= 'root';
$password='?/iPTSJ\^@\$TYOEs\|';  
$dbname  = 'pilot';

$conn = new mysqli ($dsn1, $user, $password, $dbname);

if ($conn->connect_error){
	die("Connection Failed: " . $conn->connect_error);
};

$sqlsch = "SELECT schfees_amt, amount_paid, balance FROM school_fees WHERE students_id = '$obj1->id'";

$sqluni = "SELECT unifees_amt, amount_paid, balance FROM uniform WHERE students_id = '$obj1->id'";

$sqltext = "SELECT textfees_amt, amount_paid, balance FROM text_books WHERE students_id = '$obj1->id'";

$sqlles = "SELECT lesfees_amt, amount_paid, balance FROM lesson WHERE students_id = '$obj1->id'";

$result1 = $conn->query($sqlsch);
$result2 = $conn->query($sqluni);
$result3 = $conn->query($sqltext);
$result4 = $conn->query($sqlles);

//$result = mysqli_query($conn, $sql);
if ($result1 == True || 
	$result2 == True || 
	$result3 == True || 
	$result4 == True){

	//echo  "Thanks for your cooperation!";
while($row = mysqli_fetch_array($result1)){

	$data['schfees_amt'] = $row['schfees_amt'];
	$data['amount_sch'] = $row['amount_paid'];
	$data['bal_sch'] = $row['balance'];

};

while($row = mysqli_fetch_array($result2)){

	$data['unifees_amt'] = $row['unifees_amt'];
	$data['amount_uni'] = $row['amount_paid'];
	$data['bal_uni'] = $row['balance'];

};

while($row = mysqli_fetch_array($result3)){


	$data['textfees_amt'] = $row['textfees_amt'];
	$data['amount_text'] = $row['amount_paid'];
	$data['bal_text'] = $row['balance'];
};

while($row = mysqli_fetch_array($result4)){


	$data['lesfees_amt'] = $row['lesfees_amt'];
	$data['amount_les'] = $row['amount_paid'];
	$data['bal_les'] = $row['balance'];
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



