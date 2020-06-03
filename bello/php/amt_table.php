<?php

header("Content-Type: application/json; charset=UTF-8");


$get = filter_input(INPUT_POST, "z");
$obj = json_decode($get, false);

//$obj = 3;

if(!empty($obj)){


//this insert data in my data base
$dsn1='localhost';
$user= 'root';
$password='?/iPTSJ\^@\$TYOEs\|';  
$dbname  = 'pilot';

//balances for the fund made in php and send to database
$balance = $obj->amt_v - $obj->paid_v;
//$students_id = 4;

$first = 'FIRST TERM';
$second = 'SECOND TERM';
$third = 'THIRD TERM';

//$f_install = "FIRST INSTALLMENT";
//$s_install = "SECOND INSTALLMEMT";
//$t_install = "THIRD INSTALLMENT";
//$ft_install = "FOURTH INSTALLMENT";

$conn = new mysqli ($dsn1, $user, $password, $dbname);

if ($conn->connect_error){
	die("Connection Failed: " . $conn->connect_error);
};


	
$sql_s1 = "SELECT installment FROM first_term WHERE students_id = '$obj->students_id' AND year = '$obj->year_v' AND installment = '$obj->install_v'";

$res1 = $conn->query($sql_s1);
$row1 = mysqli_fetch_array($res1);
//echo "this works";

$sql_s2 = "SELECT installment FROM second_term WHERE students_id = '$obj->students_id' AND year = '$obj->year_v' AND installment = '$obj->install_v'";

$res2 = $conn->query($sql_s2);
$row2 = mysqli_fetch_array($res2);

$sql_s3 = "SELECT installment FROM third_term WHERE students_id = '$obj->students_id' AND year = '$obj->year_v' AND installment = '$obj->install_v'";

$res3 = $conn->query($sql_s3);
$row3 = mysqli_fetch_array($res3);


//echo json_encode($row1);

/*
$sql1 = "INSERT INTO first_term (students_id, installment)
							VALUES ('$students_id', '$obj->install_v')";
				$result = mysqli_query($conn, $sql1);
				//$row20 = mysqli_fetch_array($result);
				//echo json_encode($row20);

*/


if($obj->term_v == $first){

	if($row1 != ''){

		echo $obj->install_v . " has be made already. \nPlease consider the next installment.";

	}else{

		$sql1 = "INSERT INTO first_term (students_id, year, installment, amount, amt_paid, balance, timedate, comments)
			VALUES ('$obj->students_id', '$obj->year_v', '$obj->install_v', '$obj->amt_v', '$obj->paid_v', '$balance', '$obj->date_v', '$obj->com_v')";
				$result = mysqli_query($conn, $sql1);

				//$row = mysqli_fetch_array($result);
					echo "First term School fees inserted.";
	};// endd row if


}else if($obj->term_v == $second){

	if($row2 != ''){

		echo $obj->install_v . " has be made already. \nPlease consider the next installment.";

	}else{

		$sql1 = "INSERT INTO second_term (students_id, year, installment, amount, amt_paid, balance, timedate, comments)
			VALUES ('$obj->students_id', '$obj->year_v', '$obj->install_v', '$obj->amt_v', '$obj->paid_v', '$balance', '$obj->date_v', '$obj->com_v')";
				$result = mysqli_query($conn, $sql1);

				//$row = mysqli_fetch_array($result);
					echo "Second term School fees inserted.";
	};// endd row if


}else{


	if($row3 != ''){

		echo $obj->install_v . " has be made already. \nPlease consider the next installment.";

	}else{

		$sql1 = "INSERT INTO third_term (students_id, year, installment, amount, amt_paid, balance, timedate, comments)
			VALUES ('$obj->students_id', '$obj->year_v', '$obj->install_v', '$obj->amt_v', '$obj->paid_v', '$balance', '$obj->date_v', '$obj->com_v')";
				$result = mysqli_query($conn, $sql1);

				//$row = mysqli_fetch_array($result);
					echo "Third term School fees inserted.";
	};// endd row if


};



$output1 = <<< HERE
students_id: $obj->students_id
year : $obj->year_v
installment: $obj->install_v
amount: $obj->amt_v
amount paid: $obj->paid_v
balance : $balance
date: $obj->date_v
comments: $obj->com_v
....
....
....
HERE;

//open file for output
$fp1 = fopen("C:\\xampp\\htdocs\\projects\\bello\\payments.txt", "a");
//write to the file
fwrite($fp1, $output1);
fclose($fp1);


$list = array($obj->students_id, $obj->year_v, $obj->install_v, $obj->amt_v, $obj->paid_v, $balance, $obj->date_v, $obj->com_v);

$fp = fopen("C:\\xampp\\htdocs\\projects\\bello\\amt_table.csv", "a");
//write to the file
//foreach($list as $line){
	fputcsv($fp, $list);
//};
//fwrite($fp, $output);
fclose($fp);





	// this is for first term
	
/*
		if($row1 != ''){

			$sql1 = "UPDATE first_term SET installment = '$obj->install_v', amount = '$obj->amt_v', amt_paid = '$obj->paid_v', amt_paid = '$obj->paid_v', balance = '$balance', timedate = '$obj->date_v', comments = '$obj->com_v' WHERE students_id = '$row1[0]'";
			$result = $conn->query($sql1);

			echo "First term School fees updated." ;
			//echo $row1;

		}else{
			$sql1 = "INSERT INTO first_term (students_id, installment, amount, amt_paid, balance, timedate, comments)
						VALUES ('$students_id', '$obj->install_v', '$obj->amt_v', '$obj->paid_v', '$balance', '$obj->date_v', '$obj->com_v')";
			$result = mysqli_query($conn, $sql1);

			//$row = mysqli_fetch_array($result);
				echo "First term School fees inserted.";
						//echo  json_encode($row);
		};

	// this is for second term
	}else if($obj->term_v == $second){

		if($row2 != ''){

			$sql1 = "UPDATE second_term SET installment = '$obj->install_v', amount = '$obj->amt_v', amt_paid = '$obj->paid_v', amt_paid = '$obj->paid_v', balance = '$balance', timedate = '$obj->date_v', comments = '$obj->com_v' WHERE students_id = '$row2[0]'";
			$result = $conn->query($sql1);

			echo "Second term School fees updated." ;
			//echo $row1;

		}else{
			$sql1 = "INSERT INTO second_term (students_id, installment, amount, amt_paid, balance, timedate, comments)
						VALUES ('$students_id', '$obj->install_v', '$obj->amt_v', '$obj->paid_v', '$balance', '$obj->date_v', '$obj->com_v')";
			$result = mysqli_query($conn, $sql1);

			//$row = mysqli_fetch_array($result);
				echo "Second term School fees inserted.";
						//echo  json_encode($row);
		};

	// this is for third term
	}else{

		if($row3 != ''){

			$sql1 = "UPDATE third_term SET installment = '$obj->install_v', amount = '$obj->amt_v', amt_paid = '$obj->paid_v', amt_paid = '$obj->paid_v', balance = '$balance', timedate = '$obj->date_v', comments = '$obj->com_v' WHERE students_id = '$row3[0]'";
			$result = $conn->query($sql1);

			echo "Third term School fees updated." ;
			//echo $row1;

		}else{
			$sql1 = "INSERT INTO third_term (students_id, installment, amount, amt_paid, balance, timedate, comments)
						VALUES ('$students_id', '$obj->install_v', '$obj->amt_v', '$obj->paid_v', '$balance', '$obj->date_v', '$obj->com_v')";
			$result = mysqli_query($conn, $sql1);

			//$row = mysqli_fetch_array($result);
				echo "Third term School fees inserted.";
						//echo  json_encode($row);
		};
	};

		//$sql1 = "SELECT * FROM first_term";
		
		//echo $result;
	

*/

//echo json_encode($responce);
//header("refresh:20; url=maths.html");


//} else {echo "ERROR: " . $sql1 . "<br>" . $conn->error;
//	};
$conn->close();




} else {
	 echo  "Your form is empty please input the requested data!";
};
//echo  "A drop of comment will enhance our services to you!";

	//header("refresh: 10");

?>



