<?php
	header('X-XSS-Protection:0');
?>
<html>
	<body>
		<?php echo $_GET['a'];?>
		<br/><hr/>

<?php
	highlight_file(__file__);
