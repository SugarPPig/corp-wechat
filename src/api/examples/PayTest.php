<?php /*
 * Copyright (C) 2017 All rights reserved.
 *   
 * @File PayTest.php
 * @Brief 
 * @Author abelzhu, abelzhu@tencent.com
 * @Version 1.0
 * @Date 2017-12-26
 *
 */
namespace sugarfishes\corpWechat\api\examples;

use Exception;
use sugarfishes\corpWechat\api\datastructure\SendWorkWxRedpackReq;
use sugarfishes\corpWechat\api\src\CorpAPI;
use sugarfishes\corpWechat\api\src\ServiceCorpAPI;
use sugarfishes\corpWechat\api\src\ServiceProviderAPI;
// 
$config = require('./config.php');
// 
$agentId = $config['APP_ID'];
$api = new CorpAPI($config['CORP_ID'], $config['APP_SECRET']);
 
try { 
    $SendWorkWxRedpackReq = new SendWorkWxRedpackReq();
    {
        $SendWorkWxRedpackReq->nonce_str = "nonce_str";
    }
    $api->SendWorkWxRedpack($SendWorkWxRedpackReq);
} catch (Exception $e) { 
    echo $e->getMessage() . "\n";
}
