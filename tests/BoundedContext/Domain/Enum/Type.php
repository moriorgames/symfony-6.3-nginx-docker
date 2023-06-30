<?php

declare(strict_types=1);

namespace Tests\BoundedContext\Domain\Enum;

enum Type: string
{
    case ONE = 'one';
    case TWO = 'two';
}
