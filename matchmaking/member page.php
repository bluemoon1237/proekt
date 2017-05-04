<?php
  

session_start();


if (isset($_SESSION['username']))

        echo "Welcome, ".$_SESSION['username']."!<br />Enter matchmaking<a href='useradd.php'>here</a></br> Alternatively logout<a href='logout.php'>here</a></br> ";

         

else

        die("You must be logged in!");

?>
