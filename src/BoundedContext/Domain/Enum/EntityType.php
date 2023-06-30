<?php

declare(strict_types=1);

namespace App\BoundedContext\Domain\Enum;

enum EntityType: string
{
    case ONE = 'one';
    case TWO = 'two';
}
