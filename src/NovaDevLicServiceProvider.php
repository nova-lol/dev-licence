<?php

namespace NovaLol\FakeLicense;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;

class NovaFakeLicenceServiceProvider extends ServiceProvider
{
    public function register()
    {
        Config::set('nova.license_key', 'this.is.fake.licence');
        Http::fake(['nova.laravel.com/*' => Http::response(['success' => true], 204, [])]);
    }
}
