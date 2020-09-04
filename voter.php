<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php"; 
?>
<html>
<body>
<h4 style="color:yellow;font-size:30px;"> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h4>
<h3 style="color:yellow;font-size:30px;" >Make a Vote </h3>
<form  action="submit_vote.php" name="vote" method="post" id="myform" >
<center><font size='6'><h2>Which is your favorite political party? </h2>
<table>
<tr><td><label><p class="rad"><input type="radio" name="lan" value="BJP" >  BJP </td></tr>
<tr><td><label><p class="rad"><input type="radio" name="lan" value="CONGRESS" > CONGRESS </td></tr>
</tr><td><label><p class="rad"><input type="radio" name="lan" value="AAP" >   AAP </td></tr>
<tr><td><label><p class="rad"><input type="radio" name="lan" value="NOTA" > NDA </td></tr>
<tr><td><label><p class="rad"><input type="radio" name="lan" value="NIRDLIY"> TDP </td></tr>
</table>
</font></center><br>
<?php global $msg; echo $msg; ?>
<?php global $error; echo $error; ?>
<center><input type="submit" value="Submit Vote" name="submit"  id="io" /></center>
</form>
</body>
</html>
<style>
body
{
background-image:url("vote6.jpg");
background-repeat:no-repeat;
background-size:100%;
}
h2
{
	color:green;
}
#io
{
	size:40px;
	color:cyan;
	width:130px;
	height:30px;
	margin-left:120px;
	background-color:black;
	cursor:pointer;
	font-size:20px;
}
.rad
{
	color:yellow;
}
radio{
	cursor:pointer;
}
</style>
