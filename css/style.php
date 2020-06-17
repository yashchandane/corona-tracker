<style type ="text/css">
/********************** scroll smooth flow *******************/
html{
	scroll-behavior: smooth ;
}

/************************ Font whole Page ***********************/
*{ margin: 0; padding: 0; box-sizing: border-box; font-family: 'Muli', sans-serif;}

.row{margin: 0!important; margin:0!important;}

.nav_style{
	background-color: #000000!important;

}

.nav_style a{color:black;}

/*///////////// main header \\\\\\\\\\\\\*/


.main_header{
	height: 450px;
	width: 100%;

}

.rightside h1{
	font-size: 3rem;

}

/************************* animation *******************/
.corona_rot img{

	animation: gocorona 3s linear infinite;

}

@keyframes gocorona{

	0% { transform: rotate(0); }
	100% { transform: rotate(360deg); }

}

.leftside img{  
	animation: heartbeat 5s linear infinite;   }

@keyframes heartbeat{
	0%
	{
		transform: scale(1.25);
	}
	20%
	{
		transform: scale(1);
	}
	40%
	{
		transform: scale(1.25);
	}
	60%
	{
		transform: scale(1);
	}
	80%
	{
		transform: scale(1.25);
	}
	100%
	{
		transform: scale(1.25);
	}

}



/******************* corona update ******************/


.corona_update{
	margin: 0 0  30px 0;
}

.corona_update h3{ color : #ff7675; }

.corona_update h1{ font-size: 2rem; text-align: center; }


/****************** about section *******************/

.sub_section{
	background-color: #fbfafd;
}


/******************** footer ****************************/
.footer_style{
	background-color: #a29bfe!important;
}

.footer_style p{
	margin-bottom: 0!important;
}





/*************************chat popup*************************/




/***********************top button***************************/
#myBtn {
  display: none; /* Hidden by default */
  position: fixed; /* Fixed/sticky position */
  bottom: 20px; /* Place the button at the bottom of the page */
  right: 30px; /* Place the button 30px from the right */
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; /* Remove outline */
  background-color: red; /* Set a background color */
  color: white; /* Text color */
  cursor: pointer; /* Add a mouse pointer on hover */
  padding: 15px; /* Some padding */
  border-radius: 10px; /* Rounded corners */
  font-size: 18px; /* Increase font size */
}

#myBtn:hover {
  background-color: #555; /* Add a dark-grey background on hover */
}


/* ************************ responsive css ********************** */


@media(max-width: 780px)
{
	.main_header{height:700px; text-align: center;}

	.main_header h1{
		text-align: center;
		padding: 0;
		width:100%;
		font-size:30px;
	}


	.count_style{
		display:inline !important;
	}

	.count_style p{text-align: center;	}


	.about_res{
		margin: 0!important;
	}
}
</style>