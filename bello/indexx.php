<!DOCTYPE html>
<html>
<head>
	<title>Pilot Home page</title>

<link href="css/dashstyle.css" type="text/css" rel="stylesheet" media="all">


<!-- load JS files 
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    -->
    <script src="js/jquery-3.3.1.min.js"></script>  






<script type="text/javascript">
//$(initial);

$("#do").click(function(){

	

});



	function initial(){
	//let url = new URLSearchParams(
var done = localStorage.getItem('var1');
var done2 = localStorage.getItem('var2');

	$("#show").html(done);
	$("#show2").html(done2);


};


function initial2(){
	//let url = new URLSearchParams(location.search);
	//let url = new URL(location).searchParams;
	let url = new URL('https://index2.html?myVar1=42&myVar2=33');
	let params = new URLSearchParams(url.search);
var v1 = params.get("myVar1");
var v2 = params.get("myVar2");

alert(v1);
alert(v2);

alert("it works");
};
</script>  

</head>




<body>
<p>
	
	in page 3
</p>	
<div id="do">
	do_something
</div>

<div id="show"></div>
<div id="show2"></div>
<div id="class"></div>
<div id="test"></div>

<form>
	<select id="select">
		<option>ok</option>
	</select>
</form>

</body>
</html>


<!--



  var test = JSON.stringify(obj);
      var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200){
      //var myObj = JSON.parse(this.responseText);

      //var data = JSON.parse(this.responseText);

      for (x in data){
	test+= data[x].other_name + "<br>";
      };
      $("#class").html(test);
      

    }else{
      //alert(Error-   + xmlhttp.status + ":"  + xmlhttp.statusText);
      //alert("problem some where");
        }; //end if
  }; //end onreadystate

  xmlhttp.open("POST", "php/class.php", true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  //xmlhttp.open("GET", "simpleGreet.php?x=" + obj.table, true);
  xmlhttp.send("x=" + test);

}; // end init function









-->