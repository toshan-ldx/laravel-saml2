<?php

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => config('saml2.routesPrefix'),
    'middleware' => array_merge(['saml2.resolveTenant'], config('saml2.routesMiddleware')),
], function () {
    Route::get('/{uuid}/logout', array(
        'as' => 'saml.logout',
        'uses' => 'Ldx\Saml2\Http\Controllers\Saml2Controller@logout',
    ));

    Route::get('/{uuid}/login', array(
        'as' => 'saml.login',
        'uses' => 'Ldx\Saml2\Http\Controllers\Saml2Controller@login',
    ));

    Route::get('/{uuid}/metadata', array(
        'as' => 'saml.metadata',
        'uses' => 'Ldx\Saml2\Http\Controllers\Saml2Controller@metadata',
    ));

    Route::post('/{uuid}/acs', array(
        'as' => 'saml.acs',
        'uses' => 'Ldx\Saml2\Http\Controllers\Saml2Controller@acs',
    ));

    Route::get('/{uuid}/sls', array(
        'as' => 'saml.sls',
        'uses' => 'Ldx\Saml2\Http\Controllers\Saml2Controller@sls',
    ));
});
