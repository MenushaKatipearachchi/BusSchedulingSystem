<?php include 'dashboard.php' ?>
<!DOCTYPE html>
<html>
<body>
<center>
<div class="container-fluid"></div>

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h1> Edit Time Table </h1> <br>
   </div>
</div>
<div class="card-body">
<?php
$connection = mysqli_connect("localhost","root","","busbookingsystem");
if(isset($_POST['timetable_edit_btn']))
{
    $id=$_POST['timetable_edit_id'];

    $query = "SELECT * FROM times WHERE id ='$id' ";
    $query_run = mysqli_query($connection, $query);

    foreach( $query_run as $row )
    {
?>
        <form action="addtimetable.php" method="POST">
             <link rel="stylesheet" href="formstyles.css">
        <input type="hidden" name="timetable_edit_id" value="<?php echo $row['id']?>">
          <div class="form-group">
                <label> From: </label>
                <input type="text"name="edit_start" value="<?php  echo $row['start']?>" class="form-control" placeholder="Start"> <br>
          </div>
            <div class="form-group">
                <label>To: </label>
                <input type="text" name="edit_end" value="<?php  echo $row['end']?>" class="form-control" placeholder="End"><br>
            </div>

            <div class="form-group">
                <label>Seats: </label>
                <input type="text" name="edit_seats" value="<?php  echo $row['seats']?>" class="form-control" placeholder="Enter Num Of Seats"><br>
            </div>
            <div class="form-group">
                <label>Arrival: </label>
                <input type="time" name="edit_arrival" value="<?php  echo $row['arrival']?>" class="form-control" placeholder="Enter Arrival Time"><br>
            </div>
            <div class="form-group">
                <label>Departure: </label>
                <input type="time" name="edit_departure"  value="<?php  echo $row['departure']?>"  class="form-control" placeholder="Enter Departure Time"><br>
            </div>
            <?php
    }
}
?>
      <a href="timetable.php" class="btn btn-danger">Cancel</a>
      <button type="submit" name="update_timetable_btn" class="btn btn-primary"> Update </button>
    </form>
 
  </div>
</div>
</div>
</div>
</center> <br>
<hr>
</body>
</html>

<?php include 'footer.php'; ?>