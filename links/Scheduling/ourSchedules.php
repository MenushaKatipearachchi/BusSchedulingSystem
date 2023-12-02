<?php 
    include '../../configuration/config.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="../../Styles/styles1_new.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shedule Now</title>
    </head>

    <a style="font-size: 25px;" href="../../home.php" target="_self">rapidtransit.lk</a>
    <body class="backgroundImage">
    <img class="Align" src="../../pics/logo3.png" alt="logo" width = 150px>
      
    <p>... Book Your Seat ...</p>

    <ul class="URL">
        
        <li class="bullet"><a href="../UserPage/About.php" target="_self">About Us</a></li>
	    <li class="bullet"><a href="../UserPage/Contacts.php" target="_self">Contacts</a></li>
        <li class="bullet"><a href="../UserPage/privacypolicy.php" target="_self">Privacy policy</a></li>
        <li class="bullet"><a href="../UserPage/termsandconditions.php" target="_self">Terms & conditions</a></li>
        
    </ul>

    <hr> <br>

    <center>
        <fieldset>
            <legend>Our Schedules</legend>
            <table style="text-align:center; width:90%" border="1">
                <tr>
                    <th>Start Location</th>
                    <th>End Location</th>
                    <th>Arival Time</th>
                    <th>Departure Time</th>
                    <th>Book Now</th>
                </tr>

            <?php
                $sql = "select * from times";
                $result =  $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        if ($row["seats"] == 0) {
                            echo "<tr><td>".$row["start"]."</td>"."<td>".$row["end"]."</td>"."<td>".$row["arrival"]."</td>"."<td>".$row["departure"]."</td>";
                            echo "</td><input type='submit' value='Book Now' disabled></td>"; 
                        } else {
                            echo "<tr><td>".$row["start"]."</td>"."<td>".$row["end"]."</td>"."<td>".$row["arrival"]."</td>"."<td>".$row["departure"]."</td>";
                            echo "<td><a href='../Payment/payment.php?name=$row[seats]' target='_blank'><input type='submit' value='BookNow'></a>&nbsp".$row["seats"]." seats left</td>";
                        }
                    }
                } else {
                    echo "No bookings available at this time.";
                }
                echo "</table>";

                $conn->close();
            ?>

            <br><br>
        </fieldset>
    </center> <br>
        
    <hr>
    <a href=""></a>
    <div id="demobox">
        <br>
        <h2>Welcome To Our Site</h2>
        <br><center>We offer a complete online bus and seat booking platform where you can reserve bus seats. 
        <br>The traveler can purchase bus tickets online, and in exchange, a text message with travel details will be delivered to confirm the seat reservation.
        <br>Plan your journey ahead of time, save time buying bus tickets, avoid lengthy lines, find your boarding location quickly, and 
        <br>enjoy your joyous journey in comfort with rapidtransit.lk's efficient bus reservation system.</center> <br><br>
    </div>
</body>
</html>