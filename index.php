<?php
include_once('vendor/autoload.php');
use xuqingkai\Index;

$result = Index::index();
if(gettype($result)=='array' || gettype($result)=='object'){
    exit(json_encode($result, JSON_UNESCAPED_UNICODE));
}else{
    exit($result);
}
?>
