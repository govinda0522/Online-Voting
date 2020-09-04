<?php include "header.php";
session_start();
if (isset($_SESSION['SESS_NAME'])!="") {
	header("Location: voter.php");
}
?>
<?php global $msg; echo $msg;?>

<p><center><legend><font color='blue' size='18'>This system allows all registered users to vote for their favorite POLITICAL PARTY.</p>
<p>In order to make a vote you have to register first and then login.</font></legend></center>
    <p>&nbsp;&nbsp;</p>
<html>
<body>
</body>
</html>
<style>
body
{
background-image:url("vote6.jpg");
background-repeat:no-repeat;
background-size:100%;
}
</style>