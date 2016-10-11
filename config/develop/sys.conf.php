<?php
/**
 * 本地开发服务器配置文件.
 * Created by PhpStorm.
 * User: lane
 * Date: 14-1-5
 * Time: 下午4:44
 * Blog http://www.lanecn.com
 */
//后台访问域名
define('ADMIN_URL', 'http://localhost:8080/admin.php/');

//域名
define('GAME_DOMAIN', 'localhost:8080');

//域名
define('GAME_DOMAIN_ROOT', 'localhost:8080');

//游戏地址
define('GAME_URL', 'http://' . GAME_DOMAIN . '/');

//队列地址
define('QUEUE_URL', 'http://' . GAME_DOMAIN . '/queue.php');

//storage设置
define('SAE_DOMEN_NAME', 'stor');

//stor地址
define('STOR_URL', 'http://192.168.100.41:8080/stor/');
?>