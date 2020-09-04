<?php
if(!isset($_SESSION)) { 
session_start();
}
include "auth.php";
include "header_voter.php";
?>
<center><h1><u style="color:gold;"> Voting So Far  </u></h3></center>
<?php
include "connection.php";
$member = mysqli_query($con, 'SELECT * FROM languages' );
if (mysqli_num_rows($member)== 0 ) {
	echo '<font color="red">No results found</font>';
}
else {
	echo '<center><table width=100 height=100 cellpadding=10 ><tr bgcolor="orange">
<td width="30px">ID</td>		
<td width="100px">PARTY</td>
<td width="100px">ABOUT</td>
<td width="30px">VOTE</td>
</tr>';
while($mb=mysqli_fetch_object($member))
		{	
			$id=$mb->lan_id;
			$name=$mb->fullname;
			$about=$mb->about;
			$vote=$mb->votecount;
			echo '<tr bgcolor="cyan">';
	echo '<td>'.$id.'</td>';		
	echo '<td>'.$name.'</td>';
	echo '<td>'.$about.'</td>';
	echo '<td>'.$vote.'</td>';
	echo "</tr>";
		}
		echo'</table></center>';
	}
?>
<style>
body
{
background-image:url("vote14.jpg");
background-repeat:no-repeat;
background-size:100%;
}
</style>