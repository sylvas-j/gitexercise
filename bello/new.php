
<script src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript">




	
//const select = function(){

	//alert("ok");
	$(document).ready(function(){
		//var id = $("#class_list").val();
		var got = 11111111111111;

		if(got != ''){
		$.ajax({
			type:"POST",
			url:"new.php",
			data:{id:got},
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

</script>


<?php
	$get = $_POST['id'];
	echo $get;
//$get = filter_input(INPUT_POST, "class");
//$obj = json_decode($get, false);
//echo $obj;
?>

