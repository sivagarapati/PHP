<?php
include 'connect.php';

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']==false)
{
    //header("Location: login.php");
}


$query="SELECT firstname,lastname,dob,username FORM student";
$result=$conn->query($query); 

if($result->num_rows>0){
  echo "<table><tr><th>firstname</th><th>lastname</th><th>Dob</th><th>username</th></tr>"

  while($row =$result->fetch_assoc()){
    echo "<tr><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["dob"]."</td><td>".$row["username"]."</td></tr>";
  }
  echo "</table>";
}else{
  echo "0 results";
}
$conn->close();

?>
  <!DOCTYPE html>
  <html>
  <head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
  <form method="post" action="newAccount.php">
    <h2>logged success!</h2>
    <input class="btn btn-default" type="submit" href="newAccount.php" value="create student" />
    <button class="btn btn-default">student List</button>
	</form>
 <!-- <div>
 <table class="table">
  <thead>
  <tr>
  <th>Firstname</th>
  <th>lastname</th>
  <th>Dob</th>
  <th>username</th>
  </tr>
  </thead>
  <tbody>
  <tr>
  <td><?php $firstname  ?></td>
  <td><?php $lastname ?></td>
  <td><?php $dob ?></td>
  <td><?php $username ?></td>
  </tr>
  <tbody>
  </table>
  </div>
  -->
  </body>

  </html>