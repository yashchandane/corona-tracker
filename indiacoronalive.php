<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<?php include 'link/links.php'; ?>
	<?php include 'css/style.php'; ?>
</head>
<body onload="fetch()">

<nav class="navbar navbar-expand-lg nav_style  p-3 navbar-dark">
	<a class="navbar-brand pl-3 count_style" href="#"><img src="images/logo.png"><b> Apex COVID-19 Tracker</b></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto pr-5 text-capitalize">
			<li class="nav-item active">
				<a class="nav-link" href="index.php"><b>Home</b> <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="worldcoronalive.php"><b>world Corona LIVE</b></a>
			</li> 
			<li class="nav-item">
				<a class="nav-link" href="daywise.php"><b>daywise LIVE</b></a>
			</li> 
		</ul>
	</div>
</nav>

<!--***********************  corona latest india updates  ***********************-->

<section class ="corona_update container-fluid">
	<div class="my-5">
		<h3 class="text-uppercase text-center"><b>covid-19 updates of india</b></h3>
	</div>

	<div class = "table-responsive">

		<table class=" table table-bordered table-striped text-center" id="tbval">
			<tr>
				<th class="text-uppercase ">States</th>
				<th class="text-uppercase ">Confirmed</th>
				<th class="text-uppercase ">Active</th>
				<th class="text-uppercase ">Recovered</th>
				<th class="text-uppercase ">Death</th>
				<th class="text-uppercase ">Last Updated Time</th>
			</tr>

<?php


$data = file_get_contents('https://api.covid19india.org/data.json');
$coronalive = json_decode($data, true);

// echo "<pre>";
// print_r($coronalive);
// echo "</pre>";

$statescount = count($coronalive['statewise']);

$i=0;
while($i < $statescount){

	?>
	
	<tr>
		<td> <?php echo $coronalive['statewise'][$i]['state'] ?> </td>
		<td> <?php echo $coronalive['statewise'][$i]['confirmed'] ?> </td>
		<td> <?php echo $coronalive['statewise'][$i]['active'] ?> </td>
		<td> <?php echo $coronalive['statewise'][$i]['recovered'] ?> </td>
		<td> <?php echo $coronalive['statewise'][$i]['deaths'] ?> </td>
		<td> <?php echo $coronalive['statewise'][$i]['lastupdatedtime'] ?> </td>
</tr>


<?php
	$i++;

}

?>
		</table>
		
		
	</div>
</section>


<!-- ******************* top icon ****************** -->


<div class="container scrolltop float-right pr-5">
	<i class=" fa fa-arrow-up" onclick="topFunction()" id= "myBtn"></i>
</div>


<!-- ******************* footer ****************** -->

<footer class="mt-5">
	<div class="footer_style text-white text-center container-fluid">
		< <p>All rights reserve by Yash Chandane and team. copyright by Yash Chandane and team</p>
	</div>
</footer>

<script type="text/javascript">
	//Get the button:
	mybutton = document.getElementById("myBtn");

	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
  		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    	mybutton.style.display = "block";
  		} else {
    	mybutton.style.display = "none";
  		}
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
  		document.body.scrollTop = 0; // For Safari
  		document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

</script>
</body>
</html>
