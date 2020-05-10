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


$get = filter_input(INPUT_POST, "x");
$obj = json_decode($get, false);

//$amount = $_POST['schinput'];
//$amount_paid = $_POST['amtinput'];
//$balance = $_POST['balinput'];


if(!empty($obj)){


//this insert data in my data base
$dsn1='localhost';
$user= 'root';
$password='?/iPTSJ\^@\$TYOEs\|';  
$dbname  = 'pilot';

//balances for the fund made in php and send to database
$schfeesbal = $obj->schfees_id - $obj->schfees_amt;
$unifeesbal = $obj->unifees_id - $obj->unifees_amt;
$textfeesbal = $obj->textfees_id - $obj->textfees_amt;
$lesfeesbal = $obj->lesfees_id - $obj->lesfees_amt;


$conn = new mysqli ($dsn1, $user, $password, $dbname);

if ($conn->connect_error){
	die("Connection Failed: " . $conn->connect_error);
};

$sql1 = "INSERT INTO school_fees (schfees_amt, amount_paid, balance)
VALUES ('$obj->schfees_id', '$obj->schfees_amt', '$schfeesbal')";
$sql2 = "INSERT INTO uniform (unifees_amt, amount_paid, balance)
VALUES ('$obj->unifees_id', '$obj->unifees_amt', '$unifeesbal')";
$sql3 = "INSERT INTO text_books (textfees_amt, amount_paid, balance)
VALUES ('$obj->textfees_id', '$obj->textfees_amt', '$textfeesbal')";
$sql4 = "INSERT INTO lesson (lesfees_amt, amount_paid, balance)
VALUES ('$obj->lesfees_id', '$obj->lesfees_amt', '$lesfeesbal')";

if ($conn->query($sql1) == True && 
	$conn->query($sql2) == True && 
	$conn->query($sql3) == True && 
	$conn->query($sql4) == True){

	echo  "Data received successfully!";

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



