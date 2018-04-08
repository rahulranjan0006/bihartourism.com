  
<html>
<head>
<title>contact</title>
<script>
function chang()
{
var x=document.getElementById("cname").value;
document.getElementById("cname").value=x.toUpperCase();
}
</script>

</head>
<body bgcolor="#ccffcc">
<h3 ALIGN="CENTER" STYLE="COLOR:RED;"><U>CONTACT US</U></h3>
<hr width="" size="5" shado>
<form method="post" action="insert.php">
<table border="0" align="left">
<tr style="color:blue;">
	<td>Name:</td>
	<td><input type="text" name="name" required="required" placeholder="Enter your name"size="30" onblur="chang()" id="cname"></td>
</tr>
<tr style="color:blue;">
	<td>Email:</td>
	<td><input type="email" name="email" required="required" placeholder="Enter Your Email"size="30" title=''></td>
</tr>	
<tr style="color:blue;">
	 <td>Mobile No:</td>
	<td>
		<select>	
		<option>+91</option>
		<option>+92</option>
		<option>+93</option>
		<input type="tel" title='Phone Number (Format: 9999999999)' placeholder="  9334358867" name="mobile" required="required"> 
		</select>
	</td>
</tr>
<tr style="color:blue;">
	<td>Message:</td>
	<td><textarea rows="5" cols="32" placeholder="Type your text..........." name="message" required="required"></textarea></td>
</tr>
<tr align="center">
	<td colspan=""><input type="Reset" value="Clear" name="reset"></td>
	<td colspan=""><input type="submit" value="submit" name="submit"></td>
	
</tr>	
</table>
</form>	
</body>
</html>