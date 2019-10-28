<?php

require_once '../vendor/autoload.php';

function yun_xin_auto_register($className = '') {
    if (strpos($className, 'YunXin\\') === 0) {
        $path = __DIR__.'/../src/'.str_replace('YunXin\\', '', $className);
        require_once $path.'.php';
    }
}
spl_autoload_register('yun_xin_auto_register');

$appKey = '';
$appSecret = '';

$yunXin = new \YunXin\Entrance($appKey, $appSecret);

try {
    $sendResult = $yunXin->chat()->sendTextMsg('', '', 0, '你好呀');
} catch (\Exception $e) {
    echo '发送消息失败：'. $e->getMessage();
}

var_dump($sendResult);