<?php

namespace App\Utils;

class DocumentExistenceChecker
{
    public static function checkForExistence($model, array $condition, ?int $truthyIntParameter)
    {
        $result = $model::where($condition)
            ->when($truthyIntParameter, fn ($query, $truthyIntParameter) => $query->whereNot('id', $truthyIntParameter))
            ->exists();

        return $result;
    }
}
