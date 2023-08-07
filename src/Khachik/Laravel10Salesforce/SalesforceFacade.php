<?php namespace Khachik\Laravel0Salesforce;

use Illuminate\Support\Facades\Facade;

/**
 * Class SalesforceFacade
 * @package  Khachik\Laravel0Salesforce
 *
 * Facade for the Salesforce service
 */
class SalesforceFacade extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'salesforce';
    }
}
