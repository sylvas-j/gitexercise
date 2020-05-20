<?php





header("Content-Type: application/json; charset=UTF-8");


$get = filter_input(INPUT_POST, "y");
$students = json_decode($get, false);



if(!empty($students)){


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

$sql_s1 = "SELECT students_id, sname, other_name, dob FROM students_data WHERE dob = '$students->dob'";

$res1 = $conn->query($sql_s1);
$row1 = mysqli_fetch_array($res1);


//echo $row1[1];


if ($conn->query($sql_s1) == True){


	if($row1[1] == $students->sname && $row1[2] == $students->oname && $row1[3] == $students->dob){

		$sql1 = "UPDATE students_data SET sname = '$students->sname', other_name = '$students->oname', class = '$students->class', phone = '$students->phone', parents_no = '$students->p_phone', email = '$students->email', address = '$students->address', dob = '$students->dob', age = '$students->age', sex = '$students->sex', category = '$students->category', former_sch = '$students->f_sch',year_admin = '$students->yr_adm' WHERE students_id = '$row1[2]'";

		$result = $conn->query($sql1);

		echo "Data successfully received. <br />" ;
		//echo $row1;

	}else{
		$sql1 = "INSERT INTO students_data 
		(sname,
		other_name,
		class, phone,
		parents_no,
		email,
		address,
		dob,
		age,
		sex,
		category,
		former_sch,
		year_admin)
VALUES ('$students->sname',
		'$students->oname',
		'$students->class',
		'$students->phone',
		'$students->p_phone',
		'$students->email',
		'$students->address',
		'$students->dob',
		'$students->age',
		'$students->sex',
		'$students->category',
		'$students->f_sch',
		'$students->yr_adm')";

		$result = $conn->query($sql1);
		//echo $result;
		echo "Data received successfully!. <br />";
	};


} else {echo "ERROR: " . $sql1 . "<br>"  . $conn->error;
	};
$conn->close();




} else {
	 echo  "Your form is empty please input the requested data!";
};

//echo $get;


?>