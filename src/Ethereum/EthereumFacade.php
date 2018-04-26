<?php

namespace evan45245\Laracrypto\Ethereum;

use Illuminate\Support\Facades\Facade;

/**
 * Class EthereumFacade.
 */
class EthereumFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ethereum';
    }
}
