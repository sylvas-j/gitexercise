
<?php


header("Content-Type: application/json; charset=UTF-8");


$get1 = filter_input(INPUT_POST, "y");
$obj1 = json_decode($get1, false);

//$obj1 = 4;
//echo $obj1;
//echo $obj1->pageid;


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


$first = 'FIRST TERM';
$second = 'SECOND TERM';
$third = 'THIRD TERM';

//
// THIS WHOLE LINES OF CODE PULL OUT THE DIFFERENT CONTENTS OF FIRST TERM TABLE
//
$sqls_ff = "SELECT * FROM first_term WHERE students_id = '$obj1->pageid' AND year = '$obj1->year_v' AND installment = 'FIRST INSTALLMENT'";
$result11 = $conn->query($sqls_ff);
//$result = mysqli_query($conn, $sql);
//echo $obj1->pageid;

if ($result11 == True){
	//echo  "Thanks for your cooperation!";
while($row11 = mysqli_fetch_array($result11)){

	$data['ff_installment'] = $row11['installment'];
	$data['ff_amount'] = $row11['amount'];
	$data['ff_amt_paid'] = $row11['amt_paid'];
	$data['ff_balance'] = $row11['balance'];
	$data['ff_timedate'] = $row11['timedate'];
	$data['ff_comments'] = $row11['comments'];

};
};

$sqls_fs = "SELECT * FROM first_term WHERE students_id = '$obj1->pageid' AND year = '$obj1->year_v' AND installment = 'SECOND INSTALLMEMT'";
$result12 = $conn->query($sqls_fs);
//$result = mysqli_query($conn, $sql);
if ($result12 == True){
	//echo  "Thanks for your cooperation!";
while($row12 = mysqli_fetch_array($result12)){

	$data['fs_installment'] = $row12['installment'];
	$data['fs_amount'] = $row12['amount'];
	$data['fs_amt_paid'] = $row12['amt_paid'];
	$data['fs_balance'] = $row12['balance'];
	$data['fs_timedate'] = $row12['timedate'];
	$data['fs_comments'] = $row12['comments'];

};
};

$sqls_ft = "SELECT * FROM first_term WHERE students_id = '$obj1->pageid' AND year = '$obj1->year_v' AND installment = 'THIRD INSTALLMENT'";
$result13 = $conn->query($sqls_ft);
//$result = mysqli_query($conn, $sql);
if ($result13 == True){
	//echo  "Thanks for your cooperation!";
while($row13 = mysqli_fetch_array($result13)){

	$data['ft_installment'] = $row13['installment'];
	$data['ft_amount'] = $row13['amount'];
	$data['ft_amt_paid'] = $row13['amt_paid'];
	$data['ft_balance'] = $row13['balance'];
	$data['ft_timedate'] = $row13['timedate'];
	$data['ft_comments'] = $row13['comments'];

};
};

$sqls_fft = "SELECT * FROM first_term WHERE students_id = '$obj1->pageid' AND year = '$obj1->year_v' AND installment = 'FOURTH INSTALLMENT'";
$result14 = $conn->query($sqls_fft);
//$result = mysqli_query($conn, $sql);
if ($result14 == True){
	//echo  "Thanks for your cooperation!";
while($row14 = mysqli_fetch_array($result14)){

	$data['fft_installment'] = $row14['installment'];
	$data['fft_amount'] = $row14['amount'];
	$data['fft_amt_paid'] = $row14['amt_paid'];
	$data['fft_balance'] = $row14['balance'];
	$data['fft_timedate'] = $row14['timedate'];
	$data['fft_comments'] = $row14['comments'];

};
};
//echo json_encode($row);




//
// THIS WHOLE LINES OF CODE PULL OUT THE DIFFERENT CONTENTS OF SECOND TERM TABLE
//SECOND TERM TABLE

$sqls_sf = "SELECT * FROM second_term WHERE students_id = '$obj1->pageid' AND year = '$obj1->year_v' AND installment = 'FIRST INSTALLMENT'";
$result21 = $conn->query($sqls_sf);
//$result = mysqli_query($conn, $sql);
if ($result21 == True){
	//echo  "Thanks for your cooperation!";
while($row21 = mysqli_fetch_array($result21)){

	$data['sf_installment'] = $row21['installment'];
	$data['sf_amount'] = $row21['amount'];
	$data['sf_amt_paid'] = $row21['amt_paid'];
	$data['sf_balance'] = $row21['balance'];
	$data['sf_timedate'] = $row21['timedate'];
	$data['sf_comments'] = $row21['comments'];

};
};

$sqls_ss = "SELECT * FROM second_term WHERE students_id = '$obj1->pageid' AND year = '$obj1->year_v' AND installment = 'SECOND INSTALLMEMT'";
$result22 = $conn->query($sqls_ss);
//$result = mysqli_query($conn, $sql);
if ($result22 == True){
	//echo  "Thanks for your cooperation!";
while($row22 = mysqli_fetch_array($result22)){

	$data['ss_installment'] = $row22['installment'];
	$data['ss_amount'] = $row22['amount'];
	$data['ss_amt_paid'] = $row22['amt_paid'];
	$data['ss_balance'] = $row22['balance'];
	$data['ss_timedate'] = $row22['timedate'];
	$data['ss_comments'] = $row22['comments'];

};
};

$sqls_st = "SELECT * FROM second_term WHERE students_id = '$obj1->pageid' AND year = '$obj1->year_v' AND installment = 'THIRD INSTALLMENT'";
$result23 = $conn->query($sqls_st);
//$result = mysqli_query($conn, $sql);
if ($result23 == True){
	//echo  "Thanks for your cooperation!";
while($row23 = mysqli_fetch_array($result23)){

	$data['st_installment'] = $row23['installment'];
	$data['st_amount'] = $row23['amount'];
	$data['st_amt_paid'] = $row23['amt_paid'];
	$data['st_balance'] = $row23['balance'];
	$data['st_timedate'] = $row23['timedate'];
	$data['st_comments'] = $row23['comments'];

};
};

$sqls_sft = "SELECT * FROM second_term WHERE students_id = '$obj1->pageid' AND year = '$obj1->year_v' AND installment = 'FOURTH INSTALLMENT'";
$result24 = $conn->query($sqls_sft);
//$result = mysqli_query($conn, $sql);
if ($result24 == True){
	//echo  "Thanks for your cooperation!";
while($row24 = mysqli_fetch_array($result24)){

	$data['sft_installment'] = $row24['installment'];
	$data['sft_amount'] = $row24['amount'];
	$data['sft_amt_paid'] = $row24['amt_paid'];
	$data['sft_balance'] = $row24['balance'];
	$data['sft_timedate'] = $row24['timedate'];
	$data['sft_comments'] = $row24['comments'];

};
};
//echo json_encode($row);



//
// THIS WHOLE LINES OF CODE PULL OUT THE DIFFERENT CONTENTS OF THIRD TERM TABLE
//THIRD TERM TABLE

$sqls_tf = "SELECT * FROM third_term WHERE students_id = '$obj1->pageid' AND year = '$obj1->year_v' AND installment = 'FIRST INSTALLMENT'";
$result31 = $conn->query($sqls_tf);
//$result = mysqli_query($conn, $sql);
if ($result31 == True){
	//echo  "Thanks for your cooperation!";
while($row31 = mysqli_fetch_array($result31)){

	$data['tf_installment'] = $row31['installment'];
	$data['tf_amount'] = $row31['amount'];
	$data['tf_amt_paid'] = $row31['amt_paid'];
	$data['tf_balance'] = $row31['balance'];
	$data['tf_timedate'] = $row31['timedate'];
	$data['tf_comments'] = $row31['comments'];

};
};

$sqls_ts = "SELECT * FROM third_term WHERE students_id = '$obj1->pageid' AND year = '$obj1->year_v' AND installment = 'SECOND INSTALLMEMT'";
$result32 = $conn->query($sqls_ts);
//$result = mysqli_query($conn, $sql);
if ($result32 == True){
	//echo  "Thanks for your cooperation!";
while($row32 = mysqli_fetch_array($result32)){

	$data['ts_installment'] = $row32['installment'];
	$data['ts_amount'] = $row32['amount'];
	$data['ts_amt_paid'] = $row32['amt_paid'];
	$data['ts_balance'] = $row32['balance'];
	$data['ts_timedate'] = $row32['timedate'];
	$data['ts_comments'] = $row32['comments'];

};
};

$sqls_tt = "SELECT * FROM third_term WHERE students_id = '$obj1->pageid' AND year = '$obj1->year_v' AND installment = 'THIRD INSTALLMENT'";
$result33 = $conn->query($sqls_tt);
//$result = mysqli_query($conn, $sql);
if ($result33 == True){
	//echo  "Thanks for your cooperation!";
while($row33 = mysqli_fetch_array($result33)){

	$data['tt_installment'] = $row33['installment'];
	$data['tt_amount'] = $row33['amount'];
	$data['tt_amt_paid'] = $row33['amt_paid'];
	$data['tt_balance'] = $row33['balance'];
	$data['tt_timedate'] = $row33['timedate'];
	$data['tt_comments'] = $row33['comments'];

};
};

$sqls_tft = "SELECT * FROM third_term WHERE students_id = '$obj1->pageid' AND year = '$obj1->year_v' AND installment = 'FOURTH INSTALLMENT'";
$result34 = $conn->query($sqls_tft);
//$result = mysqli_query($conn, $sql);
if ($result34 == True){
	//echo  "Thanks for your cooperation!";
while($row34 = mysqli_fetch_array($result34)){

	$data['tft_installment'] = $row34['installment'];
	$data['tft_amount'] = $row34['amount'];
	$data['tft_amt_paid'] = $row34['amt_paid'];
	$data['tft_balance'] = $row34['balance'];
	$data['tft_timedate'] = $row34['timedate'];
	$data['tft_comments'] = $row34['comments'];

};
};

//THIS IS FOR THE OUTSTANDING CALCULATIONS

$sql1 = "SELECT amount FROM termly_fees WHERE term = '$first' AND year = '$obj1->year_v' AND class = (SELECT class FROM students_data WHERE students_id = '$obj1->pageid')";
$result1 = $conn->query($sql1);
//$result = mysqli_query($conn, $sql);
if ($result1 == True){
	//echo  "Thanks for your cooperation!";
while($row1 = mysqli_fetch_array($result1)){

	$data['ff_fees_amt'] = $row1['amount'];

};
};


$sql2 = "SELECT amount FROM termly_fees WHERE term = '$second' AND year = '$obj1->year_v' AND class = (SELECT class FROM students_data WHERE students_id = '$obj1->pageid')";
$result2 = $conn->query($sql2);
//$result = mysqli_query($conn, $sql);
if ($result2 == True){
	//echo  "Thanks for your cooperation!";
while($row2 = mysqli_fetch_array($result2)){

	$data['sf_fees_amt'] = $row2['amount'];

};
};


$sql3 = "SELECT amount FROM termly_fees WHERE term = '$third' AND year = '$obj1->year_v' AND class = (SELECT class FROM students_data WHERE students_id = '$obj1->pageid')";
$result3 = $conn->query($sql3);
//$result = mysqli_query($conn, $sql);
if ($result3 == True){
	//echo  "Thanks for your cooperation!";
while($row3 = mysqli_fetch_array($result3)){

	$data['tf_fees_amt'] = $row3['amount'];

};
};


//echo json_encode($row);




echo json_encode($data);//to json
// i have beeb struggleing to send this data to my html problem but it was not working. also to discovered that is all because of seending the data with other feedback like "echo success" kind of feedback.



// ;
//header("refresh:20; url=maths.html");
//} else {echo "ERROR: " . $sql . "<br>" . $conn->error;
//	};
$conn->close();	

} else {
	 echo  "A drop of comment will enhance our services to you!";
};




/*





$sql_s1 = "SELECT students_id FROM first_term WHERE students_id = '$students_id'";

$res1 = $conn->query($sql_s1);
$row1 = mysqli_fetch_array($res1);
/*
$sql_s2 = "SELECT students_id FROM secondterm WHERE students_id = '$obj->pageid'";

$res2 = $conn->query($sql_s2);
$row2 = mysqli_fetch_array($res2);

$sql_s3 = "SELECT students_id FROM thirdterm WHERE students_id = '$obj->pageid'";

$res3 = $conn->query($sql_s3);
$row3 = mysqli_fetch_array($res3);
*/
/*
$sql1 = "INSERT INTO first_term(students_id, installment, amount, amt_paid, balance, timedate, comments)
		VALUES ('$students_id', '$obj->install_v', '$obj->amt_v', '$obj->paid_v', '$balance', '$obj->date_v' '$obj->com_v')";



if ($conn->query($sql_s1) == True){

	echo  "Data received successfully!";

	if($row1 != ''){

		$sql1 = "UPDATE first_term SET installment = '$obj->install_v', amount = '$obj->amt_v', amt_paid = '$obj->paid_v', balance = '$balance', timedate = '$obj->date_v', comments = '$obj->com_v' WHERE students_id = '$students_id'";
		$result = $conn->query($sql1);

		echo "School fees already exist, inserted <br />" ;
		//echo $row1;
		
		//$date = new DateTime();
		//echo json_encode($date);
		//echo json_encode($time);
		//echo json_encode($tim);

	}else{
		$sql1 = "INSERT INTO first_term(students_id, installment, amount, amt_paid, balance, timedate, comments)
		VALUES ('$students_id', '$obj->install_v', '$obj->amt_v', '$obj->paid_v', '$balance', '$obj->date_v' '$obj->com_v')";

		if($conn->query($sql1 == True)){
			echo "School fees inserted.";
		}else{ 
			echo "didnt insert, but attempted it";
			echo "ERROR: " . $sql1 . "<br>" . $conn->error;
		};
		//echo $result;
		
	};

	

//echo json_encode($responce);
//header("refresh:20; url=maths.html");


} else {echo "ERROR: " . $sql1 . "<br>" . $conn->error;
	};
$conn->close();




*/



  ?>



