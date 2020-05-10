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


if ($conn->query($sql1) == True){

	echo  "Data received successfully!";


} else {echo "ERROR: " . $sql1 . "<br>" . $sql2 . "<br>" . $sql3 . "<br>" . $sql4 . "<br>"  . $conn->error;
	};
$conn->close();




} else {
	 echo  "Your form is empty please input the requested data!";
};

//echo $get;


?>