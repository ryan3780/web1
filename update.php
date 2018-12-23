<?php

	include 'db_config.php';
 
	if(isset($_POST['idp'])){
	$id = $_POST['idp'];
	$date = $_POST['date'];
	$tw = $_POST['first_tag'];
	$kind = $_POST['second_tag'];
	$wm = $_POST['work_num'];
	$wt = $_POST['work_time'];
	$rn = $_POST['req_user'];
	$wn = $_POST['work_user'];
	$wnum = $_POST['user_num'];
	

	$query = "UPDATE record_work SET date = '".$date."', tw = '".$tw."', kind = '".$kind."', wm = '".$wm."', wt = '".$wt."', rn = '".$rn."', wn = '".$wn."', wnum = '".$wnum."' WHERE idx = $id" ;
	$result = mysqli_query($conn, $query);
	
if(empty($kind) or empty($wm) or empty($wt) or empty($rn) or empty($wn)){

	$message = "빠진거 이뜸";

	echo "<script type='text/javascript'>alert('$message');history.back();</script>";

	}

	else  

	if($conn -> query($query) === TRUE) {

		header('Location: index.html');

	}
}

$conn->close();
	
//header('Location: index.html');
?>