<?php

use Validators\Verify;
use Illuminate\Database\Capsule\Manager as DB;

require_once 'vendor/autoload.php';
require_once 'extend/database/manager.php';
require_once 'extend/Validators/Verify.php';

$validator = Verify::make(
    $_GET, [
    "name" => "required|string"
]);
if ($validator->fails()) {
    $err = $validator->errors()->all();
    print_r($err);
}

$user = DB::table('user')
    ->offset(0)
    ->limit(10)
    ->get();
print_r($user);

