<!DOCTYPE html>

<?php
	$cdir = scandir('.');
	foreach ($cdir as $key => $value){
		if( substr($value, -4) === ".php"){
			echo "<a href='{$value}'>{$value}</a><br/>";
		}
	}

