<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\BankService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Concurrency;

class BankController extends Controller
{
    public function index()
    {
        $users = User::query()->whereKey([2, 3])->get();

        return view('bank', compact('users'));
    }

    public function transferFunds(Request $request) {
        $amount = $request->amount;
        $from = 1;

        $tasks = [];

        $request->collect('beneficiary')->each(function ($id) use ($from, $amount, &$tasks) {
            $tasks[] = fn() => BankService::transferFunds($from, $id, $amount);
        });

        $response = Concurrency::run($tasks);

        dd($response);
    }
}
