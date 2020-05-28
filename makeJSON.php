<?php
$fp = fopen($base_path.'storage/documents/by_zone/py-scripts/DBData/data/datauser/datauser.json', 'w');
fwrite($fp,  json_encode($data , JSON_UNESCAPED_UNICODE));
fclose($fp);
?>
