<h1 align="center"> suning-sdk </h1>

<p align="center"> 苏宁开放平台 SDK</p>


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
    'log' => [
        'file'       => __DIR__.'/suning.log',
        'level'      => 'error',
        'permission' => 0777,
    ]
]);

```

### 2.1 链式调用方式

> 该方式支持类型提示和自动补全

```php
$response = $suning->custom->logisticcompany->get(['companyName' => '申通快递',]);
```

### 2.2 标准调用方式

```php
$response = $suning->request([
    'suning.custom.logisticcompany.get' => 'logisticCompany'
], [
    'companyName' => '申通快递',
]);
```

> 第一个参数如果是数组，key 为 ApiMethodName, value 为 BizName。第二个参数对应[官方文档请求示例中](http://open.suning.com/ospos/apipage/toApiListMenu.do) 请求参数的值

以上调用可省略为

```php
$response = $suning->request('suning.custom.logisticcompany.get', [ 'companyName' => '申通快递' ]);
```

 或

```php
$response = $suning->request('custom.logisticcompany.get', [ 'companyName' => '申通快递', ]);
```

> 注意：除标准调用方式外，其他调用方式需要确保 [map.php](https://github.com/zacksleo/suning-sdk/blob/master/src/map.php) 文件中存在对应的值。如果没有，欢迎PR.

### 输出格式

返回值取出的是 sn_header 及 sn_body, 如果不存在 sn_header， 给给予默认值

```bash
array:2 [
  "header" => array:4 [
    "pageTotal" => 1
    "pageNo" => 1
    "totalSize" => 1
    "returnMessage" => ""
  ]
  "body" => array:2 [
    "expressCompanyName" => "申通快递"
    "expressCompanyCode" => "S01"
  ]
]

```

### 异常处理

```php
try {
    $response = $suning->custom->logisticcompany->get([
        'companyName' => '申通快递',
    ]);
} catch (\Exception $exception) {
    var_dump($exception->getMessage());
}
```

## 命令行工具

### 生成 map.php 文件

```bash
php ./bin/suning map:generate
```

### 生成 fake:generate 用的 map-fake.php 文件

```bash
php ./bin/suning map:generate --fake
```

### 生成用于代码补全提示的类

```bash
php ./bin/suning fake:generate
```

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/zacksleo/suning-sdk/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/zacksleo/suning-sdk/issues).
3. Contribute new features or update the wiki.

_The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable._

## License

MIT