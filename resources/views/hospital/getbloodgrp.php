<?php 
include('conn.php');
if(isset($_POST['blood_group'])){
	$blood_group	= $_POST['blood_group'];
	$qr				= "SELECT volume FROM total_blood  WHERE blood_group='$blood_group'";
	$result			= mysqli_query($conn,$qr) or die(mysqli_error($conn)); 
	$total_vol		= 0;
	while($row = mysqli_fetch_array($result)){
		$volum = $row['volume'];
		$total_vol = $total_vol + $volum;
	}
	echo $total_vol;
}
if(isset($_POST['request_no'])){
	$request_no		= $_POST['request_no'];
	$qr				= "SELECT * FROM requests_users 
						left join blood_group on blood_group.id=requests_users.blood_group_id 
						WHERE requests_users.ref_code='$request_no'";
	$result 		= mysqli_query($conn,$qr) or die(mysqli_error($conn)); 
	//$datares = mysqli_fetch_array($result);		
	// $total_vol=0;	
	while($datares = mysqli_fetch_array($result)){	
		$blood_group	= $datares['blood_group'];
		$qr				= "SELECT volume FROM total_blood  WHERE blood_group='$blood_group'";
		$result 		= mysqli_query($conn,$qr) or die(mysqli_error($conn)); 
		$total_vol		= 0;
		while($row = mysqli_fetch_array($result))
		{
			$volum = $row['volume'];
			$total_vol = $total_vol + $volum;
		}	
		// $volum = $datares['volume'];
		// $total_vol = $total_vol + $volum;
		$datas = array(
				"patient"		=>	$datares['patient'],
				"blood_group"	=>	$datares['blood_group'],
				"phone"			=>	$datares['phone'],
				"volume"		=>	$datares['volume'],
				"physician_name"=>	$datares['physician_name'],
				"avolume"		=>	$total_vol,
				"gender"		=>	$datares['gender'],
				"age"			=>	$datares['age']
		);
	}
	echo json_encode($datas);
}
?>