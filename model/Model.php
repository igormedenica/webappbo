<?php

include_once "config.php";

class Model
{
	public function getLogin()
	{
              global $mysqli;
		
		if(isset($_POST['username']) && isset($_POST['password']))
		{
         	$email = $_POST['username'];
		$login = $mysqli->query("SELECT * FROM user WHERE email = '$email' OR username = '$email'");
               if($login->num_rows > 0)
               {
           	$row = $login->fetch_assoc();
                $username = $row['username'];
                $email = $row['email'];
           	$password = $row['password'];
                 $hash = md5($_POST['password']);
				if($hash == $password)
				{
	                              $_SESSION["login"] = "1";
                                      $_SESSION["username"] = $username;
					return 'login';
				}
				else
				{
					return 'Bad password';
				}

               }
               else
               {
                        return 'No user found';
               }
		}
	}

	public function getRegister()
	{
               global $mysqli;
		
		if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']))
		{

                   $username = $_POST['username'];
                   $email = $_POST['email'];
                   $password = md5($_POST['password']);

		    $register = $mysqli->query("INSERT INTO user (username,email,password) VALUES ('$username', '$email', '$password')");

				if($register)
				{
					return 'register';
				}
				else
				{
					return 'error';
				}
		}
	}

	public function allUser()
	{
               global $mysqli;
		
		    $alluser = $mysqli->query("SELECT * FROM user");

                  return $alluser;
	}
}
?>			