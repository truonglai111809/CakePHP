<?php
$to = "haudt96@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: haudt@student.passerellesnumeriques.org" . "\r\n" .
"CC: haudt@student.passerellesnumeriques.org";

$result = mail($to,$subject,$txt,$headers);
if($result) {
    echo 'SUCCESS';
}
else {
    echo "FAIL";
}
?>