<?php
include "TopSdk.php";
date_default_timezone_set('Asia/Shanghai');

$c = new DingTalkClient(DingTalkConstant::$CALL_TYPE_OAPI, DingTalkConstant::$METHOD_GET , DingTalkConstant::$FORMAT_JSON);
$req = new OapiGettokenRequest;
$req->setAppkey('appKey');
$req->setAppsecret('appSecret');
$resp=$c->execute($req, "accessToken","https://oapi.dingtalk.com/gettoken");
var_dump($resp)

?>