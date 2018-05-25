<?php
namespace sugarfishes\corpWechat\api\examples;

use Exception;
use sugarfishes\corpWechat\api\src\CorpAPI;
use sugarfishes\corpWechat\api\src\ServiceCorpAPI;
use sugarfishes\corpWechat\api\src\ServiceProviderAPI;

/*
 * Copyright (C) 2017 All rights reserved.
 *   
 * @File MediaTest.php
 * @Brief 
 * @Author abelzhu, abelzhu@tencent.com, sugarfishes
 * @Version 1.0
 * @Date 2017-12-26
 *
 */
 
$config = require('./config.php');

$api = new CorpAPI($config['CORP_ID'], $config['APP_SECRET']);
try {
    //
    $mediaId = $api->MediaUpload("TestConfig.php", "file");
    echo $mediaId."\n";

    //
    $data = $api->MediaGet($mediaId);
    // var_dump($data);
} catch (Exception $e) { 
    echo $e->getMessage() . "\n";
}
