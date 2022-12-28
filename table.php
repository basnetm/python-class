
<?php
$host="localhost";
$user="root";
$pass="";
$db="manoj";
$connect=mysqli_connect($host,$user,$pass,$db);

$field=$_POST['field'];
$value=$_POST['value'];





?>
<table width="50%" border="1">
	<tr>
		
		<td>name</td>
		<td>username</td>
		
		<td>contact</td>
			</tr>
	<tr>

<?php
$select="SELECT * FROM `form` WHERE `$field`='$value'";
$result=mysqli_query($connect,$select);
while ($row=mysqli_fetch_assoc($result)) {

	echo "<tr><td>".$row['name']."</td>
		<td>".$row['username']."</td>
		<td>".$row['contact']."</td></tr>";	 
}
?>
</table>
<form method="POST">
	name of the field:<input type="text" name="field"><br><br>
	value of the record:<input type="text" name="value"><br><br>
	<input type="submit" name="submit">



</form>
