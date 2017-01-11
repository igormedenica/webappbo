<?php
session_start();
ob_start();
if($_SESSION["login"] == "1")
{
echo "<a href='?show=home'>Home</a> | <a href='?show=alluser'>List all users<a/> | <a href='?show=logout'>Logout</a>";
echo "<br><br>";
echo "Hello ".$_SESSION['username'].".";
}
else
{
header("Location: http://igorhookah.hol.es/backoffice/");
}
?>