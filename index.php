<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<?php include 'link/links.php'; ?>
	<?php include 'css/style.php'; ?>
</head>
<body onload="fetch()">

<nav class="navbar navbar-expand-lg nav_style  p-3 navbar-dark">
	<a class="navbar-brand pl-3 count_style" href="#"><img src="images/logo.png"> <b> Apex COVID-19 Tracker</b></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto pr-5 text-capitalize">
			<li class="nav-item active">
				<a class="nav-link text-center" href="#"><b>Home</b> <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item text-center ">
				<a class="nav-link" href="#aboutid"><b>about</b></a>
			</li>
			<li class="nav-item text-center">
				<a class="nav-link" href="#symid"><b>symptoms</b></a>
			</li>
			<li class="nav-item text-center">
				<a class="nav-link" href="#preventid"><b>preventions</b></a>
			</li>
			<li class="nav-item text-center">
				<a class="nav-link" href="#covidbot"><b>covidBOT</b></a>
			</li>
			<li class="nav-item text-center">
				<a class="nav-link" href="https://www.aawaz.com/"><b>Engage time here</b></a>
			</li>
			<li class="nav-item text-center">
				<a class="nav-link" href="http://127.0.0.1:5000/"><b>Corona Inspector</b></a>
			</li>
			<li class="nav-item dropdown text-center">
		        <a class="nav-link btn-default dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
		          <b>Live Section</b>
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		         	<a class="dropdown-item " href="indiacoronalive.php"><b>india corona live</b></a>
		          	<a class="dropdown-item" href="worldcoronalive.php"><b>world corona live</b></a>
		          	<a class="dropdown-item" href="daywise.php"><b>daily corona live</b></a>
		      </li>
			<li class="nav-item text-center ">
				<a class="nav-link" href="#contactid"><b>Contact</b></a>
			</li>   
		</ul>
	</div>
</nav>

<div class = "main_header">
	<div class="row w-100 h-100">
		<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
			<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
				<img src="images/eksath.png" width="300", height="300">
			</div>
		</div>

		<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
			<div class="rightside -100 h-100 d-flex justify-content-center align-items-center">
				<h1>Let's Stay Safe and Fight Together Against Cor <span class="corona_rot"><img src="images/covid.png"></span> na Virus</h1>  
			</div>
		</div>
	</div>
</div>

<!-- ********************** about selection ********************** -->

<div class="container-fluid sub_section pt-5 pb-5 " id="aboutid">
	<div class="section_header text-center mb-5 mt -4">
		<h1>About COVID - 19</h1>
	</div>

	<div class="row text-center pt-5">
		<div class="col-lg-5 col-md-6 col-12 ml-5 about_res">
			<img src="images/aboutcorona.png" class="img-fluid">
		</div>

		<div class="col-lg-6 col-md-6 col-12">
			<h2>What is COVID - 19(Corona Virus)</h2>
			<p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.</p>
			<p>Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness. The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes.</p>
			<p>The best way to prevent and slow down transmission is be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face. </p>
			
		</div>
	</div>
	
</div>


<!-- ******************* Coronavirus Symptoms ********************* -->


<div class="container-fluid pt-5 pb-5 " id="symid">
	<div class="section_header text-center mb-5 mt -4">
		<h1>Coronavirus Symptoms</h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/cough.png" class="img-fluid" width="120" height="120">
				<figcaption>Cough</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/runnynose.png" class="img-fluid" width="120" height="120">
				<figcaption>Runny Nose</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/fever.png" class="img-fluid" width="120" height="120">
				<figcaption>Fever</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/sick.png" class="img-fluid" width="120" height="120">
				<figcaption>Cold</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/weak.png" class="img-fluid" width="120" height="120">
				<figcaption>Tiredness</figcaption>
				</figure>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<figure class="text-center">
				<img src="images/breath.png" class="img-fluid" width="120" height="120">
				<figcaption>Difficulty Breathing</figcaption>
				</figure>
			</div>
		</div>
	</div>
</div>


<!-- ******************* Prevention Against Coronavirus ********************* -->


<div class="container-fluid sub_section pt-5 pb-5 " id="preventid">
	<div class="section_header text-center mb-5 mt -4">
		<h1>6 Prevention Against Coronavirus</h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
						<img src="images/handwash.png" class="img-fluid" width="90" height="90">
						</figure>
					</div>
					
					<div class="col-lg-8 col-md-4 col-12">
						<p>Wash your hands regularly for atleast 20 seconds, with soap and water or use alcohol-based hand rub.</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
						<img src="images/mask.png" class="img-fluid" width="90" height="90">
						</figure>
					</div>
					
					<div class="col-lg-8 col-md-4 col-12">
						<p>Cover your nose and mouth with disosable tissue or flexed elbow when you cough or sneeze.</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
						<img src="images/quarantine.png" class="img-fluid" width="90" height="90">
						</figure>
					</div>
					
					<div class="col-lg-8 col-md-4 col-12">
						<p>Avoid close contact(1 meter or 3 feet) with people who are unwell.</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
						<img src="images/home.png" class="img-fluid" width="90" height="90">
						</figure>
					</div>
					
					<div class="col-lg-8 col-md-4 col-12">
						<p>Stay home and stay self-isolated from others in the household if you feel unwell.</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
						<img src="images/news.png" class="img-fluid" width="90" height="90">
						</figure>
					</div>
					
					<div class="col-lg-8 col-md-4 col-12">
						<p>Stay informed by watching news & follow the recommended practices.</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
						<img src="images/medical.png" class="img-fluid" width="90" height="90">
						</figure>
					</div>
					
					<div class="col-lg-8 col-md-4 col-12">
						<p>If you have fever, cough, and difficulty breathing, seek medical care.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- *********************chat bot popup***************** -->

<div class="container-fluid pt-5 pb-5 " id="covidbot">
	<div class="section_header text-center mb-5 mt -4">
		<h1>Any Doubts? Chat here !!</h1>
	</div>


<div class=" container-fluid col-lg-4 col-md-4 col-12 mt-5 md-5 text-center">
	<iframe
    allow="microphone;"
    width="350"
    height="430"
    src="https://console.dialogflow.com/api-client/demo/embedded/45d56f47-cfbb-4898-a5e0-16e69ea64ed2">
</iframe>
</div>


<!-- ******************* Contact us ********************* -->


<div class="container-fluid sub_section pt-5 pb-5 " id="contactid">
	<div class="section_header text-center mb-5 mt -4">
		<h1>Contact Us ASAP</h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-12">
				<form action ="" method ="POST">

					<div class="form-group">
						<label>Username</label>
					    <input type="text" class="form-control" name="username" placeholder="name" autocomplete="off" required>
					</div>

				  	<div class="form-group">
				    	<label>Email</label>
				    	<input type="email" class="form-control" name="email" placeholder="name@example.com" required autocomplete="off">
				  	</div>

				  	<div class="form-group">
				    	<label>Mobile</label>
				    	<input type="number" class="form-control" name="mobile" placeholder="mobile" required autocomplete="off">
				  	</div>

				  	<div class="form-group">
				  		<label>Select symptoms</label> <br>

				  		<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
				   		<input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]"value="cold" >
				  		<label class="custom-control-label" for="customcheckbox1">Cold</label>
						</div>

						<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
				   		<input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]"value="fever" >
				  		<label class="custom-control-label" for="customcheckbox2">Fever</label>
						</div>

						<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
				   		<input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]"value="breath" >
				  		<label class="custom-control-label" for="customcheckbox3">Difficulty in breathing</label>
						</div>

						<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
				   		<input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]"value="tired" >
				  		<label class="custom-control-label" for="customcheckbox4">Feeling weak</label>
						</div>
					</div>

				  	<div class="form-group">
				  		<label>Describe how are you feeling</label>
				  		<textarea class="form-control" name="msg" rows="3"></textarea>
				  	</div>

				  	<button type="submit" class="btn btn-primary" name = "submit">Submit</button>

				</form>
			</div>
		</div>
	</div>
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
</footer>

<script type="text/javascript">

$('.count').counterUp({
	delay: 10,
	time:2000
})
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



<!-- ********************* database insertion ****************** -->

<?php

include 'dbcon.php';

if(isset($_POST['submit'])){

	$username = $_POST['username'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$symp = $_POST['coronasym'];
	$msg = $_POST['msg'];

	$chk = "";
	foreach($symp as $chk1){
		$chk .= $chk1.",";
	}
	$insertquery = "insert into coronacase(username, email, mobile, symp, message) VALUES ('$username','$email','$mobile','$chk','$msg')";

	$query = mysqli_query($conn, $insertquery);

	if($query){
		?>
		<script> 
			alert("Thanks for your submission. We will get back to you soon.")
		</script>
		<?php
	}else{
		?>
		<script> 
		alert("Plese try after some time.")
		</script>
		<?php
	}

}


?>