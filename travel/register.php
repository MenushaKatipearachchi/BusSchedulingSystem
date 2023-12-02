<?php 
    session_start();

    if (isset($_SESSION['id'])) {

?>

<?php
include 'dashboard.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Admin panel | Edit Profile</title>
  </head>
<body>
  <center>

      <h1 align="center">Add Admin Data</h1><br><br>

      <form action="code.php" method="POST" >
        <link rel="stylesheet" href="formstyles.css">
        
        <div class="modal-body" align="center">

            <div class="form-group">
                <h3> Username: </h3>
                <input type="text" name="username" class="form-control" placeholder="Enter Username" required> <br>
            </div>
            <div class="form-group">
              <h3>Email: </h3>
                <input type="email" name="email" class="form-control" placeholder="Enter Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required><br>
            </div>
            <div class="form-group">
              <h3>Password: </h3>
                <input type="password" name="password" class="form-control" placeholder="Enter Password" required><br>
            </div>
            <div class="form-group">
              <h3>Confirm Password:</h3>
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password" required><br>
            </div>
        
        </div>
        <div class="modal-footer" align="center">
           
            <button type="submit" name="registerbtn" style="padding: 4px 15px 2px;">Save</button><br><br>
        </div>
      </form>

    <div>
      <?php
        $connection = mysqli_connect("localhost","root","","busbookingsystem");
        $query ="SELECT * FROM register";
        $query_run =mysqli_query($connection, $query);
      ?>
      <center>
      <table width="50%">
     
          <thead>
          <tr>
            <th> ID </th>
            <th> Username </th>
            <th>Email </th>
            <th>Password </th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>

          <?php
          if(mysqli_num_rows($query_run)>0)
          {
            while($row = mysqli_fetch_assoc($query_run))
            {
             ?>
             <tr>
            <td> <?php echo $row['id']; ?> </td>
            <td> <?php echo $row['username']; ?> </td>
            <td> <?php echo $row['email']; ?></td>
            <td><?php echo $row['password']; ?></td>

           <td>
             <form action="register_edit.php" method="post">
             <input type="hidden" name="edit_id" value=" <?php echo $row['id']; ?>">
             <button type ="submit" name="edit_btn">Edit</button>
             </form>
           </td>

          <td>
          <form action="code.php" method="post">
            <input type="hidden" name= "delete_id" value="<?php  echo $row['id'];?>">
           <button type ="submit" name="delete_btn">Delete</button>
          </form>
          </td> 
          </tr>

             <?php
            }
          }
          
          else{
            echo "No Records found!";
          }
          ?>
     
          
        
        </tbody>
      </table>
      </center>
    </div>
</div>
</center> <br>
<hr>
</body>
</html>

<?php include 'footer.php'; ?>

<?php 
    }else{
        header("Location: ../adminlog.php");
        exit();
    }
?>