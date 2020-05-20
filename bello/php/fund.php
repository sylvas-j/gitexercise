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



$sql_s1 = "SELECT students_id FROM school_fees WHERE students_id = '$obj->pageid'";

$res1 = $conn->query($sql_s1);
$row1 = mysqli_fetch_array($res1);

$sql_s2 = "SELECT students_id FROM uniform WHERE students_id = '$obj->pageid'";

$res2 = $conn->query($sql_s2);
$row2 = mysqli_fetch_array($res2);

$sql_s3 = "SELECT students_id FROM text_books WHERE students_id = '$obj->pageid'";

$res3 = $conn->query($sql_s3);
$row3 = mysqli_fetch_array($res3);

$sql_s4 = "SELECT students_id FROM lesson WHERE students_id = '$obj->pageid'";

$res4 = $conn->query($sql_s4);
$row4 = mysqli_fetch_array($res4);




if ($conn->query($sql_s1) == True && 
	$conn->query($sql_s2) == True && 
	$conn->query($sql_s3) == True && 
	$conn->query($sql_s4) == True){

	//echo  "Data received successfully!";

	if($row1 != ''){

		$sql1 = "UPDATE school_fees SET schfees_amt = '$obj->schfees_id', amount_paid = '$obj->schfees_amt', balance = '$schfeesbal' WHERE students_id = '$obj->pageid'";
		$result = $conn->query($sql1);

		echo "School fees already exist, inserted <br />" ;
		//echo $row1;

	}else{
		$sql1 = "INSERT INTO school_fees (students_id, schfees_amt, amount_paid, balance)
		VALUES ('$obj->pageid', '$obj->schfees_id', '$obj->schfees_amt', '$schfeesbal')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "School fees inserted. <br />";
	};

	if($row2 != ''){

		$sql2 = "UPDATE uniform SET unifees_amt = '$obj->unifees_id', amount_paid = '$obj->unifees_amt', balance = '$unifeesbal' WHERE students_id = '$obj->pageid'";
		$result = $conn->query($sql2);

		echo "Uniform fees already exist, inserted <br />";
		//echo $row2;

	}else{
		$sql2 = "INSERT INTO uniform (students_id, unifees_amt, amount_paid, balance)
VALUES ('$obj->pageid', '$obj->unifees_id', '$obj->unifees_amt', '$unifeesbal')";


		$result = $conn->query($sql2);
		//echo $result;
		echo "uniform fees inserted. <br />";
	};

	if($row3 != ''){

		$sql3 = "UPDATE text_books SET textfees_amt = '$obj->textfees_id', amount_paid = '$obj->textfees_amt', balance = '$textfeesbal' WHERE students_id = '$obj->pageid'";
		$result = $conn->query($sql3);

		echo "Text books already exist, inserted <br />";
		//echo $row3;

	}else{
		$sql3 = "INSERT INTO text_books (students_id, textfees_amt, amount_paid, balance)
VALUES ('$obj->pageid', '$obj->textfees_id', '$obj->textfees_amt', '$textfeesbal')";

		$result = $conn->query($sql3);
		//echo $result;
		echo "Text books inserted. <br />" ;
	};

	if($row4 != ''){

		$sql4 = "UPDATE lesson SET lesfees_amt = '$obj->lesfees_id', amount_paid = '$obj->lesfees_amt', balance = '$lesfeesbal' WHERE students_id = '$obj->pageid'";
		$result = $conn->query($sql4);

		echo "Lesson fees already exist, inserted";
		//echo $row4;

	}else{
		$sql4 = "INSERT INTO lesson (students_id, lesfees_amt, amount_paid, balance)
VALUES ('$obj->pageid', '$obj->lesfees_id', '$obj->lesfees_amt', '$lesfeesbal')";

		$result = $conn->query($sql4);
		//echo $result;
		echo "Lesson fees inserted.";
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


} else {echo "ERROR: " . $sql1 . "<br>" . $sql2 . "<br>" . $sql3 . "<br>" . $sql4 . "<br>"  . $conn->error;
	};
$conn->close();




} else {
	 echo  "Your form is empty please input the requested data!";
};
//echo  "A drop of comment will enhance our services to you!";

	//header("refresh: 10");

?>



