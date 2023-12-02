<?php
session_start();
$connection =mysqli_connect("localhost","root","","busbookingsystem");

if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
   
        if($password === $cpassword)
        {
            $query = "INSERT INTO register (username,email,password) VALUES ('$username','$email','$password')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
             
                $_SESSION['status']="Your Data is Successfully Added";
                $_SESSION['status_code'] = "success";
                header('Location:register.php');
            }
            else 
            {
                $_SESSION['status'] = "Your Data is Deleted";
                $_SESSION['status_code'] = "error";
                header('Location: register.php');
            }
        }
        else 
        {
            $_SESSION['status'] = "Password and Confirm Password Does Not Match";
            $_SESSION['status_code'] = "warning";
            header('Location: register.php');  
        }
}

// user update
if(isset($_POST['updatebtn']))
{
    $id=$_POST['edit_id'];
    $username=$_POST['edit_username'];
    $email=$_POST['edit_email'];
    $password=$_POST['edit_password'];

     $query = "UPDATE register SET  username='$username', email='$email',password='$password' WHERE id ='$id' ";
     $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status']="Your Data is Updated!";
        $_SESSION['status_code'] = "success";
        header('Location:register.php');
    }
    else{
        $_SESSION['status']="Your Data is Not Updated!";
        header('Location:register.php');
    }
}


// user delete
if(isset($_POST['delete_btn']))
{
    $id =$_POST['delete_id'];

    $query = "DELETE FROM register WHERE id='$id' ";
    $query_run =mysqli_query($connection,$query);

    if( $query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: register.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "error";
        header('Location: register.php');
    }
}
?>

<?php include 'footer.php'; ?>
















