<?php 
	
	
	$conn = mysql_connect('localhost','root','password');
	$db = mysql_select_db('mytestBD',$conn);

	if(!$conn){
		echo 'Database is not connected ...Please check all the details';
	}
	
	include_once('csv.inc.php');
	
	$csv = new csv_uploder('Normal_12_months.csv', 1000 , ',');
	$array = $csv->getCsv();
	
	
	foreach ($array as $value) {
		
		//Bulid your custom querty to insert CSV Data to Database
		
	}



?>
