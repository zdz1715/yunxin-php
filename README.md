# netease-im
# 安装
推荐使用composer：`composer require zdz/yunxin-php`

# 使用
### 创建实例
```
$appKey = '****'; // 网易云信分配的账号
$appSecret = '****'; // 网易云信分配的密钥
$entrance = new \YunXin\Entrance($appKey, $appSecret);
```


### 消息功能  
```
# 
# 文本消息
$entrance->chat()->sendTextMsg($from, $to, $ope, $text, $notReuireParams);

# 图片消息 会根据url获取图片的参数，也可以自定义参数
$entrance->chat()->sendPictureMsg($from, $to, $ope, $url, $notReuireParams);

```
