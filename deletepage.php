<?php include("dbconn.php"); ?>

<?php
if(isset($_GET['id'])){
  // Sanitize the input to prevent SQL injection
  $id = $_GET['id'];

  $query = "DELETE FROM `students` WHERE `id` = '$id'";
  $result = mysqli_query($connection, $query);

  if(!$result){
    die("Query failed: " . mysqli_error($connection));
  }
  else{
    header('location:index.php?deleted_msg=you have deleted the record.');
    exit(); // Ensure script stops execution after redirection
  }
}
?>
