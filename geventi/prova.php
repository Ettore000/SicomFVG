<?php

$curl_handle=curl_init();
curl_setopt($curl_handle,CURLOPT_URL,'https://www.passwordrandom.com/query?command=password&scheme=LvnCnn');
curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
$buffer = curl_exec($curl_handle);
curl_close($curl_handle);

if (empty($buffer))
{
    print "Sorry, example.com are a bunch of poopy-heads.<p>";
}
else
{
    print $buffer;
}
?>