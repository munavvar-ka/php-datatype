<?php

namespace Munavvar\PhpDatatype;

use Munavvar\PhpDatatype\Traits\NumericOperations;

final class Integer
{
    use NumericOperations;

    /**
     * Store int value to perform continuous operation.
     *
     * @param int $value - Store integer value
     */
    public function __construct(public int $value = 0)
    {
    }
}
