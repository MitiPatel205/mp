<?php
if(isset($_POST['submit']))
{
$uid=$_POST['uid'];
$pwd1=$_POST['pwd1'];
$pwd2=$_POST['pwd2'];
$name=$_POST['name'];

echo "Your user id is ".$uid;
echo "<br>Your Re-Password is ".$pwd1;
echo "<br>Your Re-Password is ".$pwd2;
echo "<br>Your Name is ".$name;
echo "<script> window.location.assign('MPM.html'); </script>";
}
?>