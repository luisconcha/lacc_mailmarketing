<?php
/**
 * File: BootstrapAction.php
 * Created by: Luis Alberto Concha Curay.
 * Email: luisconchacuray@gmail.com
 * Language: PHP
 * Date: 26/02/17
 * Time: 20:16
 * Project: lacc_php7
 * Copyright: 2017
 */
namespace LaccEM\Action;

use LaccEM\Service\BootstrapInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class BootstrapAction
{
    /**
     * @var BootstrapInterface
     */
    private $bootstrapInterface;

    public function __construct( BootstrapInterface $bootstrapInterface )
    {
        $this->bootstrapInterface = $bootstrapInterface;
    }

    public function __invoke( ServerRequestInterface $request, ResponseInterface $response, callable $next = null )
    {
        $this->bootstrapInterface->create();

        return $next( $request, $response );
    }
}
