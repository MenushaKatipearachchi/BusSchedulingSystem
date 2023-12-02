<?php 
    session_start();

    if (isset($_SESSION['id'])) {

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Contacts</title>
        <link rel="StyleSheet" href="../../Styles/styles5.css">
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
            
        <li class="bullet"><a href="About.php" target="_self">About Us</a></li>
	    <li class="bullet"><a href="#" target="_self">Contacts</a></li>
            <li class="bullet"><a href="privacypolicy.php" target="_self">Privacy policy</a></li>
            <li class="bullet"><a href="termsandconditions.php" target="_self">Terms & conditions</a></li>
            
       </ul><hr>
<br>
<center>
<div id="demobox4">
<br>
<h2>We are here to help you !<h2><br>
</div>
</center>

<center><div class="demobox">
<br>
    <img class="contactus" src="../../pics/phone.jpg" alt="phone" width = 50px>
   <button class="button button1"  style="font-weight:bold;" position : center>HOTLINE</button>

</div>
</center>

<center><div class="demobox1">
<br>
 <img class="email" src="../../pics/email.png" alt="email" width = 50px>

<h4>info@rapidtransit.lk</h4>
</div>
</center>



<center><div class="demobox2">
<br>
 <img class="location" src="../../pics/location.jpg" alt="location" width = 50px>
<h4>Jalanala mawatha,<br>
Pingarawa,<br>
Badulla</h4>
</div>
</center>

</body>
</html>

<?php 
    }else{
        header("Location: ../../index.php");
        exit();
    }
?>