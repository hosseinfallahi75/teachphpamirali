<?php
$result = 'asanbiamoz.com';
// echo md5('123456'.$result);

$userpass = sha1(md5($result));
echo $userpass;

?>