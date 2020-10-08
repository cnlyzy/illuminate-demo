# illuminate-demo

## 导语
本文将描述原生php整合`illuminate/database`和`illuminate/validation`

## 安装
- composer require illuminate/validation
- composer require illuminate/database

## 使用
复制`extend`文件夹,配置`extend/database/manager.php`为自己的数据库信息
验证器更多语言库[点此查看](https://github.com/overtrue/laravel-lang)

入口处引入
```
use Validators\Verify;
use Illuminate\Database\Capsule\Manager as DB;
```
创建验证器
```
$validator = Verify::make(
    $_GET, [
    "name" => "required|string"
]);
if ($validator->fails()) {
    $err = $validator->errors()->all();
    print_r($err);
}
```
验证器更多使用方法查看[文档](https://learnku.com/docs/laravel/8.x/validation/9374)

---

创建查询构造器
```
$user = DB::table('user')
    ->offset(0)
    ->limit(10)
    ->get();
print_r($user);
```
查询构造器更多使用方法查看[文档](https://learnku.com/docs/laravel/8.x/queries/9401)

