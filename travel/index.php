<?php session_start();
    include 'dashboard.php';
    include 'display.php';
    if (isset($_SESSION['id'])) {
?>

<?php 

    } else {
        header("Location: ../adminlog.php");
        exit(); 
    }
?>
<html>
    <head>
        <title>Admin panel | Dashboard</title>
        <link rel="stylesheet" href="formstyles.css">
    </head>
<body>
<div>
      <?php
      $connection = mysqli_connect("localhost","root","","busbookingsystem");
        $query ="SELECT * FROM users";
        $query_run =mysqli_query($connection, $query);
      ?>
      <hr><br><br>
      <center>
        <h2>Customer Details</h2>
        <table width="20%">
        
            <thead>
            <tr>
                <th> ID </th>
                <th> Username </th>
                <th>Email </th>
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
                <td> <?php echo $row['user_name']; ?> </td>
                <td> <?php echo $row['email']; ?></td>
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
    </div> <br>
    <hr>
</body>
</html>
<?php include 'footer.php'; ?>