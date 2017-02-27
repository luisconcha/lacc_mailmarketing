<?php
/**
 * File: Bootstrap.php
 * Created by: Luis Alberto Concha Curay.
 * Email: luisconchacuray@gmail.com
 * Language: PHP
 * Date: 27/02/17
 * Time: 13:30
 * Project: lacc_php7
 * Copyright: 2017
 */
namespace LaccEM\Infrastructure;

use LaccEM\Service\BootstrapInterface;

class Bootstrap implements BootstrapInterface
{
    public function create()
    {
        require __DIR__ . '/config/doctrine.php';
    }

}