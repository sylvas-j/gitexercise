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

$sql_s1 = "SELECT students_id FROM students_data WHERE students_id = '$students->pageid'";

$res1 = $conn->query($sql_s1);
$row1 = mysqli_fetch_array($res1);





if ($conn->query($sql_s1) == True){


	if($row1 != ''){

		$sql1 = "UPDATE students_data SET sname = '$students->sname',
			other_name = '$students->oname',
			class = '$students->class',
			phone = '$students->phone',
			parents_no = '$students->p_phone',
			email = '$students->email',
			address = '$students->address',
			dob = '$students->dob',
			age = '$students->age',
			sex = '$students->sex',
			category = '$students->category',
			former_sch = '$students->f_sch',
			year_admin = '$students->yr_adm'
			WHERE students_id = '$students->pageid'";

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






$output1 = <<< HERE
surname: $students->sname
other name: $students->oname
class: $students->class
phone: $students->phone
parent's phone: $students->p_phone
email: $students->email
address: $students->address
dob: $students->dob
age: $students->age
sex: $students->sex
category: $students->category
former school: $students->f_sch
date admitted: $students->yr_adm
....
....
....
HERE;

//open file for output
$fp1 = fopen("C:\\xampp\\htdocs\\projects\\bello\\students_backup.txt", "a");
//write to the file
fwrite($fp1, $output1);
fclose($fp1);

/*
//open up the contact file
$fp = fopen(students_backup.txt”, “r”) or die(“error”);
//print a line at a time
while (!feof($fp)){
$line = fgets($fp);
print “$line <br />”;
}
//close the file
fclose($fp);
*/

// writing to and reading from a comma-separated value file
//generate output for text file
$output = $students->sname . "\t";
$output .= $students->oname . "\t";
$output .= $students->class . "\t";
$output .= $students->phone . "\t";
$output .= $students->p_phone . "\t";
$output .= $students->email . "\t";
$output .= $students->address . "\t";
$output .= $students->dob . "\t";
$output .= $students->age . "\t";
$output .= $students->sex . "\t";
$output .= $students->category . "\t";
$output .= $students->f_sch . "\t";
$output .= $students->yr_adm . "\n";

$list = array($students->sname, $students->oname, $students->class, $students->phone, $students->p_phone, $students->email, $students->address, $students->dob, $students->age, $students->sex, $students->category, $students->f_sch, $students->yr_adm);
/*
$students->sname,
$students->oname,
$students->class,
$students->phone,
$students->p_phone,
$students->email,
$students->address,
$students->dob,
$students->age,
$students->sex,
$students->category,
$students->f_sch,
$students->yr_adm);
*/
$fp = fopen("C:\\xampp\\htdocs\\projects\\bello\\student_register.csv", "a");
//write to the file
//foreach($list as $line){
	fputcsv($fp, $list);
//};
//fwrite($fp, $output);
fclose($fp);


/*
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








} else {echo "ERROR: " . $sql1 . "<br>"  . $conn->error;
	};
$conn->close();




} else {
	 echo  "Your form is empty please input the requested data!";
};

//echo $get;


?>