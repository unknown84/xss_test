<?php
	if(preg_match('/script/i', $_GET['a'])) exit('xss detected');
	if(preg_match('/onload/i', $_GET['a'])) exit('no onload');
	header('X-XSS-Protection:0');
?>
<html>
	<body>
		<?php echo $_GET['a'];?>
		<br/><hr/>

<?php
	highlight_file(__file__);

