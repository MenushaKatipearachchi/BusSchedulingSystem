<?php 
    session_start();
    if (isset($_SESSION['id'])) {
?>

<?php
    include_once 'config.php';
    include 'dashboard.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin panel | Payments</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../Styles/paymentStyles.css">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="formstyles.css">
    </head>

    <body style="background-image: none;">
      </div>

        <br><center><h1>Customer payments here</h1></center><br>
        <br>

        <hr><br>
        
        <center>
        <!--Table-->
        <div>
            <table width="50%">
                <tr>
                    <th>Payment ID</th>
                    <th>Card No.</th>
                    <th>Card Holder Name</th>
                    <th>Expiry Date</th>
                    <th>CVV No.</th>
                </tr>
                <?php
                    $sql = "select * from payments";
                    $result =  $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["PayID"]."</td>"."<td>".$row["CardNo"]."</td>"."<td>".$row["CardHolderName"]."</td>"."<td>".$row["ExpiryDate"]."</td>"."<td>".$row["CVV"]."</td>";
                        }
                    } else {
                        echo "No payments yet!";
                    }
                    

                    // close the connection
                    $conn->close();
                ?>
            </table><br>
        </div>
        </center>
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