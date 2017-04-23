

<!DOCTYPE html>
<html>
	<head>

	<meta charset="utf-8"/>
	<title>VVS Zoo_Group-4</title>
	<link rel="stylesheet" type="text/css" href="Group4styles.css"/>
	</head>
	<body background="ProjectIMG/Bgimage.jpg">
		<div class="banner">
			<a href="homeGroup4.html">
			<img src="ProjectIMG/Logo.png"> </img>
			</a>	
		</div>
		<br></br>
		<nav>
			<ul>
				<li><a href="HomeGroup4.html">Home</a></li>
				<li><a href="EventsGroup4.html">Events</a></li>
				<li><a href="AttractionGroup4.html">Attraction</a></li>
				<li><a href="TicketGroup4.html">Tickets</a></li>
				<li><a href="InformationGroup4.html">Information</a></li>
				<li><a href="AboutGroup4.html">About</a></li>
				<li><a href="ContactusGroup4.php">Contact US</a></li>
			</ul>
		</nav>
		<div id="content">
			<h1>Welcome to VVS Zoo Contact US page</h1>
			
			<form method="post" action="contact_results.php"> <!--to post the output result to new page-->
			<table align="center" border="0px" >
			<!-- requried function is to cannot enter the empty field-->
			<tr><td> Name:</td><td> <input type='text' name='name' placeholder='Enter your name' required> </td></tr>    
			<tr><td> Phone Number:</td><td> <input type='text' name='mobile_no' placeholder='Enter your mobile number' required></td></tr>
			<tr><td>Email Address:</td><td> <input type='email' name='email' placeholder='Enter your email address' required></td></tr>
			<tr><td>Query:</td><td> <textarea rows='3' cols='25' name='message' placeholder='Enter your query'required></textarea></td></tr>
			<tr><td colspan='2'><input type='submit' name='submit' value='submit'></td></tr>
			
			</table>
			</form>
   
		</div>
		<br></br>
		<div id="footer">
			Copyright to VVS Zoo.
		</div>
	</body>
</html>