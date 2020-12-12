<?php

namespace EccKit\Exchanger;

use EccKit\Money\Money;
use EccKit\Money\Currency;

/**
 * Interface Exchanger.
 */
interface Exchanger
{
    /**
     * Exchange.
     *
     * @param Money    $money    Money
     * @param Currency $currency Destination currency
     *
     * @return Money
     */
    public function exchange(Money $money, Currency $currency): Money;
}
