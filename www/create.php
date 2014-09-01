<?php

	include("include/init.php");

	loadlib("shlong");

	$crumb_key = "shlong";
	$GLOBALS['smarty']->assign("crumb_key", $crumb_key);

	if ((post_isset("url")) && (crumb_check($crumb_key))){

		$url = post_str("url");

		$rsp = shlong_add_url($url, $more);
		$GLOBALS['smarty']->assign_by_ref("short", $rsp);
	}

	$GLOBALS['smarty']->display("page_create.txt");
	exit();

?>
