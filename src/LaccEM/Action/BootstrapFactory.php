<?php
namespace LaccEM\Action;

use Interop\Container\ContainerInterface;
use LaccEM\Infrastructure\Bootstrap;

class BootstrapFactory
{

    public function __invoke( ContainerInterface $container )
    {
        $bootstrap = new Bootstrap();
        
        return new BootstrapAction( $bootstrap );
    }
}
