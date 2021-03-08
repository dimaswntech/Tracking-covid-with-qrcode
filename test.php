<?php 
include 'koneksi.php';
$qry="select * from tbl_user";

$raw=mysqli_query($db1,$qry);

while($res=mysqli_fetch_array($raw))
{
	 $data[]=$res;
}
print(json_encode($data));
?>
 
<!-- <h3>Form Pencarian Dengan PHP - WWW.MALASNGODING.COM</h3>
 
<form action="test.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>
 
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
 
<table border="1">
	<tr>
		<th>No</th>
		<th>Nama</th>
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysqli_query($db1,"select * from tbl_user where nama like '%".$cari."%' or username like '%".$cari."%'");				
	}else{
		$data = mysqli_query($db1,"select * from tbl_user");		
	}
	$no = 1;
	while($d = mysqli_fetch_array($data)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['nama']; ?></td>
	</tr>
	<?php } ?>
</table> -->