<?php
include('dbconn.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>library</title>
	<link rel="stylesheet" type="text/css" href="_css/main.css">
</head>
<body background="_pic/back.jpg">
	
			<div id="logo">
				<img src="_pic/logo.png" width="300" height="168"/>
			</div>
			<div id="login">
				<form method="POST" action="login-process.php">
					<table>
					<?php
				if (isset($_REQUEST['error'])&& $_REQUEST['error']==1)
					echo "<span class='error'>Please check your login details</span>";
			?>
						<tr>
							<td style="color:yellow;">Email</td>
							<td><input type="email" name="userEmail" required></td>
						</tr>
						<tr>
							<td style="color:yellow;">Password</td>
							<td><input type="password" name="userPwd" required></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="loginBtn" value="Login"></td>
						</tr>
					</table>
				</form>
			</div>
		
</body>
</html>