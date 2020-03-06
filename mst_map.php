<?php

$response["success"] = 1;
$response["message"] = "Successfully retrieved";
$response["data"] = array();


$payload["lat"]=-6.88;
$payload["lang"]=107.58;
array_push($response["data"],$payload);
echo json_encode($response,JSON_UNESCAPED_SLASHES);


?>