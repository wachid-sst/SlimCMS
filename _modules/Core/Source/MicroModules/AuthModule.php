<?php

namespace CoreModule\Source\MicroModules;

use App\Source\AModule;

class AuthModule extends AModule
{
    const MODULE_NAME = 'auth';

    public function registerDi()
    {
    }

    public function registerRoute()
    {
        $this->app->group('/auth', function () {
            $this->get('/login', 'App\Controllers\Admin\AuthController:login')->setName('login');
            $this->post('/login', 'App\Controllers\Admin\AuthController:doLogin')->setName('doLogin');
            $this->get('/logout', 'App\Controllers\Admin\AuthController:logout')->setName('logout');
        });
    }
}
