<!DOCTYPE html>
<html>
<body>

<?php
error_reporting(0);
?>
<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "simulasi";

// Create connection
$c = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if(!$c){
    echo 'Koneksi ke server database gagal dilakukan';
}else{
    echo 'Koneksi ke server database sukses';
}


echo 
"<html>
	<head>
		<title>Simulasi_Tugas</title>
	</head>

<br/><br/>LIST DATABASE SERVER<hr><p></p>

<table border=1 cellpadding=10 cellpadcing=0>
<tr bgcolor='#ccc'><td>ID</td><td>NAMA</td><td>TANGGAL</td></tr>
</html>";

$query="SELECT id, nama, tanggal FROM transmisi_data";
$result=mysqli_query($c, $query);

while($data=mysqli_fetch_array($result)){
	echo "<tr><td>".$data['id']."</td><td>".$data['nama']."</td><td>".$data['tanggal']."</td></tr>";
}
echo "</table> 

</body>
</html>
";

mysqli_close($c);


?>