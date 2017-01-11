<?php
if($_SESSION['login'] != "1")
{
echo "<center><h3>".$log."</h3></center>";
?>
<center>
<form method="POST">
<input name='username' type='text' placeholder='Username or email'/><br>
<input name='password' type='password' placeholder='Password'/><br>
<input name='loginButton' type='submit' value='Login'/><br>
<p>If you aren't user</p><input type='submit' name='page' value='Register'/>
</form>
</center>
<?php
}
else
{

}

?>