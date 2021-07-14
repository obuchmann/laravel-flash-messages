<?php

namespace Obuchmann\LaravelFlashMessages;

use Illuminate\Support\ServiceProvider;

class FlashMessageServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->app->bind('flash', FlashMessageFactory::class);
    }
}