<?php
if(isset($_GET['submit']))
{
    $uid=$_GET['uid'];
    $pwd=$_GET['pwd'];

    echo "<h1>Your Details</h1>";
    echo "User ID $uid <br>";
    echo "Password $pwd<br>";
 
}
?>