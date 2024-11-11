<?php

use App\Models\User;
use App\Services\BankService;
use Illuminate\Support\Facades\Concurrency;
use Illuminate\Support\Facades\Route;

Route::view('/', 'bank');

Route::post('/transfer-funds', function () {
    $fromAccount = 1;
    $toAccountOne = 2;
    $toAccountTwo = 3;
    $amount = 500;

    $closures = [];

    for ($i = 0; $i < 2; $i++) {
        if ($i === 0) {
            $closures[] = fn () => BankService::transferFunds($fromAccount, $toAccountOne, $amount);
        } else {
            $closures[] = fn () => BankService::transferFunds($fromAccount, $toAccountTwo, $amount);
        }
    }

    $res = Concurrency::run($closures);

    dump($res);

    $user1 = User::query()->find($fromAccount);
    $user2 = User::query()->find($toAccountOne);
    $user3 = User::query()->find($toAccountTwo);

    dump($user1->balance, $user2->balance, $user3->balance);
})->name('transfer-funds');
