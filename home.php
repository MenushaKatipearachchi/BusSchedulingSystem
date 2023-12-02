<?php 
    session_start();

    if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>

<!DOCTYPE html>
<html>
<head>
     <title>HOME</title>
     <link rel="StyleSheet" href="./Styles/styles1.css">
</head>
<body class="backgroundImage">
    <a style="font-size: 25px;" href="#" target="_self">rapidtransit.lk</a> <br>

    <div style='float:right; width: 80px;'>
        <div style='position:fixed'>
            <a href="./logout.php"><input class="logoutBtn" type="button" value="LOGOUT"></a>
        </div>
    </div>

    <div style='float:right; width: 100px;'>
        <div style='position:fixed'>
            <p style="font-size: 20px; margin:-25px; margin-left:-45px" id="p1"></p>
        </div>
    </div>

    <img class="Align" src="./pics/logo3.png" alt="logo" width = 50px>

	<center><p>... Book Your Seat ...</p></center>

      <ul class="URL">
            
            <li class="bullet"><a href="./links/UserPage/About.php" target="_self">About Us</a></li>
	    <li class="bullet"><a href="./links/UserPage/Contacts.php" target="_self">Contacts</a></li>
            <li class="bullet"><a href="./links/UserPage/Contacts.php" target="_self">Privacy policy</a></li>
            <li class="bullet"><a href="./links/UserPage/Contacts.php" target="_self">Terms & conditions</a></li>
            
       </ul><hr>
<br><br>     
<a href="./links/Scheduling/ourSchedules.php"><button class="button button1"  style="font-weight:bold;">View Schedules</button></a>

<br><br><br><br><br><br>
<div id="demobox">
<br>

<h2>Welcome To Our Site <?php $_SESSION['user_name'] ?></h2>
<br><center>We offer a complete online bus and seat booking platform where you can reserve bus seats. 
<br>The traveler can purchase bus tickets online, and in exchange, a text message with travel details will be delivered to confirm the seat reservation.
<br>Plan your journey ahead of time, save time buying bus tickets, avoid lengthy lines, find your boarding location quickly, and 
<br>enjoy your joyous journey in comfort with rapidtransit.lk's efficient bus reservation system.</center>
<br><br>
</div>

<br><br>

<!-- https://www.w3schools.com/js/js_date_methods.asp -->
<script>
    var today = new Date();
    var date = +today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear();   
    document.getElementById("p1").innerHTML = date;     
</script>
</body>
</html>

<?php 
    }else{
        header("Location: index.php");
        exit();
    }
?>