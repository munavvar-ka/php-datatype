<?php

namespace Asmthry\PhpDatatype\Traits;

trait NumericOperations
{
    /**
     * Addition Operation
     *
     * @param int|float $value - Pass value to add with previous value
     * @return object $this;
     */
    public function add(int|float $value)
    {
        $this->value += $value;
        return $this;
    }

    /**
     * Convert data property into string
     */
    public function __toString()
    {
        return $this->value;
    }
}
