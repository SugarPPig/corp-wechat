<?php /*
 * Copyright (C) 2017 All rights reserved.
 *   
 * @File JsApiTest.php
 * @Brief 
 * @Author abelzhu, abelzhu@tencent.com, sugarfishes
 * @Version 1.0
 * @Date 2017-12-26
 *
 */
namespace sugarfishes\corpWechat\api\examples;

use Exception;
use sugarfishes\corpWechat\api\src\CorpAPI;
use sugarfishes\corpWechat\api\src\ServiceCorpAPI;
use sugarfishes\corpWechat\api\src\ServiceProviderAPI;
// 
$config = require('./config.php');
// 
$api = new CorpAPI($config['CORP_ID'], $config['APP_SECRET']);
 
try {
    //
    $ticket = $api->TicketGet();
    echo $ticket . "\n";

    //
    $ticket = $api->JsApiTicketGet();
    echo $ticket . "\n";
} catch (Exception $e) { 
    echo $e->getMessage() . "\n";
}

