<?php
session_start();
$connection = mysqli_connect("localhost","root","","busbookingsystem");

if(isset($_POST['add_btn']))
{
    $from = $_POST['start'];
    $to  = $_POST['end'];
    $seats  = $_POST['seats'];
    $arrival= $_POST['arrival'];
    $departure = $_POST['departure'];
    $query = "INSERT INTO times (start,end,seats,arrival,departure) VALUES ('$from','$to','$seats','$arrival','$departure')";
    $query_run = mysqli_query($connection, $query);
       
  
    if($query_run)
    {
        $_SESSION['status']="Values Added Successfully";
        header("Location:timetable.php");
    }
    else{
        $_SESSION['status']="Values are NOT INSERTED  Successfully";
        header("Location:timetable.php");

    }
}

//update time table//

    if(isset($_POST['update_timetable_btn']))
    $id=$_POST['timetable_edit_id'];
    $from=$_POST['edit_start'];
    $to=$_POST['edit_end'];
    $seats =$_POST['edit_seats'];
    $arrival=$_POST['edit_arrival'];
    $departure=$_POST['edit_departure'];

     $query = "UPDATE times SET  start='$from', end='$to',seats='$seats',arrival='$arrival',departure=' $departure' WHERE id ='$id'";
     $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status']="Your Data is Successfully updated";
        $_SESSION['status_code'] = "success";
        header('Location:timetable.php');
    }
    else{
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: timetable.php');

    }
//delete time tables//
if(isset($_POST['delete_btn']))
{
    $id =$_POST['delete_id'];

    $query = "DELETE FROM times WHERE id='$id' ";
    $query_run =mysqli_query($connection,$query);

    if( $query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: timetable.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "error";
        header('Location: timetable.php');
    }
}
?>

<?php include 'footer.php'; ?>
