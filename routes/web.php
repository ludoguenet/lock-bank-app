<?php

use App\Models\User;
use App\Services\BankService;
use Illuminate\Support\Facades\Concurrency;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $res = Concurrency::run([
        fn () => BankService::sendMoney(1, 2, 100),
        fn () => BankService::sendMoney(1, 3, 100),
    ]);

    dump($res);

    $user1 = User::query()->find(1);
    $user2 = User::query()->find(2);
    $user3 = User::query()->find(3);

    dump($user1->balance, $user2->balance, $user3->balance);
});
