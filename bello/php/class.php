<?php


//header("Content-Type: application/json; charset=UTF-8");


//$get = filter_input(INPUT_POST, "x");
//$obj = json_decode($get, false);

$obj = 1;
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

$sql = 'SELECT other_name FROM students_data';
//$result = $conn->query('SELECT * FROM students_data');
$result = mysqli_query($conn, $sql);
if ($result == true){

	//echo  "Thanks for your cooperation!";
$test = '';
$arr = array();
while($row = mysqli_fetch_array($result)){

echo  $row['other_name'];

 

//echo json_encode($arr);
};

//echo $arr;

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

<!--
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Academics &mdash; Website by Colorlib</title>
  



</head>

<body>

<form>
	<select id="select">
		<option>ok</option>
		
	</select>
</form>
<div id="go">
	<?php
		//for($i = 0; $i < 5; $i++){
      	
      	//echo $arr[$i] . '<br>';
      //};
      ?>
</div>

</body>
</html>






//connect to database
try {
$con= new PDO('mysql:host=host;dbname=dbName', "user", "pwd");
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $con->query('SELECT * FROM hero LIMIT ?');
stmt->bind_param("s", $obj->limit)
$stmt->execute()
$result = $stmt-.get_result()
$ooyp = $result->fetch_all(MYSQLI_ASSOC)
//$result->setFetchMode(PDO::FETCH_ASSOC);

echo json_encode($ooyp)


} // end record loop
} catch(PDOException $e) {
echo 'ERROR: ' . $e->getMessage();
} // end try


-->