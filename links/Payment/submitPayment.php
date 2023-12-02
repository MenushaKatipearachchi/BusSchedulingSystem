<?php
    include_once '../../configuration/config.php';
    session_start();
?>

<?php 
    $getid = $_SESSION["getid"];
    $query ="UPDATE times SET seats= seats-1 WHERE seats='$getid'";

    $data = mysqli_query($conn, $query);
?>

<?php
    $card_no = $_POST['card_no'];
    $name = $_POST['name'];
    $expiry = $_POST['expiry'];
    $cvv = $_POST['cvv'];

    $sql = "insert into payments(PayID, CardNo, CardHolderName, ExpiryDate, CVV) values('', '$card_no', '$name', '$expiry', '$cvv')";

    // execution
    if (mysqli_query($conn, $sql)) {
        echo ("<script LANGUAGE='JavaScript'>
                window.alert('Payment Successfull!');
                window.close();
                </script>
                <br><h2>You can Close this Window.</h2>");
    } else {
        echo ("<script LANGUAGE='JavaScript'>
                window.alert('Error in payment! Redirecting to payment page...');
                window.location.href='../Payment/payment.php';
                </script>");
    }

    mysqli_close($conn);
?>