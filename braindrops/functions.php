<?php


function progo_direct_charcutoff($field) {
	$cut = 0;
	switch($field) {
		case 'arrowd':
		case 'getyours':
		case 'toparr':
			$cut = 40;
			break;
		case 'buynow':
			$cut = 16;
			break;
		case 'rightheadline':
			$cut = 80;
			break;
	}
	return $cut;
}
?>