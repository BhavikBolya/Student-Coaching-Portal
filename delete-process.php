<?php
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
$sql1 = "DELETE FROM student_table WHERE student_id='" . $_GET["student_id"] . "'";
function function_alert() { 
    echo "<script>
      alert('Deleted Successfully');
      window.location.href='/update.php';
      </script>"; 
    }
if (mysqli_query($conn, $sql1)) {
    function_alert();
     
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>