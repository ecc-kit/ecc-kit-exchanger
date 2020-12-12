<?php

namespace EccKit\Exchanger;

use EccKit\Money\Money;
use EccKit\Money\Currency;

/**
 * ExchangerDefault.
 */
class ExchangerDefault
{
    /** @var Currency Base Currency */
    protected Currency $baseCurrency;
    
    /**
     * ExchangerDefault constructor.
     *
     * @param Currency $baseCurrency
     */
    public function __construct(
        Currency $baseCurrency
    ) {
        $this->baseCurrency = $baseCurrency;
    }
    
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
     * @param float         $value
     * @param Currency      $srcCurrency
     * @param null|Currency $destCurrency
     *
     * @return Money
     */
    protected function convert(float $value, Currency $srcCurrency, ?Currency $destCurrency = null): Money
    {
        $destCurrency = $destCurrency ?? $this->baseCurrency;
        /** @todo: convert code */
        return new Money(
            $value,
            $destCurrency
        );
    }
}
