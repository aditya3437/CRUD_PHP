<?php include("header.php"); ?> 
<?php include("dbconn.php"); ?> 


<div class="box1">
<h1>All Student</h1> 
<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Student</button>

<table class="table table-hover table-bordered table-striped"> 
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = "SELECT * FROM `students`"; 

        $result = mysqli_query($connection, $query); 

        if (!$result) {
            die("Query failed " . mysqli_error($connection)); 
        } else {
            while ($row = mysqli_fetch_assoc($result)) { 
        ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['first_name']; ?></td> 
                    <td><?php echo $row['last_name']; ?></td> 
                    <td><?php echo $row['age']; ?></td> 
                    <td> <a href="updatepage.php?id=<?php echo $row['id']; ?>"class="btn btn-success">Update</a></td>
                    <td> <a href="deletepage.php"?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td> 
                </tr>
        <?php
            }
        }
        ?>
    </tbody>
</table>

<?php 
if(isset($_GET['message'])) {
  echo "<h6>".$_GET['message']."</h6>";
}
?>
<?php 
if(isset($_GET['insert_msg'])) {
  echo "<h6>".$_GET['insert_msg']."</h6>";
}
?>
<?php 
if(isset($_GET['update_msg'])) {
  echo "<h6>".$_GET['update_msg']."</h6>";
}
?>
<?php 
if(isset($_GET['deleted_msg'])) {
  echo "<h6>".$_GET['deleted_msg']."</h6>";
}
?>


<form action="insertddata.php" method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Student</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
        <div class="form-group">
          <label for="f_name">First Name</label>
          <input type="text" name="f_name" class="form-control">
        </div>
        <div class="form-group">
          <label for="l_name">Last Name</label>
          <input type="text" name="l_name" class="form-control">
        </div>
        <div class="form-group">
          <label for="age">Age</label>
          <input type="text" name="age" class="form-control">
        </div>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" name="add_student">
      </div>
    </div>
  </div>
</div>
</div>
</form>

<?php include("footer.php"); ?> 