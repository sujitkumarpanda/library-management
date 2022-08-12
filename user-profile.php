<?php
include('dbconn.php');
if(!isset($_SESSION['userId']))
header('Location:header.php');
$userId = $_SESSION['userId'];
$sql = "SELECT * FROM users WHERE userId='$userId';";
$result = mysqli_query($dbConn,$sql);
$rws = mysqli_fetch_array($result);
?>	
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="_css/main.css">
	<link rel="stylesheet" type="text/css" href="_css/style.css">
</head>
	<body background="_pic/back.jpg">	

	

		<b><h1 style="color:yellow;">Welcome <?php echo $rws[1];?></h1></b>
		<h1 style="color:green;background-color: white; border:3px solid blue;">Our Latest Collection</h1>
		<div id="ebooks" style="margin-top: 10px;margin-left: 15%;width: 100%;float: left;">
			<table>
				<tr>
					<td><img src="_pic/english-grammar-in-use.jpeg" height="200" width="148" align="left" /></td>
					<td><img src="_pic/physics.jpg" height="200" width="148" align="left" /></td>
					<td><img src="_pic/alc.jpg" height="200" width="148" align="left" /></td>
					<td><img src="_pic/english-grammar-in-use.jpeg" height="200" width="148" align="left" /></td>
					<td><img src="_pic/alc.jpg" height="200" width="148" align="left" /></td>
					<td><img src="_pic/english-grammar-in-use.jpeg" height="200" width="148" align="left" /></td>
				</tr>
				<tr>
					<td><img src="_pic/english-grammar-in-use.jpeg" height="200" width="148"  /></td>
					<td><img src="_pic/alc.jpg" height="200" width="148"  /></td>
					<td><img src="_pic/english-grammar-in-use.jpeg" height="200" width="148"  /></td>
					<td><img src="_pic/physics.jpg" height="200" width="148"  /></td>
					<td><img src="_pic/alc.jpg" height="200" width="148"  /></td>
					<td><img src="_pic/english-grammar-in-use.jpeg" height="200" width="148"  /></td>
				</tr>
				<tr>
					<td><img src="_pic/english-grammar-in-use.jpeg" height="200" width="148"  /></td>
					<td><img src="_pic/alc.jpg" height="200" width="148"  /></td>
					<td><img src="_pic/english-grammar-in-use.jpeg" height="200" width="148"  /></td>
					<td><img src="_pic/physics.jpg" height="200" width="148"  /></td>
					<td><img src="_pic/alc.jpg" height="200" width="148"  /></td>
					<td><img src="_pic/english-grammar-in-use.jpeg" height="200" width="148"  /></td>
				</tr>
			</table>
		</div>
		
	
</body>
</html>
<?php
include('footer.php');
?>		