<?php
session_start();
if (isset($_POST['submit']))
 {
	// connect to database
	$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
  $cleardb_server = $cleardb_url["host"];
  $cleardb_username = $cleardb_url["user"];
  $cleardb_password = $cleardb_url["pass"];
  $cleardb_db = substr($cleardb_url["path"],1);
  $active_group = 'default';
  $query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
	$user=$_POST['username1'];
$pass=$_POST['password1'];
$sql3 = "SELECT * FROM login where username='$user' ";  
$result = $conn->query($sql3);


if ($result->num_rows> 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if($row["password"]==$pass){
		$_SESSION["user"]=$row["username"];
    	header("location:admin.php");
    }
  }
}
else{
	header("location:index.php");
}
}
?>