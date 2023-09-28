<?php
	$myFile = fopen('plik001.txt', 'w')
		or die('Unable to open file!');
	$txt = 'Peter, the horse is here!\n';
    fwrite($myFile, $txt);
	fclose($myFile);
?>