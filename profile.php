<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php";
include "connection.php";
?>
<h4 style="color:yellow;font-size:30px;"> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h4>
<?php
$username = $_SESSION['SESS_NAME'];
$query = 'SELECT status FROM voters WHERE username="'.$_SESSION['SESS_NAME'].'" AND status = "VOTED"';
if ($result = mysqli_query($con,$query)) {
if (mysqli_num_rows($result) > 0) {
$sql = mysqli_query($con, 'SELECT voted from voters WHERE username="'.$_SESSION['SESS_NAME'].'"');
$row = mysqli_fetch_assoc($sql);
        echo "<h4 style='color:yellow;font-size:30px;'>You have voted for: " . " " . $row['voted'];
    } else {
        echo "<h4 style='color:yellow;font-size:30px;'> You have not voted yet. Please submit your vote!";
    }
}
?>
<html>
<style>
body
{
background-image:url("vote10.jpg");
background-repeat:no-repeat;
background-size:100%;
}
</style>
<body>
</body>
</html>