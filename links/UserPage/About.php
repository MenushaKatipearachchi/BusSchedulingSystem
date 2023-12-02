<?php 
    session_start();

    if (isset($_SESSION['id'])) {

?>

<!DOCTYPE html>
<html>
    <head>
        <title>About Us</title>
        <link rel="StyleSheet" href="../../Styles/styles2.css">
    </head>

    <a style="font-size: 25px;" href="../../home.php" target="_self">rapidtransit.lk</a>
    <body class="backgroundImage">
        
    <img class="Align" src="../../pics/logo3.png" alt="logo" width = 50px>

    <div style='float:right; width: 80px; margin-top:-103px'>
        <div style='position:fixed'>
            <a href="./logout.php"><input class="logoutBtn" type="button" value="LOGOUT"></a>
        </div>
    </div>

	<center><p>... Book Your Seat ...</p></center>

      <ul class="URL">
            
        <li class="bullet"><a href="#" target="_self">About Us</a></li>
	    <li class="bullet"><a href="Contacts.php" target="_self">Contacts</a></li>
            <li class="bullet"><a href="privacypolicy.php" target="_self">Privacy policy</a></li>
            <li class="bullet"><a href="termsandconditions.php" target="_self">Terms & conditions</a></li>
            
       </ul><hr>
<br>
<div id="demobox">
<br>

<center><h1>About Us</h1>

<br> Lack of proper transport facilities can be cited as a major 
problem faced by the common people in their daily lives.
<br>As a result, more and more people are turning to cab 
services. But for long distance travel it costs more.
Therefore, it seems appropriate to book a seat on a passenger 
bus.
<br><br><b>
 <font size="4"
          face="arial" 
          color="#C71585">
           To make it easier, our company has provided the 
best bus seat reservation service.
       </b> </font>

<br>
<br> The main functions of this system are book preferable seats, check availability of the seats, check the 
bus schedules, allows you to reserve a bus for travel.

<br><b>We give a safety transport service to people.</b> 

<br> This website is designed to let you know 
about your account, your schedule, and your 
emergency notifications.
<br>
<br><br>
<br>
 
<div id="demobox4">
<br> We Are Growing
<br><br>
</div>

<br><br>

<div id="demobox1">
<br> 50+ Schedules
<br>
</div>

<div id="demobox2">
<br> 100+ Places
</div>

<div id="demobox3">
<br> 500000+ Seats
</div>



</center>
<br><br>
</div>
<br><br>

</body>
</html>

<?php 
    }else{
        header("Location: ../../index.php");
        exit();
    }
?>