<?php

	require_once('connect.php');
	header('Access-Control-Allow-Origin : http://www.a.com'); 

	$page = $_GET['page'];
	$len = 3;
	$index = $page * $len;

	$sql = " select * from message order by date desc limit $index , $len";

	$query = mysqli_query($con,$sql);

	if($query && mysqli_num_rows($query)){
		while($row = mysqli_fetch_assoc($query)){
			$arr[] = $row;
		}
		//echo json_encode($arr);
		echo '{"code":"0","data" : '. json_encode($arr) .' }';
	}
	else{
		echo '{"code":"1","message":"没有数据"}';
	}

?>