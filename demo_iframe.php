<?php
	$readfile=fopen("form_values.txt",'r') or die("Unable to open file");
	while (!feof($readfile)) {
		$line = fgets($readfile);
		echo $line."<br>";
		}
	fclose($readfile);
	//header("Location:http://localhost/phpdocs/fin_dash/new_1.html");
	//exit;
?>