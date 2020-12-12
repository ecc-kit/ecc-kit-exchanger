<?php

namespace EccKit\Exchanger;

use EccKit\Money\Money;
use EccKit\Money\Currency;

/**
 * class Exchanger.
 */
abstract class Exchanger
{
    /**
     * Exchange.
     *
     * @param Money    $money    Money
     * @param Currency $currency Destination currency
     *
     * @return Money
     */
    public function exchange(Money $money, Currency $currency): Money
    {
        if ($money->getCurrency()->getCode() === $currency->getCode()) {
            
            return clone $money;
        }
        
        return convert($money->getValue(), $money->getCurrency(), $currency);
    }
    
    /**
     * Convert.
     *
     * @param float    $value        Money
     * @param Currency $srcCurrency  Source Currency
     * @param Currency $destCurrency Destination Currency
     *
     * @return Money
     */
    abstract protected function convert(
        float $value,
        Currency $srcCurrency,
        Currency $destCurrency
    ): Money;
}
