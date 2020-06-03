<!DOCTYPE html>
<html lang="en">

<head>
  <title>Academics &mdash; Website by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
 
  <link rel="stylesheet" href="css/style.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<script src="js/jquery-3.3.1.min.js"></script>

<script type="text/javascript">




	
//const select = function(){
/*
	alert("ok");
	$(document).ready(function(){
		//var id = $("#class_list").val();
		var id = 1;

		if(id != ''){
		$.ajax({
			type:"POST",
			url:"test.php",
			data:{id:id},
			datatype:"JSON",
			success:function(data){
				
				alert(data);
				
				//$("#select").html(option);
			}
		})
	}else{
		alert("put do_something");
		};
	});//end ready
	//};

*/
	//function class_change(){
	$(document).on('change', '#students_list', function(){

	var class_v = $("#students_list").val();

	alert(class_v);

	//var class_v = 1;
//var one = 11111;
var two = 2;

	if(class_v != ''){
		localStorage.setItem('id_passed', class_v);
	 	localStorage.setItem('var2', two);

		window.document.location = './dashboard.html';
    //window.document.location = './dashboard.html' + '?id_passed=' + class_v;
	}else{
		alert("Select valid name.");
	};
//$("#check").click(function(){

	

//});

});//end onchange
	//}//end class change

</script>


<?php
	//$get = $_POST['id'];
	//
//$get = filter_input(INPUT_POST, "id");
//$obj = json_decode($get, false);
//echo $obj;
?>


<?php

?>





  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <div class="py-2 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 d-none d-lg-block">
            <a href="#" class="small mr-3"><span class="icon-question-circle-o mr-2"></span> Have a questions?</a> 
            <a href="#" class="small mr-3"><span class="icon-phone2 mr-2"></span> 10 20 123 456</a> 
            <a href="#" class="small mr-3"><span class="icon-envelope-o mr-2"></span> info@mydomain.com</a> 
          </div>
          <div class="col-lg-3 text-right">
            <a href="masterboard.html" class="small mr-3"><span class="icon-unlock-alt"></span> Master Log In</a>
            <a href="student.html" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> Register</a>
          </div>
        </div>
      </div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="#" class="d-block">
              <img src="images/photo.jpg" alt="Image" class="img-fluid" style="height: 50px; width: 100px;">
            </a>
          </div>
          <div class="mr-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li>
                  <a href="#" class="nav-link text-left">Home</a>
                </li>
                <li class="has-children">
                  <a href="#" class="nav-link text-left">About Us</a>
                  <ul class="dropdown">
                    <li><a href="#">Our Teachers</a></li>
                    <li><a href="#">Our School</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#" class="nav-link text-left">Admissions</a>
                </li>
                <li>
                  <a href="#" class="nav-link text-left">Courses</a>
                </li>
                <li>
                    <a href="#" class="nav-link text-left">Contact</a>
                  </li>
              </ul>                                                                                                                                                                                                                                                                                          </ul>
            </nav>

          </div>
          <div class="ml-auto">
            <div class="social-wrap">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-linkedin"></span></a>

              <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>
            </div>
          </div>
         
        </div>
      </div>

    </header>

    
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('images/bg_1.jpg')">
        <div class="container">
          <div class="row align-items-end justify-content-center text-center">
            <div class="col-lg-7">
              <h2 class="mb-0">Pilot Fisbell</h2>
              <p>Expanding Your Horrizons.</p>
            </div>
          </div>
        </div>
      </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <a href="index.html">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Login</span>
      </div>
    </div>

    <div class="site-section">
        <div class="container">
<!--we have form here-->

          <form action="" method="POST">
            <div class="search_div">
              <div class="label">
                <label class="search_label">
                  Select student class and name to login
                </label>
              </div>

                <div class="select">
                <select class="list students_list" id="students_list">
                	<!---->
                  <option value="">ok</option>


<?php


//$get = filter_input(INPUT_POST, "id");
//$obj = json_decode($get, false);



//if($class_vp == 'JS1' || $class_vp == 'JS2' || $class_vp == 'JS3' || $class_vp == 'SS1' || $class_vp == 'SS2' || $class_vp == 'SS3'){
if($_POST["class_listphp"] == "KINDERGARTEN" || 
  $_POST["class_listphp"] == "CRECHE" || 
  $_POST["class_listphp"] == "NURSERY ONE" || 
  $_POST["class_listphp"] == "NURSERY TWO" || 
  $_POST["class_listphp"] == "NURSERY THREE" ||
  $_POST["class_listphp"] == "BASIC ONE" || 
  $_POST["class_listphp"] == "BASIC TWO" || 
  $_POST["class_listphp"] == "BASIC THREE" || 
  $_POST["class_listphp"] == "BASIC FOUR" || 
  $_POST["class_listphp"] == "BASIC FIVE" ||
  $_POST["class_listphp"] == "JS1" || 
  $_POST["class_listphp"] == "JS2" || 
  $_POST["class_listphp"] == "JS3" || 
  $_POST["class_listphp"] == "SS1" || 
  $_POST["class_listphp"] == "SS2" || 
  $_POST["class_listphp"] == "SS3" ||
  $_POST["class_listphp"] == "EX STUDENTS")
{

  $class_vp = $_POST["class_listphp"];
  //echo $class_vp;

  $dsn1='localhost';
  $user= 'root';
  $password='?/iPTSJ\^@\$TYOEs\|';  
  $dbname  = 'pilot';

  $conn = new mysqli ($dsn1, $user, $password, $dbname);

  if ($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
  };

  $sql = "SELECT students_id, other_name FROM students_data WHERE class = '$class_vp' ORDER BY other_name";
  //$result = $conn->query('SELECT * FROM students_data');
  $result = mysqli_query($conn, $sql);

  $color1 = "lightblue";
  $color2 = "teal";
  $color = $color1;
  //} else {
  //   echo  "A drop of comment will enhance our services to you!";
  //};  
};
//this insert data in my stufent list select tag base


?>

                  
<?php
	//if($class_vp == 'JS1' || $class_vp == 'JS2' || $class_vp == 'JS3' || $class_vp == 'SS1' || $class_vp == 'SS2' || $class_vp == 'SS3'){
if($_POST["class_listphp"] == "KINDERGARTEN" || 
  $_POST["class_listphp"] == "CRECHE" || 
  $_POST["class_listphp"] == "NURSERY ONE" || 
  $_POST["class_listphp"] == "NURSERY TWO" || 
  $_POST["class_listphp"] == "NURSERY THREE" ||
  $_POST["class_listphp"] == "BASIC ONE" || 
  $_POST["class_listphp"] == "BASIC TWO" || 
  $_POST["class_listphp"] == "BASIC THREE" || 
  $_POST["class_listphp"] == "BASIC FOUR" || 
  $_POST["class_listphp"] == "BASIC FIVE" ||
  $_POST["class_listphp"] == "JS1" || 
	$_POST["class_listphp"] == "JS2" || 
	$_POST["class_listphp"] == "JS3" || 
	$_POST["class_listphp"] == "SS1" || 
	$_POST["class_listphp"] == "SS2" || 
  $_POST["class_listphp"] == "SS3" ||
  $_POST["class_listphp"] == "EX STUDENTS")
{

				if ($result == true){

					//echo  "Thanks for your cooperation!";

				while($row = mysqli_fetch_array($result)){

					
				echo  '<option value="' .$row['students_id'].'" >' .$row['other_name'] . '</option>';

				 

				//echo json_encode($arr);
				};
				//echo $arr;

				//	$row = $result->fetch_assoc()
				//echo json_encode($test);
				//header("refresh:20; url=maths.html");
				}else {
					echo "ERROR: " . $sql . "<br>" . $conn->error;
					};
					$conn->close();

};// end if
				

?>
                </select>

                <!--class of students
<option value=""></option>
                >-->


                <select class="list class_list" id="class_list" name="class_listphp">
                	<option value="">Classes</option>

      <option value="KINDERGARTEN">KINDERGARTEN</option>
      <option value="CCRECHE">CRECHE</option>
      <option value="NURSERY ONE">NURSERY ONE</option>
      <option value="NURSERY TWO">NURSERY TWO</option>
      <option value="NURSERY THREE">NURSERY THREE</option>
      <option value="BASIC ONE">BASIC ONE</option>
      <option value="BASIC TWO">BASIC TWO</option>
      <option value="BASIC THREE">BASIC THREE</option>
      <option value="BASIC FOUR">BASIC FOUR</option>
      <option value="BASIC FIVE">BASIC FIVE</option>
                	<option value="JS1">JS1</option>
                	<option value="JS2">JS2</option>
                	<option value="JS3">JS3</option>
                	<option value="SS1">SS1</option>
                	<option value="SS2">SS2</option>
                	<option value="SS3">SS3</option>
                  <option value="EX STUDENTS">EX STUDENTS</option>
                </select>


                <input type="submit" class="button" id="button" value="Search"></input>
              </div>
            </div>
            </form>          
        </div>
    </div>
  </div>


<style type="text/css">

.label, .select {
  display: block;
}

.search_div{
  position: relative;
  top: -80px;
  left: 300px;
}

.students_list{
  width: 300px;
}

.class_list {
  width: 100px;
}
</style>    

    <div class="footer">
      <div class="container">
        
        
      </div>
    </div>
    

  </div>
  <!-- .site-wrap -->

  <!-- loader -->
  

  



  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  
  <script src="js/aos.js"></script>
    <script src="js/jquery.sticky.js"></script>
  




  <script src="js/main.js"></script>

</body>

</html>















<?php
/*

try {
$fieldName = array("contactID", "name", "company", "email");
//get values from form
$srchField = filter_input(INPUT_POST, "srchField");
$srchValue = filter_input(INPUT_POST, "srchVal");
//don't proceed unless it's a valid field name
if (in_array($srchField, $fieldName)){
$field = $srchField;
//put value inside %% structure
$value = "%$srchValue%";
$con= new PDO('mysql:host=localhost;dbname=dbName', "user", "pwd");
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $con->prepare("SELECT * FROM contact WHERE $field LIKE ?");
$stmt->execute(array($value));
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
if (empty($result)){
print "No matches found";
} else {
foreach($result as $row){
foreach ($row as $field => $value){
print "<strong>$field:</strong> $value <br />";
} // end field loop
print "<br />";
} // end row loop
} // end 'empty results' if
} else {
print "That is not a valid field name";
} // end if
} catch(PDOException $e) {
echo 'ERROR: ' . $e->getMessage();
} // end try

*/
?>


