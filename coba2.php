<?php

	$datetime = '2016-01-27 00:57:30';
	$datetime = date('Y-m-d H:i:s', strtotime('+1 year', strtotime($datetime)));
	$datetime = date('d/m/Y', strtotime($datetime));

	echo $datetime;