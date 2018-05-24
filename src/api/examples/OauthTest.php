<?php /*
 * Copyright (C) 2017 All rights reserved.
 *   
 * @File OauthTest.php
 * @Brief 
 * @Author abelzhu, abelzhu@tencent.com
 * @Version 1.0
 * @Date 2017-12-26
 *
 */
namespace sugarfishes\corpWechat\api\examples;

use Exception;
use sugarfishes\corpWechat\api\src\CorpAPI;
use sugarfishes\corpWechat\api\src\ServiceCorpAPI;
use sugarfishes\corpWechat\api\src\ServiceProviderAPI;

$config = require('./config.php');
// 
$agentId = $config['APP_ID'];
$api = new CorpAPI($config['CORP_ID'], $config['APP_SECRET']);

try {
    $UserInfoByCode = $api->GetUserInfoByCode("IPzWnFmIQVf2wJFlJrln9-P-wqu7jeQsKyUKol1TWeU"); 
    // var_dump($UserInfoByCode);

    $userDetailByUserTicket = $api->GetUserDetailByUserTicket($UserInfoByCode->user_ticket); 
    // var_dump($userDetailByUserTicket);

} catch (Exception $e) { 
    echo $e->getMessage() . "\n";
}
