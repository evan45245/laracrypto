<?php

namespace evan45245\Laracrypto\Bitcoin;

use Illuminate\Support\Facades\Facade;

/**
 * Class BlockchainFacade.
 */
class BlockchainFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'blockchain';
    }
}
