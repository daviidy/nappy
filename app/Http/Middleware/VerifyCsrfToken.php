<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
      'https://secure.cinetpay.com/notifypay',
      'https://secure.cinetpay.com/*',
      'https://cinetpay.com/*',
      'voting/*'
    ];
}
