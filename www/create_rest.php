<?php

	include("include/init.php");

	loadlib("shlong");

	if ((post_str("method") == 'micahli.create')){

		$url = post_str("url");

		$ret = shlong_add_url($url, $more);

        	$rsp['stat'] = 'ok';
        	$rsp['short_url'] = $GLOBALS['cfg']['abs_root_url'] . $ret['short_url'];
        	$rsp['long_url'] = $ret['long_url'];

        	if (! request_isset("inline")){
            		header("Content-Type: text/json");
        	}

        	$json = json_encode($rsp);
        	header("Content-Length: " . strlen($json));

        	echo $json;
        	exit();

    	} else {
        	error_403();
        	exit();
    	}	
