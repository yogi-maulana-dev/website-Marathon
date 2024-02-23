<?php 
	$ch = curl_init(); 
	curl_setopt($ch, CURLOPT_URL, "https://www.steelytoe.com/static/version.json"); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	$output = curl_exec($ch);
	$version = json_decode($output);
	curl_close($ch);

	// print_r($version->integrator->wordpress->script);
	echo '<!DOCTYPE html><html lang="en"><head><meta charset="utf-8"/><meta name="viewport" content="width=device-width, initial-scale=1"><style type="text/css">.steelytoeNavigation {display: none;}</style><link rel="stylesheet" media="all" href="https://www.steelytoe.com/static/steelyreg.';
	echo $version->integrator->wordpress->script;
	echo '.css"/></head><body><div class="content"><div id="steelytoeRegContainer" form-style="stacked" event-id="430" lang="ID"><h3 style="color:red;">Loading Registration Page, please standby ...</h3></div></div></body><script src="https://code.jquery.com/jquery-3.2.1.min.js"></script><script src="https://www.steelytoe.com/static/steelyreg.';
	echo $version->integrator->wordpress->script;
	echo '.min.js"></script></html>';
?>