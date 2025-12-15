<?php

namespace App\Utils;
use Illuminate\Support\Facades\DB;

class TransactionUtil {
    public static function transact($validations = null, callable $body) {
        if($validations) $validations->validated();

        try {
            return DB::transaction(function() use ($body) {
                return $body();
            });
        } catch (\Exception $e) {
            return response()->json(['message' => 'Transaction failed: ' . $e->getMessage()], 500);
        }
    }
}
