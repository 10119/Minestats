<?php 

define("APIURL","https://ethermine.org/api/miner_new/480581861e193f7e1e5683b8c491d21f0ce6f62b");
header('Content-Type: application/json; charset=utf-8');
try {
    $JSON = file_get_contents(APIURL);
    echo $JSON;
} catch(Exception $e){
    http_response_code(429);
}

?>
