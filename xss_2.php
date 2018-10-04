<?php
	if(preg_match('/script/i', $_GET['a'])) exit('xss detected');
	header('X-XSS-Protection:0');
?>
<html>
	<body>
		<?php echo $_GET['a'];?>
		<br/><hr/>

<?php
	highlight_file(__file__);
