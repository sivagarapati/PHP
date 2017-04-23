

<?php 
include('connect.php'); //to include connection file to connect table in vvs_zoo database

if (isset($_POST['submit'])) //once user clicks on submit
{
	//all the data from the contactgroup4 text boxes we can read by user in this page
	$name=$_POST['name'];
	$mobile_no=$_POST['mobile_no'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	
	$query="insert into contact(name,mobile_no,email,message) values('$name','$mobile_no','$email','$message')"; //insert query to the required table
	//echo $query;exit;
	$result=mysql_query($query); //mysql_query will execute the query which we written   mysql
	
}
?>

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
			<h1>Welcome to VVS Zoo results	page</h1>
		
   <?php if(isset($name))  
			{ 
			echo "Thank you $name <br>"; 
			echo "$mobile_no <br>";
			echo "$email <br>";
			echo "$message <br>";
			}		
			echo "we will reach you as soon as possible"
	?>
		</div>
		<br></br>
		<div id="footer">
			Copyright to VVS Zoo.
		</div>
	</body>
</html>