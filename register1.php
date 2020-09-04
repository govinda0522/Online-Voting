<script src='https://www.google.com/recaptcha/api.js'></script>
<?php include "header.php";
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<br>
<br>
<center>
<legend> <h3> Register </h3></legend> </center>
<?php global $nam; echo $nam; ?> 
<?php global $error; echo $error; ?>
<center><font size="4" >
<form action= "reg_action.php" method= "post" id="myform" >
<h3>Firstname:
<input type="text" name="firstname" value="" required/>
<br>
<h3>Lastname: 
<input type="text" name="lastname" value="" required />
<br>
<h3>Username: 
<input type="text" name="username" value="" required />
<br>
<h3 font-size="30px">Password: 
<input type="password" name="password" value="" required />
</h3>
<br>
<input type="submit" name="submit" value="Submit"  id="io" />
</form>
</font>
</center>
<script type= "text/javascript" >
 var frmvalidator = new Validator("myform"); 
 frmvalidator.addValidation("firstname","req","Please enter student firstname"); 
 frmvalidator.addValidation("firstname","maxlen=50");
 frmvalidator.addValidation("lastname","req","Please enter student lastname"); 
 frmvalidator.addValidation("lastname","maxlen=50");
 frmvalidator.addValidation("username","req","Please enter student username"); 
 frmvalidator.addValidation("username","maxlen=50");
 frmvalidator.addValidation("password","req","Please enter student password"); 
 frmvalidator.addValidation("password","minlen=6","Password must not be less than 6 characters.");

</script>
<style>
body
{
background-image:url("vote14.jpg");
background-repeat:no-repeat;
background-size:100%;
}
h3
{
	color:yellow;
	font-size:30;
}
u
{
	color:yellow;
	font-size:100;
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