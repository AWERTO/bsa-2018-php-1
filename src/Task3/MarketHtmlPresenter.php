<?php declare(strict_types=1);

namespace Cryptocurrency\Task3;

use Cryptocurrency\Task1\CoinMarket;

class MarketHtmlPresenter
{
    private $currencies;
    
    public function __construct(array $currencies)
    {
        $this->currencies = $currencies;
    }
    
    public function present(CoinMarket $market): string
    {
        // @todo
        return '';
    }
}
