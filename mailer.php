<?php
$emailSubject = 'Customer Has a Question!';
$webMaster = 'hughkingsmen@gmail.com';
$nameField = $_POST ['name'];
$emailField = $_POST['email'];
$questionField = $_POST ['message'];
$body = <<<EOD
<br><hr><br>
Name: $nameField <br>
Email: $emailField <br>
Questions: $questionField <br>
EOD;
$headers = "From: $emailField\r\n";
$headers .= "Content-type: text/html\r\n";
$success = mail($webMaster, $emailSubject, $body, $headers);
$theResults = <<<EOD
EOD;
echo "$theResults";
?> 
