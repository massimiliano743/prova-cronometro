<!DOCTYPE html>
<html>
<body>

<h1>Client</h1>

<p>client</p>


<?php

$socket = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
$in = ';lsdkf';
var_dump (socket_sendto($socket, $in,strlen($in), 0,'127.0.0.1',46123));
    ?>

</body>
</html>