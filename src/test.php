<?php
namespace Aobo\RongCloud;
require("RongCloudClass.php");

$appKey = '';
$appSecret = '';

$rc = new RongCloudClass($appKey, $appSecret);

var_dump($rc->messageHistory('2016021613'));
