<?php

	session_start();
	
	include("twitteroauth/twitteroauth.php");
	
	$apikey="V10aoHtA2SUY6X6RqXbnTcfFI";
	$apisecret="88Yyh2NvDRWbsCKmazcrmY85cC1UT5hIzPLH8X2wjQr7280LVg";
	$accesstoken="2829709700-DUxTbQkUlc7DyzxjsFADq84f03ZAkPdz42mvhnP";
	$accesssecret="0Zr8PoIhpeRu5SNTA8s9qOOXOLRH0eyNUdnPDFf9YhMmT";
	
	$connection = new TwitterOAuth($apikey, $apisecret, $accesstoken, $accesssecret);
	
	$tweets = $connection->post("https://api.twitter.com/1.1/statuses/update.json?",
	array("status"=> "This is a test tweet"));
	
	
	foreach($tweets as $tweet){
		
		echo $tweet->text;
		
	
		echo "<br/>";
	}

?>