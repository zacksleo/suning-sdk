<h1 align="center"> suning-sdk </h1>

<p align="center"> 苏宁SDK.</p>


## Installing

```shell
$ composer require zacksleo/suning-sdk -vvv
```

## Usage

### 1. 初始化客户端

```php
    $suning = new Suning([
        'key' => 'appkey',
        'secret'=> 'appsecret',
        'debug' => true,
        'file' => __DIR__.'/suning.log',
        'level'      => 'debug',
        'permission' => 0777,
    ]);

```

### 2.1 标准调用方式

```php
    $response = $suning->request([
        'suning.custom.logisticcompany.get' => 'logisticCompany'
    ], [
        'companyName'=>'申通快递',
    ]);
```

### 2.2 简化调用方式

```php
    $response = $suning->request('suning.custom.logisticcompany.get', [
        'companyName'=>'申通快递',
    ]);
```

### 2.3 简化调用方式二

```php
    $response = $suning->request('custom.logisticcompany.get', [
        'companyName'=>'申通快递',
    ]);
```

### 2.4 文艺调用方式

```php
    $response = $suning->custom->logisticcompany->get([
        'companyName'=>'申通快递',
    ]);

```

> 注意：除标准调用方式外，其他调用方式需要确保 [map.php](https://github.com/zacksleo/suning-sdk/blob/master/src/map.php) 文件中存在对应的值。如果没有，欢迎PR.

### 输出格式

```bash
array:1 [
  "sn_body" => array:1 [
    "logisticCompany" => array:2 [
      "expressCompanyName" => "申通快递"
      "expressCompanyCode" => "S01"
    ]
  ]
]

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/zacksleo/suning-sdk/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/zacksleo/suning-sdk/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT