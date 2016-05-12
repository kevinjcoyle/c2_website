<?php
$ref=@$_SERVER[HTTP_REFERER];
$agent=@$_SERVER[HTTP_USER_AGENT];
$ip=@$_SERVER['REMOTE_ADDR'];
$tracking_page_name2 = $_SERVER["SCRIPT_NAME"];
$tracking_page_name = $_SERVER['SERVER_NAME'];
if (strlen($ref) == 0) {
    $ref = 'NO REFFERRER';
}
if(strlen($ref) > 2 and !(stristr($ref,"http://www.c2customfurnishings.com"))){ // exclude referrer from your own site.
$strSQL = "INSERT INTO track( ref, agent, ip,tracking_page_code, tracking_page_name) VALUES (:ref,:agent,:ip,:tracking_page_code,:tracking_page_name)";

$sql=$dbo->prepare($strSQL);

$sql->bindParam(':ref',$ref,PDO::PARAM_STR, 250);
$sql->bindParam(':agent',$agent,PDO::PARAM_STR, 250);
$sql->bindParam(':ip',$ip,PDO::PARAM_STR, 20);
$sql->bindParam(':tracking_page_name',$tracking_page_name2,PDO::PARAM_STR, 100);
$sql->bindParam(':tracking_page_code',$tracking_page_name,PDO::PARAM_STR, 100);

$sql->execute();
}

?>