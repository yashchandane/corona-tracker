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
			<li class="nav-item text-center">
				<a class="nav-link" href="indiacoronalive.php"><b>India Corona LIVE</b></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="worldcoronalive.php"><b>world Corona LIVE</b></a>
			</li>   
		</ul>
	</div>
</nav>

<!--***********************  corona latest india updates  ***********************-->

<section class ="corona_update container-fluid">
	<div class="my-5">
		<h3 class="text-uppercase text-center"><b>covid-19 updates of india daywise</b></h3>
	</div>

	<div class = "table-responsive">

		<table class=" table table-bordered table-striped text-center" id="tbl">


<?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$daywise = json_decode($data, true);
$totalcount = count($daywise['cases_time_series']);
$i=0;
while($i < $totalcount--){

?>

<tr>
	<th class="text-left text-uppercase ">Day & month</th>
	<th colspan="5"> </th>
</tr>
<tr>
	<td colspan="6" class = "text-left"> <?php echo $daywise['cases_time_series'][$totalcount]['date'] . "</br>" ; ?> </td>
</tr>

<tr class="text-capitalize text-white">
	<th style="color:#fff; background:#2196f3;">total confirmed</th>
	<th style="color:#fff; background:#ffc107;">total recovered</th>
	<th style="color:#fff; background:#008c76ff;">total deceased</th>
	<th style="color:#fff; background:#e91e7f;">daily confirmed</th>
	<th style="color:#fff; background:#4caf50;">daily recovered</th>
	<th style="color:#fff; background:#ee2737ff;">daily deceased</th>
</tr>

<tr class="mb-5">
	<td style="background: #bed2f3;"> <?php echo $daywise['cases_time_series'][$totalcount]['totalconfirmed'] . "</br>" ; ?> </td>
	<td style="background: #ffe493;"> <?php echo $daywise['cases_time_series'][$totalcount]['totalrecovered'] . "</br>" ; ?> </td>
	<td style="background: #9ed9ccff;"> <?php echo $daywise['cases_time_series'][$totalcount]['totaldeceased'] . "</br>" ; ?> </td>
	<td style="background: #fc95c6;"> <?php echo $daywise['cases_time_series'][$totalcount]['dailyconfirmed'] . "</br>" ; ?> </td>
	<td style="background: #88d28b;"> <?php echo $daywise['cases_time_series'][$totalcount]['dailyrecovered'] . "</br>" ; ?> </td>
	<td style="background: #fb99a1;"> <?php echo $daywise['cases_time_series'][$totalcount]['dailydeceased'] . "</br>" ; ?> </td>

</tr>

<?php
$t0;
}
?>

</table>
</div>



<!-- ******************* top icon ****************** -->


<div class="container scrolltop float-right pr-5">
	<i class=" fa fa-arrow-up" onclick="topFunction()" id= "myBtn"></i>
</div>


<!-- ******************* footer ****************** -->

<footer class="mt-5">
	<div class="footer_style text-white text-center container-fluid">
		< <p>All rights reserve by Yash Chandane and team. copyright by Yash Chandane and team</p>
	</div>




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
