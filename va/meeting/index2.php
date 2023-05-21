<?php
include('config.php');
include('api.php');
$arr['topic']='Vivek Tutorials: Class 12th' ;
// $arr['start_date']=date();
// $arr['duration']=60;
$arr['password']='joinvivek';
$arr['type']='2';
$result=createMeeting($arr);

if(isset($result->id)){
	echo "Join URL: <a href='".$result->join_url."'>".$result->join_url."</a><br/>";
	echo "Password: ".$result->password."<br/>";
	// echo "Start Time: ".$result->start_time."<br/>";
	// echo "Duration: ".$result->duration."<br/>";
}else{
	echo '<pre>';
	print_r($result);
}
?>