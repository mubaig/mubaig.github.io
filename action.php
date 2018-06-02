<?php

$fname=$_POST<'fname'>;
$lname=$_POST<'lname'>;
$country=$_POST<'country'>;

$data=$fname.",".$lname",".$country;


$file="file.csv";


file_put_contents($file, $data ,PHP_EOL, FILE_APPEND);
print "<h1 align=center>Thank you for submitting your email address!</h1>";


?>
<html>
<head>
  <title>ThankYou Page</title>    
</head>
<body>
  <h1><a>Thank You</a> </h1>    
    
</body>




</html>
