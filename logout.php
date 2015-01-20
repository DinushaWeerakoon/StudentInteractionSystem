
<?
		// remove all session variables
		session_unset(); 

		// destroy the session 
		
		unset($_SESSION); 
		unset($_COOKIE);

		session_destroy(); //destroy session
		if (isset($_SERVER['HTTP_COOKIE']))
		{
			$cookies = explode(';', $_SERVER['HTTP_COOKIE']);
			foreach($cookies as $cookie)
		{
			$mainCookies = explode('=', $cookie);
			$name = trim($mainCookies[0]);
			setcookie($name, '', time()-1000);
			setcookie($name, '', time()-1000, '/');
		}
		}
		
		header("Location:welcome.html");
		exit();
?>