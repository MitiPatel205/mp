<?php
if(isset($_POST['login']))
{
    $dbuid="Miti";
    $dbpwd="1441";

    $uid=$_POST['uid'];
    $pwd=$_POST['pwd'];

    if($uid==$dbuid && $pwd==$dbpwd)
    {
        echo "Username and Passsword Matched";
        echo "<br>Username: ".$uid;
        echo "<br>Password: ".$pwd;
        echo "<script> window.location.assign('MPM.html'); </script>";
      

    }
    else
    {
        echo "Username and Passsword Doesn't Match";

    }

}
?>