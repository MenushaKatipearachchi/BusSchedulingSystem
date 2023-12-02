<?php
session_start();
if (isset($_SESSION['id'])) {
?>

<?php include 'dashboard.php'; ?>

<<!DOCTYPE html>
<html>
<center>
<body>

<div class="container-fluid"></div>
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h1 class="m-0 font-weight-bold text-primary"> Edit Admin Profile </h2> <br>
   </div>

           
  
  </div>

  <div class="card-body">
<?php
$connection =mysqli_connect("localhost","root","","busbookingsystem");
  
if(isset($_POST['edit_btn']))
{
    $id = $_POST['edit_id'];
  

    $query = "SELECT * FROM register WHERE id ='$id' ";
    $query_run = mysqli_query($connection, $query);

    foreach($query_run as $row)
    {
?>
        <form action="code.php" method="POST">
            <link rel="stylesheet" href="formstyles.css">

            <input type="hidden" name="edit_id" value="<?php echo $row['id']?>">
        <div class="form-group">
        <label> Username: </label>
        <input type="text" name="edit_username" value="<?php  echo $row['username']?>" class="form-control" placeholder="Enter Username">
      </div>
       <div class="form-group">
        <label>Email: </label>
        <input type="email" name="edit_email" value="<?php  echo $row['email']?>" class="form-control" placeholder="Enter Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
       </div>
     <div class="form-group">
        <label>Password: </label>
        <input type="password" name="edit_password" value="<?php  echo $row['password']?>" class="form-control" placeholder="Enter New Password">
    </div>
    <a href="register.php" class="btn btn-danger">Cancel</a>
    <button type="submit" name="updatebtn"> Update </button>
    </form>
   <?php
    }

}

?>
  </div>
</div>
</div>
</div>
</h1>
</div>
</div>
</body>
</center> <br>
<hr>
</html>
<?php 
  include 'footer.php'; 
?>

<?php
}else{
  header("Location: ../adminlog.php");
  exit();
}
?>