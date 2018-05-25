<?php /*
 * Copyright (C) 2017 All rights reserved.
 *   
 * @File AgentTest.php
 * @Brief 
 * @Author abelzhu, abelzhu@tencent.com, sugarfishes
 * @Version 1.0
 * @Date 2017-12-26
 *
 */
namespace sugarfishes\corpWechat\api\examples;

use sugarfishes\corpWechat\api\datastructure\Agent;
use sugarfishes\corpWechat\api\src\CorpAPI;
use sugarfishes\corpWechat\api\src\ServiceCorpAPI;
use sugarfishes\corpWechat\api\src\ServiceProviderAPI;

$config = require('./config.php');

//
$api = new CorpAPI($config['CORP_ID'], $config['APP_SECRET']);

// ------------------------- 应用管理 --------------------------------------
try {
    //
    $agent = new Agent();
    {
        $agent->agentid = $config['APP_ID'];
        $agent->description = "I'm description";
    }
    $api->AgentSet($agent);

    //
    $agent = $api->AgentGet($config['APP_ID']);
    // var_dump($agent);

    //
    $agentList = $api->AgentGetList();
    // var_dump($agentList);

} catch (Exception $e) { 
    echo $e->getMessage() . "\n";
}
