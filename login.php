<!DOCTYPE 
html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml">
 <head> 
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
 <title>Login form</title> 
 </head> 
 <body> 
 <form id="form1" name="form1" method="post" action="login.php">
 <div 
		align="center"> 
		<table width="493" height="122" border="1" align="center" cellpadding="8" cellspacing="0"> 
		<tr> 
		<caption> <h2>Login form</h2> </caption> 
	
				<tr> 
				<td height="31" width="50%">
				
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
				<input type="submit" name="login" id="button" value="login" /> 
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
$db=mysql_select_db('mydata', $con)or die (mysql_error()); 
if(isset($_POST['login'])){ 
  
$u_name=$_POST['u_name'];
$password=$_POST['password'];


if($u_name==''){ 
echo "<script>alert('Enter Your User Name')</script>"; 
}
if($password==''){ 
echo "<script>alert('Enter Your Password')</script>"; 
} 
else {  
$query="SELECT * FROM `cm` where u_name='$u_name' AND password='$password'"; 
$run=(mysql_query($query)) or die(mysql_error());
if(mysql_num_rows($run)>0){
	echo "<script>window.open('home.php','_self')</script>";
}
} 
}
?>﻿