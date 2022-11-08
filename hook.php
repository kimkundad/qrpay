<?php

$respFile = fopen("resp-log.txt", "w") or die("Unable to open file!");

$json_str = file_get_contents('php://input');
fwrite($respFile, $json_str . "\n\n");

$json_obj = json_decode($json_str);

ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	date_default_timezone_set("Asia/Bangkok");

	$sToken = "fnuFko1TYpvuuYW8yRuIvF7shulqt51pctCB3uQ3i8F";
	$sMessage = "resultCode : ". $json_obj->resultCod .", amount : ". $json_obj->amount .", referenceNo :".$json_obj->referenceNo.", gbpReferenceNo : ".$json_obj->gbpReferenceNo.",currencyCode : ".$json_obj->currencyCode;

	$chOne = curl_init(); 
	curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
	curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 
	curl_setopt( $chOne, CURLOPT_POST, 1); 
	curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$sMessage); 
	$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$sToken.'', );
	curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers); 
	curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1); 
	$result = curl_exec( $chOne ); 

	//Result error 
	if(curl_error($chOne)) 
	{ 
		echo 'error:' . curl_error($chOne); 
	} 
	else { 
		$result_ = json_decode($result, true); 
		echo "status : ".$result_['status']; echo "message : ". $result_['message'];
	} 
	curl_close( $chOne );   

fwrite($respFile, "resultCode=" . $json_obj->resultCode . "\n");
fwrite($respFile, "amount=" . $json_obj->amount . "\n");
fwrite($respFile, "referenceNo=" . $json_obj->referenceNo . "\n");
fwrite($respFile, "gbpReferenceNo=" . $json_obj->gbpReferenceNo . "\n");
fwrite($respFile, "currencyCode=" . $json_obj->currencyCode . "\n");

fclose($respFile);

//ls9rPB19Pr0ap6ZHFC5rlqQ1FtCK9R0q4sDsV62175m
?>