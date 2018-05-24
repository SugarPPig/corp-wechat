<?php /*
 * Copyright (C) 2017 All rights reserved.
 *   
 * @File MenuTest.php
 * @Brief 
 * @Author abelzhu, abelzhu@tencent.com
 * @Version 1.0
 * @Date 2017-12-26
 *
 */
namespace sugarfishes\corpWechat\api\examples;

use Exception;
use sugarfishes\corpWechat\api\datastructure\Menu;
use sugarfishes\corpWechat\api\datastructure\PicWeixinMenu;
use sugarfishes\corpWechat\api\datastructure\ScanCodePushMenu;
use sugarfishes\corpWechat\api\datastructure\SubMenu;
use sugarfishes\corpWechat\api\datastructure\viewMenu;
use sugarfishes\corpWechat\api\src\CorpAPI;
use sugarfishes\corpWechat\api\src\ServiceCorpAPI;
use sugarfishes\corpWechat\api\src\ServiceProviderAPI;

$config = require('./config.php');
// 
$agentId = $config['APP_ID'];
$api = new CorpAPI($config['CORP_ID'], $config['APP_SECRET']);

try { 
    //
    $subMenu = new SubMenu(
        "subMenu_1", 
        array(
            new viewMenu("viewMenu_1", "www.qq.com"), 
            new viewMenu("viewMenu_2", "www.baidu.com")
        )
    );
    $scanCodePushMenu = new ScanCodePushMenu(
        "ScanCodePushMenu", 
        null, 
        array(
            new viewMenu("viewMenu_3", "www.qq.com"), 
            new PicWeixinMenu( "PicWeixinMenu", "keykeykey", null),
        )
    );

    $menu = new Menu(
        array(
            $subMenu,
            $scanCodePushMenu
        )
    );
    $api->MenuCreate($agentId, $menu);

    //
    $menu = $api->MenuGet($agentId);
    // var_dump($menu);

    //
    $api->MenuDelete($agentId);

} catch (Exception $e) { 
    echo $e->getMessage() . "\n";
}

