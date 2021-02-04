<html>
<head>
<style>
.error [color:#ff0000]
</style>
<title>
Project of Library 
</title>
<h2> <font color = "blue"> <u>Welcome to Digital Library</h2></u></font>
<link href="style.css" rel="stylesheet">
</head>

<body>
	 
	<form action = "<?php htmlspecialchars ($_SERVER["PHP_SELF"]); ?>" method="POST"  align="right">
		<table border=20% align=center>
			<tr>
				<td>Customer Name</td>
				<td><input type="text" name="custname" required>
			</tr>
			<tr>
				<td> Book Name</td>
				<td><input type="text" name="bookname" required>
			</tr>
			<tr>
				<td>Mobile</td>
				<td><input type="number" name="mob" required>
			</tr>

			<tr>
				<td><input type="submit" name="submit" value="submit"></td>
				<td><input type="reset" name="reset" value="Clear">

			</tr>

			<tr>
				<td> <input type ="button" name=" DELETE" value ="delete" > </td>
			</tr>	
		</table>
		

			<a href ="1.html"> Display Form list </a> 
		
	</form>

<?php
include "libcon.php";
?>
	<?php 
			if (isset ($_POST ["submit"]))
		{
				$custname= $_POST ['custname'];
				$bookname= $_POST['bookname'];
				$mob=  $_POST ['mob'];
				
					
				//$bookid= $_POST['bookid'];
				
				//insert query
					$insertquery="insert into lib (custname,  bookname, mob ) value ('$custname', '$bookname','$mob')";
				
				$res = mysqli_query($con,$insertquery);
		}
		
		if($res)
		{
			?>
			<script> alert ("data inserted properly");</script>
			<?php
		}	else
			{ ?>
			<script> alert ("data inserted not properly");</script>
	<?php
			}
	?>
	
	
</body>
</html>