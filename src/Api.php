<?php

namespace Zacksleo\SuningSdk;

use Hanson\Foundation\AbstractAPI;
use Hanson\Foundation\Exception\HttpException;

class Api extends AbstractAPI
{
    const USER_AGENT = 'suning-sdk-php';
    const VERSION = 'v1.2';
    const SDK_VERSION = 'suning-sdk-php-beta0.1';
    const SIGN_METHOD = 'md5';

    private $gateway = 'https://open.suning.com/api/http/sopRequest';
    private $sandboxGateway = 'https://openpre.cnsuning.com/api/http/sopRequest';

    private $key;
    private $secret;
    private $inDev = false;
    private $map = [];

    public function __construct($key, $secret)
    {
        $this->key = $key;
        $this->secret = $secret;
        $this->map = include __DIR__.'/map.php';
    }

    /**
     * 设置开发模式
     *
     * @param bool $inDev
     * @return void
     */
    public function setDeveloperMode($inDev)
    {
        $this->inDev = $inDev;
    }

    /**
     * 获取网关地址
     *
     * @return string
     */
    private function getGateway()
    {
        return $this->inDev ? $this->sandboxGateway : $this->gateway;
    }

    /**
     * 发起请求
     *
     * @param string|array $method
     * @param array $params
     * @param array $files
     * @return void
     */
    public function request($method, $params, $files = [])
    {
        if (is_array($method)) {
            $appMethod = $this->autoCompleteAppMethod(key($method));
            $bizName = current($method);
        } elseif (is_string($method)) {
            $appMethod = $this->autoCompleteAppMethod($method);
            if (! isset($this->map[$appMethod])) {
                throw new \InvalidArgumentException("map 文件中未设置 $appMethod 对应的 bizName，请使用 [appMethod=>bizName] 形式传递参数");
            }

            $bizName = $this->map[$appMethod];
        } else {
            throw new \InvalidArgumentException('不支持的参数格式');
        }
        $params = ['sn_request' => ['sn_body' => [
            "{$bizName}" => $params,
        ]]];

        $date = date('Y-m-d H:i:s');
        $signString = $this->signature($appMethod, $date, base64_encode(json_encode($params)));

        $headers = [
            'Content-Type'   => 'text/json; charset=utf-8',
            'AppMethod'      => $appMethod,
            'AppRequestTime' => $date,
            'Format'         => 'json',
            'signInfo'       => $signString,
            'AppKey'         => $this->key,
            'VersionNo'      => self::VERSION,
            'User-Agent'     => self::USER_AGENT,
            'Sdk-Version'    => self::SDK_VERSION,
        ];
        try {
            $http = $this->getHttp();
            $response = $http->request('POST', $this->getGateway(), [
                'headers' => $headers,
                'json' => $params,
            ]);
        } catch (\Exception  $e) {
            throw new HttpException($e->getMessage(), $e->getCode(), $e);
        }

        $res = json_decode((string) $response->getBody(), true);
        if (isset($res['sn_responseContent']['sn_error'])) {
            if ($res['sn_responseContent']['sn_error']['error_code'] == 'biz.handler.data-get:no-result') {
                return [
                    'header' => [
                        'pageTotal'     => 0,
                        'pageNo'        => $params['pageNo'] ?? 1,
                        'totalSize'     => 0,
                        'returnMessage' => '',
                    ],
                    'body' => [],
                ];
            }
            throw new SuningException($res['sn_responseContent']['sn_error']['error_code']);
        }

        return [
            'header' => $res['sn_responseContent']['sn_head'] ?? [
                'pageTotal'     => 1,
                'pageNo'        => 1,
                'totalSize'     => 1,
                'returnMessage' => '',
            ],
            'body' => $res['sn_responseContent']['sn_body'][$bizName],
        ];
    }

    /**
     * 如果没有填写前缀，自动补全 appMethod
     *
     * @param string $appMethod
     * @return string
     */
    private function autoCompleteAppMethod($appMethod)
    {
        if (strpos($appMethod, 'suning.') !== 0) {
            return 'suning.'.$appMethod;
        }

        return $appMethod;
    }

    /**
     * 签名
     *
     * @param string $appMethod
     * @param string $date
     * @param string $base64
     *
     * @return string
     */
    private function signature($appMethod, $date, $base64)
    {
        $params['secret_key'] = $this->secret;
        $params['method'] = $appMethod;
        $params['date'] = date('Y-m-d H:i:s');
        $params['app_key'] = $this->key;
        $params['api_version'] = self::VERSION;
        $params['post_field'] = $base64;

        $signString = '';
        foreach ($params as $k => $v) {
            $signString .= $v;
        }

        return  md5($signString);
    }
}
