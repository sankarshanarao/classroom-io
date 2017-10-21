<?php
$myfile=fopen("form_values.txt",'a') or die("Unable to open file");
$name=$_POST["INP"]."\n"; 
//$email=$_POST["email"];
//$email=$email."\n";
fwrite($myfile,"Sai Srikar:");
fwrite($myfile,$name);
//fwrite($myfile,$email);
fclose($myfile);
header("Location:http://localhost/phpdocs/fin_dash/new_1.html");
exit;
?>