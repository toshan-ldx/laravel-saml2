<?php

namespace Ldx\Saml2\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Saml2Auth
 *
 * @method static \Ldx\Saml2\Models\Tenant|null getTenant()
 *
 * @package Ldx\Saml2\Facades
 */
class Auth extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Ldx\Saml2\Auth';
    }
}