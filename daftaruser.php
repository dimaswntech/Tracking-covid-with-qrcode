<?php
//host

include "koneksi.php";

$query=mysqli_query($db1,"SELECT * FROM tbl_user");

if($query)
{
while($row=mysqli_fetch_array($query))
	{
	$flag[]=$row;
	}
print(json_encode($flag));
}
mysqli_close($db1);
?>
