<?php

require_once '../vendor/autoload.php';

function yun_xin_auto_register($className = '') {
    if (strpos($className, 'YunXin\\') === 0) {
        $path = __DIR__.'/../src/'.str_replace('YunXin\\', '', $className);
        require_once $path.'.php';
    }
}
spl_autoload_register('yun_xin_auto_register');

$appKey = '5a9adb4b4a278d0b1f93263936ecf737';
$appSecret = '576cff51d7c9';

$yunXin = new \YunXin\Entrance($appKey, $appSecret);

// 发送文本消息
//try {
//    $sendResult = $yunXin->chat()->sendTextMsg('1', '2', 0, '你好呀', [
//        'ext'   => json_encode([
//        ]),
//    ]);
//} catch (\Exception $e) {
//    echo '发送消息失败：'. $e->getMessage();
//}
//

try {
    $sendResult = $yunXin->chat()->sendPictureMsg('1', '2', 0, '',
        [
            'ext'   => json_encode([

            ])
        ]);
} catch (\Exception $e) {
    echo '发送消息失败：'. $e->getMessage();
}

var_dump($sendResult);