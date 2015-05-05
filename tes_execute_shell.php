<?php
	echo "tes command ls -lart";
	$output = shell_exec('ls -lart');
	echo "<pre>$output</pre>";
?>