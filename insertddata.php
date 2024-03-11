<?php
include("dbconn.php"); 
if(isset($_POST["add_student"])) {
    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $age = $_POST['age'];

    if(empty($fname)) {
        header('Location: index.php?message=you need to fill in the first name!!');
        exit(); // Exit to prevent further execution
    }
    if(empty($lname)) {
        header('Location: index.php?message=you need to fill in the last name!!');
        exit(); // Exit to prevent further execution
    }
    if(empty($age)) {
        header('Location: index.php?message=you need to fill in the age!!');
        exit(); // Exit to prevent further execution
    }
    
    // Assuming $connection is already established
    $query = "INSERT INTO `students` (`first_name`, `last_name`, `age`) VALUES ('$fname','$lname','$age')";
    $result = mysqli_query($connection, $query);

    if(!$result) {
        die("Query failed: " . mysqli_error($connection));
    } else {
        header('Location: index.php?insert_msg=your data has been added successfully');
        exit(); // Exit after redirection
    }
}
?>
