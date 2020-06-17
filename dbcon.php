<?php


$server ='localhost';
$user ='root';
$password ='';
$db = 'coronadb';

$conn = mysqli_connect($server, $user, $password, $db );

if($conn){
		?>
		<script> 
			alert("Connection made sucessfully")
		</script>
		<?php
	}else{
		?>
		<script> 
		alert("Connection failed")
		</script>
	<?php
}


?>