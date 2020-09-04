<?php include "header.php"; 
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<center>
<legend><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Login </b></legend> 
</center>
<?php global $nam; echo $nam; ?>
<?php global $error; echo $error; ?>
<br>
<center><font size="4" >
<form action="login_action.php" method="post" id="myform" >
<table>
<tr>
<td><h2>Username&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2></td>
<td><input type="text" name="username" value="" ></td></tr>
<tr><td><h2>Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2></td>
<td><input type="password" name="password" value="" ></td></tr>
</table> 
<h6><input type="submit" name="login" value="submit" id="io" ></h6>
</form></font>
</center>

<script type="text/javascript" > 
var frmvalidator = new Validator("myform");
frmvalidator.addValidation("username" , "req" , "Please Enter Username");
frmvalidator.addValidation("username", "maxlen=50");
frmvalidator.addValidation("password", "req" , "Please Enter Password");
</script>
<style>
body
{
background-image:url("vote10.jpg");
background-repeat:no-repeat;
background-size:100%;
}
b
{
	color:cyan;
	font-size:40px;
}
h2{
	color:yellow;
}
#io
{
	size:40px;
	color:cyan;
	width:80px;
	height:30px;
	margin-left:120px;
	background-color:black;
	cursor:pointer;
	font-size:20px;
}
</style>