<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class IncentiveStatus extends Enum
{
    const NOT_CONFIRM = 1;
    const APPROVED = 2;
    const REFUSED = 3;

    public static function getDescription($value): string
    {
        switch ($value) {
            case self::NOT_CONFIRM:
                return '未対応';
                brake;
            case self::APPROVED:
                return '承認';
                brake;
            case self::REFUSED:
                return '非承認';
                brake;
        }
    }
}
