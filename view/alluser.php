<?php
session_start();
ob_start();
if(isset($_SESSION["login"]) && $_SESSION["login"] == "1")
{
echo "<a href='?show=home'>Home</a> | <a href='?show=alluser'>List all users<a/> | <a href='?show=logout'>Logout</a>";
echo "<br><br>";
foreach($all as $user)
{
echo $user['username']." ".$user['email']."<br>";
}
}
else
{
header("Location: http://igorhookah.hol.es/backoffice/");
}
?>