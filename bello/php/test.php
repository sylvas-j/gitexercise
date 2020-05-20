<?php


//error_reporting(-1);
//ini_set('display_errors', 'On');
//set_error_handler("var_dump");





//$name_error = $fac_error = $dep_error = $num_error = $email_error = "";
//$fname = $lname = $message = $emailtest = "";
//$emailRE = "/^.+@.+\..{2,4}$/";

/**
if ($_SERVER["REQUEST_METHOD"] == "POST")
//if (!empty($_POST['submit']))
//if(!empty($fname && $lname && $message && $emailtest))
{

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$message = $_POST['message'];

if (preg_match($emailRE, $_POST['emailtest'])){

			$emailtest = $_POST['emailtest'];
	} else { //$emailtest_error = 'check email';
			};
} else {//echo "complete form!";
		};

*/
header("Content-Type: application/json; charset=UTF-8");


//$get = filter_input(INPUT_POST, "x");
//$obj = json_decode($get, false);

$obj = 9;


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


$sql_s = "SELECT students_id FROM uniform WHERE students_id = '$obj'";

$res = $conn->query($sql_s);
$row = mysqli_fetch_array($res);


if ($conn->query($sql_s) == True){

	if($row != ''){

		$sql1 = "UPDATE uniform SET unifees_amt = '111' WHERE students_id = '$obj'";
		$result = $conn->query($sql1);
		echo "already exist, so inserted";
		echo $row;

	}else{
		$sql2 = "INSERT INTO uniform (students_id, amount_paid)
		VALUES ('$obj', '100')";

		$result = $conn->query($sql2);
		//echo $result;
		echo "found so inserted with students_id";
	};

	//echo  "Data received successfully!";


}else {echo "ERROR: " . $sql1 . "<br>" . $sql2 . "<br>" . $sql3 . "<br>" . $sql4 . "<br>"  . $conn->error;
	};
$conn->close();




} else {
	 echo  "Your form is empty please input the requested data!";
};
//echo  "A drop of comment will enhance our services to you!";


/**



//get heroID
$heroID = filter_input(INPUT_POST, 'heroID');
try {
$con= new PDO('mysql:host=localhost;dbname=dbName', "user", "pwd");
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $con->prepare("SELECT * FROM hero WHERE heroID = ?");
$stmt->execute(array($heroID));
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach($result as $row){
foreach ($row as $field => $value){
print <<< HERE
<strong>$field: </strong>$value <br />
HERE;
} // end field loop
} // end record loop
} catch(PDOException $e) {
echo 'ERROR: ' . $e->getMessage();
} // end try





//connect to database
try {
$con= new PDO('mysql:host=host;dbname=dbName', "user", "pwd");
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$result = $con->query('SELECT * FROM hero');
$result->setFetchMode(PDO::FETCH_ASSOC);

foreach($result as $row){
$id = $row["heroID"];
$name = $row["name"];

print <<< HERE
<option value = "$id">$name</option>
HERE;
} // end record loop
} catch(PDOException $e) {
echo 'ERROR: ' . $e->getMessage();
} // end try



*/








/**
<form method="POST"
 action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<input type="text" name="name"
 value="<?php echo htmlspecialchars($name);?>">
<span class="error"><?php echo $nameErr;?></span>

<?php
// define variables and initialize with empty values
$nameErr = $addrErr = $emailErr = $howManyErr = $favFruitErr = "";
$name = $address = $email = $howMany = "";
$favFruit = array();

*/
//<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);

?>



