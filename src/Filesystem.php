<?php

namespace Vartruexuan\Yii\Filesystem\Cos;

use Freyo\Flysystem\QcloudCOSv5\Adapter;
use Qcloud\Cos\Client;

class Filesystem extends \creocoder\flysystem\Filesystem
{
    public $region;
    public $appId;
    public $secretId;
    public $secretKey;
    public $token;
    public $timeout = 60;
    public $connect_timeout = 60;
    public $scheme = 'https';
    public $bucket;
    public $encrypt = false;
    public $cdn = '';
    public $cdn_key = '';
    public $read_from_cdn = '';

    public function init()
    {
        parent::init();
    }


    /**
     * 设置适配器
     *
     * @return \League\Flysystem\AdapterInterface|void
     *
     * @date 2023/3/9
     * @author vartruexuan
     */
    protected function prepareAdapter()
    {
        $client = new Client($this->getConfig());
        return new Adapter($client, $this->getConfig());
    }

    /**
     * 配置信息
     *
     * @return array
     *
     * @date 2023/3/9
     * @author vartruexuan
     */
    protected function getConfig()
    {
        return [
            'region' => $this->region,
            'credentials' => [
                'appId' => $this->appId,
                'secretId' => $this->secretId,
                'secretKey' => $this->secretKey,
                'token' => $this->token,
            ],
            'timeout' => $this->timeout,
            'connect_timeout' => $this->connect_timeout,
            'bucket' => $this->bucket,
            'cdn' => $this->cdn,
            'scheme' => $this->scheme,
            'read_from_cdn' => $this->read_from_cdn,
            'cdn_key' => $this->cdn_key,
            'encrypt' => $this->encrypt,
        ];
    }

}