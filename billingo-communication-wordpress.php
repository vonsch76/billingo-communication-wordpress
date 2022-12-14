<?php

function billingorequest( $proto, $page, $parameters = null, $arguments = null) {
			
	$url = 'https://api.billingo.hu/v3' . $page;
	if(!empty($parameters))
		$url = add_query_arg($parameters,$url);
	if(!empty($arguments))
		$payload = json_encode($arguments);
	$args = array(
		'method' 	=> $proto,
		'timeout'	=> 30,
		'headers'	=> array(
					'accept' => 'application/json',   
					'X-API-KEY' => BILLINGO_API_KEY, //don't forget to add
          'Content-Type' => 'application/json',
          'Content-Length' => strlen($payload)
				   ),
		'body'		=> $payload
		);
		
	$response = wp_remote_request($url, $args);
  
  }
