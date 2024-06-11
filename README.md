# composer.vendor

- 自动载入本地文件：src/app目录下的所有文件都归到app命名空间下
```
"autoload": {
    "psr-4": {
        "app\\": "src/app"
    }
}
```

- 引入auto_loader
```
include_once('vendor/autoload.php');
```

- 调用代码，现在就可以看到效果了
```
use app\Index;
$result = Index::index();
exit($result);
```
