<div style="text-align: center"> <h1>yii-filesystem-cos</h1> </div>  

<a href="https://packagist.org/packages/vartruexuan/yii-filesystem-cos" rel="nofollow"><img src="https://badgen.net/github/release/vartruexuan/yii-filesystem-cos" alt="Latest Version" data-canonical-src="https://badgen.net/github/release/vartruexuan/yii-filesystem-cos" style="max-width: 100%;"></a>
<a href="https://www.php.net" rel="nofollow"><img src="https://img.shields.io/badge/php-%3E=7.4-brightgreen.svg?maxAge=2592000" alt="Php Version" data-canonical-src="https://img.shields.io/badge/php-%3E=7.4-brightgreen.svg?maxAge=2592000" style="max-width: 100%;"></a>

# 概述
[creocoder/yii2-flysystem](https://github.com/creocoder/yii2-flysystem)

# 安装

```shell
composer require vartruexuan/yii-filesystem-cos
```

# 使用

## 配置组件

```php
// 加入配置组件
'components' => [
    'cos' => [
        'class' => 'Vartruexuan\Yii2\Filesystem\Cos\Filesystem',
        // 配置
        'region' => 'gz',
        'appId' => '1272757004',
        'secretId' => 'AKIDd5HCSPDanlU1ILnzwc2sSmpcIqTY',
        'secretKey' => '58kxufPxEiiSWIbeuUqxsYzDB3gAPVLwI',
        'token' => null,
        'timeout' => 60,
        'connect_timeout' => 60,
        'bucket' => 'bucket-1272757004',
        'cdn' => 'https://bucket-1272757004.file.myqcloud.com',
        'scheme' => 'https',
        'read_from_cdn' => false,
        'cdn_key' => '',
        'encrypt' => false,
    ],
],
```
## 使用
```php   
bool Yii::$app->cos->->write('file.md', 'contents');
bool Yii::$app->cos->->writeStream('file.md', fopen('path/to/your/local/file.jpg', 'r'));
bool Yii::$app->cos->->update('file.md', 'new contents');
bool Yii::$app->cos->->updateStram('file.md', fopen('path/to/your/local/file.jpg', 'r'));
bool Yii::$app->cos->->rename('foo.md', 'bar.md');
bool Yii::$app->cos->->copy('foo.md', 'foo2.md');
bool Yii::$app->cos->->delete('file.md');
bool Yii::$app->cos->->has('file.md');
string|false Yii::$app->cos->->read('file.md');
array Yii::$app->cos->->listContents();
array Yii::$app->cos->->getMetadata('file.md');
int Yii::$app->cos->->getSize('file.md');
string Yii::$app->cos->->getUrl('file.md'); 
string Yii::$app->cos->->getTemporaryUrl('file.md', date_create('2018-12-31 18:12:31')); 
string Yii::$app->cos->->getMimetype('file.md');
int Yii::$app->cos->->getTimestamp('file.md');
string Yii::$app->cos->->getVisibility('file.md');
bool Yii::$app->cos->->setVisibility('file.md', 'public'); //or 'private', 'default'
// ...
``` 
[详细文档](https://flysystem.thephpleague.com/api/)
