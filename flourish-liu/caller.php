<?php

	header('Content-Type: application/json');

	// example : http://liu-flourish.joe.dlsdev.co.uk/api/1.0/search?filter_types=contribution&
	$endpoint = substr($_SERVER['QUERY_STRING'], 5);

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $endpoint);
	curl_setopt($ch, CURLOPT_POST, 1);

	$result = curl_exec($ch);
