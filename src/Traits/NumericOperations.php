<?php

namespace Munavvar\PhpDatatype\Traits;

use Munavvar\PhpDatatype\Exceptions\UnchangeableException;

trait NumericOperations
{
    /**
     * Handle number format operations
     *
     * @var array $format - Number format.
     */
    protected array $format = [
        'decimals' => 0,
        'separator' => '.',
        'thousands' => ','
    ];

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
     * Subtract Operation
     *
     * @param int|float $value - Pass value that you want to subtract
     * @return object $this;
     */
    public function sub(int|float $value)
    {
        $this->value -= $value;
        return $this;
    }

    /**
     * Multiplication Operation
     *
     * @param int|float $value - Pass value that you want to multiply
     * @return object $this;
     */
    public function mul(int|float $value)
    {
        $this->value *= $value;
        return $this;
    }

    /**
     * Division Operation
     *
     * @param int|float $value - Pass value that you want to divide
     * @return object $this;
     */
    public function div(int|float $value)
    {
        $this->value /= $value;
        return $this;
    }

    /**
     * Set decimals point digits
     *
     * @param int $decimals - Pass value that you want to divide
     * @return object $this;
     */
    public function decimals(int $decimals)
    {
        if (gettype($this->value) === 'integer') {
            throw new UnchangeableException();
        }
        $this->format['decimals'] = $decimals;
        return $this;
    }

    /**
     * Convert data property into string
     */
    public function __toString()
    {
        return number_format(
            $this->value,
            $this->format['decimals'],
            $this->format['separator'],
            $this->format['thousands']
        );
    }
}
