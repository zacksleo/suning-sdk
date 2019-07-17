<h1 align="center"> suning-sdk </h1>

<p align="center"> 苏宁SDK.</p>


## Installing

```shell
$ composer require zacksleo/suning-sdk -vvv
```

## Usage

### 1. 初始化客户端

```php

    use Zacksleo\SuningSdk\Suning;

    $suning = new Suning([
        'key'        => 'key',
        'secret'     => 'secret',
        'debug'      => false,
        'file'       => __DIR__.'/suning.log',
        'level'      => 'error',
        'permission' => 0777,
    ]);

```

### 2.1 标准调用方式

```php
    $response = $suning->request([
        'suning.custom.logisticcompany.get' => 'logisticCompany'
    ], [
        'companyName' => '申通快递',
    ]);
```

> 其中，第一个参数数组中，key 为 ApiMethodName, value 为 BizName。第二个参数对应[官方文档请求示例中](http://open.suning.com/ospos/apipage/toApiListMenu.do) sn_body 的值

### 2.2 简化调用方式

```php
    $response = $suning->request('suning.custom.logisticcompany.get', [
        'companyName' => '申通快递',
    ]);
```

### 2.3 简化调用方式二

```php
    $response = $suning->request('custom.logisticcompany.get', [
        'companyName' => '申通快递',
    ]);
```

### 2.4 文艺调用方式

```php
    $response = $suning->custom->logisticcompany->get([
        'companyName' => '申通快递',
    ]);

```

> 注意：除标准调用方式外，其他调用方式需要确保 [map.php](https://github.com/zacksleo/suning-sdk/blob/master/src/map.php) 文件中存在对应的值。如果没有，欢迎PR.

### 输出格式

返回值取出的是 sn_body 及其值

```bash
array:1 [
  "sn_body" => array:1 [
    "logisticCompany" => array:2 [
      "expressCompanyName" => "申通快递"
      "expressCompanyCode" => "S01"
    ]
  ]
]

```

### 异常处理

 总共会抛出两种错误

```php

    try {
        $response = $suning->request('custom.logisticcompany.get', [
            'companyName' => '申通快递',
        ]);
    } catch (\Zacksleo\SuningSdk\SuningException $exception) {
        //苏宁返回错误
        $exception->getMessage();
    } catch (\Hanson\Foundation\Exception\HttpException $exception) {
        //Http 请求发生错误
        $exception->getMessage();
    }

```

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/zacksleo/suning-sdk/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/zacksleo/suning-sdk/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT