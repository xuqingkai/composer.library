<?php
include_once('vendor/autoload.php');
use app\Index;

$result = Index::index();
exit(json_encode($result));
?>
