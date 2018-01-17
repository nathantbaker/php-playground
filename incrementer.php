<?php

function countToTen() {

	static $count = 0;

	if ($count < 10) {

		$count++;

		echo "$count<br/>";
		countToTen();
	}

	$hi = "d";
}

?>
