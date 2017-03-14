<!DOCTYPE 
html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
 <head> 
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
 <title>Registration Form</title> 
 </head> 
 <body> 
 <form id="form1" name="form1" method="post" action="final.php">
 <div 
		align="center"> 
		<table width="493" height="122" border="1" align="center" cellpadding="8" cellspacing="0"> 
		<tr> 
		<caption> <h2>Registration Form</h2> </caption> 
		<tr> 
		<td width="252">
		<div align="right">Name
		</div>
		</td> 
		<td width="227">
			<input type="text" name="name" id="textfield"/>
			</td> 
			</tr>
			<tr>
			<td>
			<div align="right">Email
			</div>
			</td> 
			<td><input type="email" name="email" id="textfield2" />
				</td> 
				</tr> 
				<tr> 
				<td height="31">
				<div align="right">Username</div>
				</td> 
				<td>
				<div align="left"> <input type="text" name="u_name" id="textfield3" /> 
				</div>
				</td> 
				</tr> 
				<tr> 
				<td height="31">
				<div align="right">Password</div>
				</td> 
				<td><input type="password" name="password" id="textfield4" /></td>
				</tr> 
				<tr> 
				<td height="31" colspan="2">
				<div align="center">
				<input type="submit" name="submit" id="button" value="Submit" /> 
				</div>
				</td> 
				</tr> 
		 </table>
		</div> 
	</tr>
</table> </div>
	</form> 
</body> 
</html>
<?php 

$con=mysql_connect("localhost","root","") or die (mysql_error()); 
$db=mysql_select_db('mydata', $con) or die (mysql_error()); 
if(isset($_POST['submit'])){ 
$name=$_POST['name']; 
$email=$_POST['email']; 
$u_name=$_POST['u_name'];
$password=$_POST['password'];

if($name==''){ 
	echo "<script>alert('Enter Your Name')</script>";
	} 
if($email==''){ 
	echo "<script>alert('Enter Your Email')</script>"; 
	} 
if($u_name==''){ 
echo "<script>alert('Enter Your User Name')</script>"; 
}
if($password==''){ 
echo "<script>alert('Enter Your Password')</script>"; 
} 
else { 
$query="insert into cm(name,email,u_name,password) value ('$name','$email','$u_name','$password')"; 
}
if(mysql_query($query)){ 
echo "<script>alert('You are Succesfull registered')</script>"; 
} 
} 

?>﻿
