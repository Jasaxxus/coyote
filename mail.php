<?php
$to = "coyotetestmail@mail.ru";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: coyotetestmail@mail.ru" . "\r\n" .
"CC: coyotetestmail@mail.ru";

mail($to,$subject,$txt,$headers);
?> 