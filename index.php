<!DOCTYPE html>

<?php
	session_start();
	$_SESSION['id'] = 'test';
	$cdir = scandir('.');
	foreach ($cdir as $key => $value){
		if( substr($value, -4) === ".php"){
			echo "<a href='{$value}'>{$value}</a><br/>";
		}
	}
	
	echo "<br/><hr/>";
	highlight_file(__file__);	
