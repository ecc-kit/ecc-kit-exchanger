<?php

namespace EccKit\Exchanger;

use EccKit\Money\Money;
use EccKit\Money\Currency;

/**
 * CurrencyExchanger.
 */
class CurrencyExchanger extends Exchanger
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
     * {@inheritdoc}
     *
     * @param float    $value        Money
     * @param Currency $srcCurrency  Source Currency
     * @param Currency $destCurrency Destination Currency
     *
     * @return Money
     */
    protected function convert(float $value, Currency $srcCurrency, Currency $destCurrency): Money
    {
        /** @todo: convert code */
        
        return new Money(
            $value,
            $destCurrency
        );
    }
}
