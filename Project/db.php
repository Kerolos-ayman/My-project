<html>
<body>
<?php


if(isset($_POST['dd'])){
	mysql_connect("localhost","root","root");
	mysql_select_db("test");
	$T=mysql_escape_string($_POST['T']);
	$Ta=mysql_escape_string($_POST['Ta']);
	$D=mysql_escape_string($_POST['D']);
	mysql_query("INSERT INTO test VALUES ('$T','$Ta','$D')");
	exit();
}

if(isset($_GET['dd'])){
	$link = mysqli_connect("localhost", "root", "root", "test");
	$sql = "SELECT * FROM test";
	if($result = mysqli_query($link, $sql))
	{
		$rows=array();
	while($row = mysqli_fetch_array($result))
	{
		array_push($rows,$row);
	}
	}
	echo json_encode($rows);
}
?>
</body>
</html>