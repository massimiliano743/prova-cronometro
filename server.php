<!DOCTYPE html>
<html>
<body>

<h1>Server</h1>

<p>Server</p>

<?php

$s=socket_create(AF_INET,SOCK_DGRAM,0);
socket_bind($s,"localhost",8888);
socket_recvfrom($s,$buffer,100,0,$remoteipclient,$remoteportclient);

?>

</body>
</html>