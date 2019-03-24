<?php

namespace Gloudemans\Shoppingcart;

use Illuminate\Session\SessionManager;
use Illuminate\Support\ServiceProvider;
use Gloudemans\Shoppingcart\Cart;

class ServicesProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register($container)
    {
        $container['cart'] = function ($c) {
            return new Cart($c);
        }
    }
}
