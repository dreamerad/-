<?php
$curl = curl_init("http://nist.gov:13");
echo curl_exec($curl);

curl_close($curl);



?>