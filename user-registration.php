<?php
include('header.php');
?>
<center>
		<h1 style="color:yellow;">User Registration Page</h1>

		
			<form method="POST" action="user-registration-process.php">	
			<table border="1">
				<tr>
					<td style="color:yellow;">First Name</td>
					<td><input type="text" name="fname" required></td>
				</tr>
				<tr>
					<td style="color:yellow;">Last Name</td>
					<td><input type="text" name="lname" required></td>
				</tr>
				<tr>
					<td style="color:yellow;">Email</td>
					<td><input type="email" name="email" required></td>
				</tr>
				<tr>
					<td style="color:yellow;">Password</td>
					<td><input type="password" name="pwd" required></td>
				</tr>
				<tr>
					<td style="color:yellow;">Gender</td>
					<td style="color:yellow;">M<input type="radio" name="gender" value="M">
						F<input type="radio" name="gender" value="F">
					</td>
				</tr>
				<tr>
					<td style="color:yellow;">Date Of Birth</td>
					<td><input type="date" name="dob" required></td>
				</tr>
				<tr>
					<td style="color:yellow;">Address</td>
					<td>
						<textarea name="address" required></textarea>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submitBtn" value="Registration"></td>
				</tr>
			</table>
			
		</form>
		</center>
		
<?php
include('footer.php');
?>