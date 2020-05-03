<!Doctype html>
<html>

<head>
<title>Frankieey - Design & Development</title>


<link href="css/bootstrap.css" media="all" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-responsive.css" media="all" rel="stylesheet" type="text/css" />
<link href="Index.css" media="all" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="favicon.ico">

<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-35196997-1']);
			_gaq.push(['_trackPageview']);

			(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();

</script>

</head>

<body> 

<div id="wrap">
	
	<div id="header">
		<div id="lineleft"></div>
		<div id="logo">
			<img src="logo.png" alt="Frankieey Logo" class="logo">
		</div>
		<div id="headercontent">
			<div id="logotext">
			<h1>Frankieey</h1>
			<h2>Design & Development</h2>
			</div>
			<div id="lineright"></div>
			<ul class="nav">
				<li class="nav"><a class="nav" href="index.html">HOME</a></li>
				<li class="nav"><a class="nav" href="work.html">WORK</a></li>
				<li class="nav"><a class="active" href="contact.php">CONTACT</a></li>
			</ul>	
		</div>	
	</div>
	
	<div class="container">
		<h3 class="marginh3small">Contact</h3>
		<p>* means required</p>
		<?php
$naar = "info@frankieey.nl"; // Waar moet het naartoe?
 
// Header instellen, zodat nl2br() werkt
$headers = "MIME-version: 1.0\r\n"; 
$headers .= "content-type: text/html;charset=utf-8\r\n";
 
if(isset($_POST['send'])) // Als het formulier verzonden is door op de verzend knop te klikken
{
	$name = trim($_POST['name']); // Alle overbodige spaties verwijderen
	$email = trim($_POST['email']); 
	$company = trim($_POST['company']);
	$phone = trim($_POST['phone']); 
	$message = trim($_POST['message']); 
	$fout = false; 
 
	if(is_numeric($phone)) // Als telefoonnummer niet nummeriek is
	{
		$fout = false;
	}
	else
	{
	echo '<p>The phone number must be numerical</p>';
	}
	
 
	if($fout == false) // Als er niks fout is (alles is dus netjes ingevuld)
	{
		$headers .= 'From: ' . $name . ' <' . $email . '>'; // Een afzender instellen zodat je kan reageren.
 
		if(mail($naar, $phone, $company, nl2br($message), $headers))
		{
			print '<p>The message has been send.</p>';
		}
		else
		{
			print '<p>Something has gone wrong. Please try again.</p>';
		}
	}
}
?>
		<form name="contactform" method="post" action="contact.php">
					
					<input class="informatie" type="text" name="name" maxlength="50" placeholder="Name*" required="required">
					<input class="informatie" type="text" name="email" maxlength="50"  placeholder="Email Adres*" required="required">
					<input class="informatie" type="text" name="company" maxlength="50" placeholder="Company Name">
					
					<input class="informatie" type="text" name="phone" maxlength="50"  placeholder="Phone Number">
					
					<textarea  name="message" maxlength="1000" cols="25" rows="6" placeholder="Type your message here.." required="required"></textarea>
					<input class="contact clear" type="reset" value="Clear">
					<input class="contact send" type="submit" name="send" value="Send">
					
		</form>

</div>
	
	<div id="footerd">
		<h5>Frank Mintjes 2014 | &#169 Frankieey</h5>
	</div>
</div>	

</body>

</html>