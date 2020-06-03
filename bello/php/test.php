<?php
//header("Content-Type: application/json; charset=UTF-8");

//if ($_SERVER["REQUEST_METHOD"] == "POST")
if (isset($_POST['submit']))
//if(!empty($fname && $lname && $message && $emailtest))
{

	echo "just testing \n";
$msg = '';
$target = "../images/".basename($_FILES['image']['name']);
$image = $_FILES['image']['name'];
$text = $_POST['text'];

//this insert data in my data base
$dsn1='localhost';
$user= 'root';
$password='?/iPTSJ\^@\$TYOEs\|';  
$dbname  = 'pilot';

$conn = new mysqli ($dsn1, $user, $password, $dbname);

if ($conn->connect_error){
	die("Connection Failed: " . $conn->connect_error);
};

echo $image . "\n";

// this is to save the image to folder in server or anywhere in the system.

$sql = "INSERT INTO images (images) VALUES ('$image')";
$input = mysqli_query($conn, $sql);

if($input == true){


	if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
		$msg = "image uploaded successfully";
		echo $msg;

	}else{
		$msg = "there was a problem uploading the image.";
		echo $msg;
	};
} else {echo "ERROR: " . $sql . "<br>"  . $conn->error;
	};
$conn->close();

//this is to send the image to databass straight form with datatype blog.
/*
$imagename = $_FILES['image']['name']
$imagetmp = addslashes(file_get_contents($_FILES['image']['tmp_name']))
$sql = "INSERT INTO images (images, imagename) VALUES ('$imagetmp', 'imagename')"

*/

};

?>


<!DOCTYPE html>
<html>
<head>
	<title>Pilot Home page</title>

<link href="css/dashstyle.css" type="text/css" rel="stylesheet" media="all">


<!-- load JS files -->
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>     

<style type="text/css">
	#content{
		width:50%;
		margin: 20px auto;
		border:1px solid #cbcbcb;
	}
	form{
		width: 50%;
		margin:20px auto;
	}
	form div{
		margin-top: 5px;
		
	}
</style>



</head>




<body>

<script type="text/javascript">
	
</script>
<p>
in page 1	
<div id="checkllllllll">link</div>
</p>

<div id="content">

<div class="display">
<?php
$dsn1='localhost';
$user= 'root';
$password='?/iPTSJ\^@\$TYOEs\|';  
$dbname  = 'pilot';

$conn = new mysqli ($dsn1, $user, $password, $dbname);

if ($conn->connect_error){
	die("Connection Failed: " . $conn->connect_error);
};


	$req = "SELECT * FROM images";
	$result = mysqli_query($conn, $req);

	while ($row = mysqli_fetch_array($result)) {
		echo "<img src= '../images/" . $row['images'] . "'>";
	};


?>
</div>	

<form action="test.php" method="post" enctype="multipart/form-data">
	<div>
		<input type="file" name="image">
	</div>
	<div>
		<textarea name="text" cols="40" rows="4" placeholder="just something about the image"></textarea>
	</div>
	<div>
		<input type="submit" name="submit" value="upload image">
	</div>
</form>
</div>


</body>
</html>








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


		$sql2 = "INSERT INTO uniform (students_id, amount_paid)
		VALUES ('$obj', '100')";

		$result = $conn->query($sql2);
		//echo $result;
		echo "found so inserted with students_id";


	//echo  "Data received successfully!";




$conn->close();




} else {
	 echo  "Your form is empty please input the requested data!";
};
//echo  "A drop of comment will enhance our services to you!";

*/
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



