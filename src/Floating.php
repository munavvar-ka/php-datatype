<?php

namespace Asmthry\PhpDatatype;

use Asmthry\PhpDatatype\Traits\NumericOperations;

final class Floating
{
    use NumericOperations;

    /**
     * Store float value to perform continuous operation.
     *
     * @param float $value - Store float value
     */
    public function __construct(public float $value = 0)
    {
        $this->decimals(5);
    }
}
