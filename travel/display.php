<center><div>Total Registered Admin</div></center>
<center>
 <?php
                require 'dbconfig.php';

                $query= "SELECT id FROM register ORDER BY id";
                $query_run = mysqli_query($connection, $query);

                $row = mysqli_num_rows( $query_run );
                echo "<h4> Total Admin:".$row. "</h4>"

?>
<br>
<center><div>Total Schedules Up To Now</div></center>
  <?php
                  require 'dbconfig.php';

                $query= "SELECT id FROM times ORDER BY id";
                $query_run = mysqli_query($connection, $query);

                $row = mysqli_num_rows( $query_run );
                echo '<h4> Total Schedules:'.$row. '<h4>'

 ?>
 </center>
<br><br>

</body>
</html>
