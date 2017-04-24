<?php
include 'connect.php';

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']==false)
{
    //header("Location: login.php");
}


$query="SELECT * FORM student";
$result=mysql_query($query);

/*if($result-> num_rows >0){
echo "<table><tr><th>firstname</th><th>lastname</th><th>Dob</th><th>username</th></tr>"
while($row = $result->fetch_assoc()){
echo "<tr><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["dob"]."</td><td>".$row["username"]."</td></tr>";
}
echo "</table>";
}else{
echo "0 results";
} */

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
    <div>
      <table class="table">
        <tr>
          <th>Firstname</th>
          <th>lastname</th>
          <!-- <th>Dob</th> -->
          <th>username</th>
        </tr>
        <?php
if(mysql_num_rows($result)==0)
{
    echo "<tr><td>No Records</td></tr>";
}
while($rec=mysql_fetch_assoc($result))
{
    echo "<tr>";
    echo "<td>$rec[firstname]</td>";
    echo "<td>$rec[lastname]</td>";
    echo "<td>$rec[username]</td>'";
    echo "</tr>";
}
?>
      </table>
    </div>
  </body>

  </html>