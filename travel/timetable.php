<?php 
    session_start();

    if (isset($_SESSION['id'])) {

?>

<?php

include 'dashboard.php';

?>
<html>
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin panel | Timetable</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="modal fade" id="addtimetable" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <br><center><h1>Add Time Table</h1></center> <br>
      <center>
      <form action="addtimetable.php" method="POST">
        <link rel="stylesheet" href="formstyles.css">

        <div class="modal-body">

            <div class="form-group">
                <label> From: </label>
                <input type="text"name="start" class="form-control" placeholder="Start location" required> <br><br>
            </div>
            <div class="form-group">
                <label>To: </label>
                <input type="text" name="end" class="form-control" placeholder="End location" required><br><br>
            </div>

            <div class="form-group">
                <label>Seats: </label>
                <input type="text" name="seats" class="form-control" placeholder="Enter Num Of Seats" required><br><br>
            </div>
            <div class="form-group">
                <label>Arrival: </label>
                <input type="time" name="arrival" class="form-control" placeholder="Enter Arrival Time" required><br><br>
            </div>
            <div class="form-group">
                <label>Departure: </label>
                <input type="time" name="departure" class="form-control" placeholder="Enter Departure Time" required><br><br>
            </div>
        
        </div>
        <div class="modal-footer" align="center">
          <button type="submit" name="add_btn" style="padding: 4px 15px 2px;">Add</button>
        </div>

      </form> <br>
      </center>
    </div>
  </div>
</div>
<!--end modal-->

    

    <div class="table-responsive">
      <?php
      $connection = mysqli_connect("localhost","root","","busbookingsystem");
        $query ="SELECT * FROM times";
        $query_run =mysqli_query($connection, $query);
      ?>
      <center>
      <table width="50%">
        <thead>
          <tr>
            <th> ID </th>
            <th>Start </th>
            <th>End</th>
            <th>Seats</th>
            <th>Arrival</th>
            <th>Depature</th>
            <th>EDIT</th>
            <th>DELETE </th>
          </tr>
        </thead>
        <tbody>
          <?php
          if(mysqli_num_rows($query_run)>0)
          {
            while($row = mysqli_fetch_assoc($query_run))
            {
             ?>
             <tr>
            <td> <?php echo $row['id']; ?> </td>
            <td> <?php echo $row['start']; ?> </td>
            <td> <?php echo $row['end']; ?></td>
            <td> <?php echo $row['seats']; ?></td>
            <td><?php echo $row['arrival']; ?></td>
            <td><?php echo $row['departure']; ?></td>
           <td>
             <form action="time_table_edit.php" method="post">
             <input type="hidden" name="timetable_edit_id" value=" <?php echo $row['id']; ?>">
             <button  type ="submit" name="timetable_edit_btn"class="btn btn-success">Edit</button>
             </form>
            
           </td>
          <td>
          <form action="addtimetable.php" method="post">
            <input type="hidden" name= "delete_id" value="<?php  echo $row['id'];?>">
           <button  type ="submit" name="delete_btn" class="btn btn-danger">Delete</button>
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
      </center> <br>
      <hr>
    </div>
  </div>
</div>

</div>
</body>
</html>

<?php include 'footer.php'; ?>

<?php 
    }else{
        header("Location: ../adminlog.php");
        exit();
    }
?>