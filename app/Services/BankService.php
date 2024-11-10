<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class BankService
{
    public static function transferFunds(int $from, int $to, float $amount)
    {
        return DB::transaction(function () use ($from, $to, $amount) {
            $from = User::findOrFail($from);
            $to = User::findOrFail($to);

            if ($from->balance < $amount) {
                return false;
            }

            $from->update(['balance' => $from->balance - $amount]);
            $to->update(['balance' => $to->balance + $amount]);

            return true;
        });
    }
}
