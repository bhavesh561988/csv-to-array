<?php 
	
	
	$conn = mysql_connect('10.2.1.92','rhapsody','rhapsody');
	$db = mysql_select_db('rhapsodyofrealities',$conn);

	if(!$conn){
		echo 'Database is not connected ...Please check all the details';
	}
	
	include_once('csv.inc.php');
	$csv = new csv_uploder('Normal_12_months.csv', 1000 , ',');
	$array = $csv->getCsv();
	

	/*echo '<pre>';
	print_r($array);
	exit;*/
	
	$sqlimplode = '';
	foreach ($array as $value) {
		//$sqlimplode = "('audio','5',1,".$value[0].")";

		//$sqlimplode = rtrim($sqlimplode,',');

	   // $sql_query = "INSERT INTO pins (coupons_for,plan_id,activation_pin) VALUES ('ebook','1',".$value[0].")";
		//mysql_query($sql_query);

	//	exit;
	}

	//$sqlimplode = rtrim($sqlimplode,',');

	//echo $sql_query = "INSERT INTO pins (coupons_for,plan_id,activation_pin,campaign_name) VALUES $sqlimplode";
	//mysql_query($sql_query);


?>
