<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php"; 
?>
<br>
<br>
<center><h2 style="color:cyan;margin-top:100px;">Change Password</h3></center>
<h4 style="color:#e60808;"><?php global $nam; echo $nam;?> </h4> 
<?php global $error; echo $error;?>                  
<center><form action="change_pass_action.php" method="post" id="myform">
<table>
<tr>
<td>
<p id="cp">Current Password :
</td>
<td>
<input type="password" name="cpassword" value="" >
</td>
</tr>
<tr>
<td>
<p id="cp">New Password:
</td>
<td>
<input type="password" name="npassword" value="" >
</td>
</tr>
<tr>
<td>
<p id="cp">Confirm New Password:
</td>
<td>
<input type="password" name="cnpassword" value="" >
</td>
</tr>
<tr>
<td>
<p><input type="submit" name="cpass" value="UPDATE" id="io" ></p>
</td>
</tr>
</table>
</form></center>
<script type="text/javascript">
var frmvalidator = new Validator("myform"); 
frmvalidator.addValidation("cpassword","req","Please enter Current Password"); 
frmvalidator.addValidation("cpassword","maxlen=50");
frmvalidator.addValidation("npassword","req","Please enter New Password"); 
frmvalidator.addValidation("npassword","maxlen=50");
frmvalidator.addValidation("cnpassword","req","Please enter Confirm New Password"); 
frmvalidator.addValidation("cnpassword","maxlen=50");
</script>
<br>
<br>
<style>
body
{
background-image:url("vote10.jpg");
background-repeat:no-repeat;
background-size:100%;
}
#cp
{
	color:yellow;
	font-size:20px;
}
#io
{
	size:40px;
	color:cyan;
	width:100px;
	height:30px;
	margin-left:120px;
	background-color:black;
	cursor:pointer;
	font-size:20px;
}

</style>
