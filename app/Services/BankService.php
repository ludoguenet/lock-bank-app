<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class BankService
{
    public function demo($var)
    {
        return $var;
    }

    public static function sendMoney(string $from, string $to, float $amount)
    {
        return DB::transaction(function () use ($from, $to, $amount) {
            $from = User::lockForUpdate()->find($from);
            $to = User::lockForUpdate()->find($to);

            if ($from->balance < $amount) {
                return false;
            }

            $from->update(['balance' => $from->balance - $amount]);
            $to->update(['balance' => $to->balance + $amount]);

            return true;
        });
    }
}
