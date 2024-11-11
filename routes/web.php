<?php

use App\Models\User;
use App\Services\BankService;
use Illuminate\Support\Facades\Concurrency;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $fromAccount = 1;
    $toAccountOne = 2;
    $toAccountTwo = 3;
    $amount = 500;

    $res = Concurrency::run([
        fn () => BankService::transferFunds($fromAccount, $toAccountOne, $amount),
        fn () => BankService::transferFunds($fromAccount, $toAccountTwo, $amount),
    ]);

    dump($res);

    $user1 = User::query()->find($fromAccount);
    $user2 = User::query()->find($toAccountOne);
    $user3 = User::query()->find($toAccountTwo);

    dump($user1->balance, $user2->balance, $user3->balance);
});

Route::view('/bank', 'bank');
