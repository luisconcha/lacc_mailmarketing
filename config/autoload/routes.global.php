<?php
return [
  'dependencies' => [
    'invokables' => [
      Zend\Expressive\Router\RouterInterface::class => Zend\Expressive\Router\AuraRouter::class,
      LaccEM\Action\PingAction::class               => LaccEM\Action\PingAction::class,
    ],
    'factories'  => [
      LaccEM\Action\HomePageAction::class  => LaccEM\Action\HomePageFactory::class,
      LaccEM\Action\TestePageAction::class => LaccEM\Action\TestePageFactory::class,
    ],
  ],
  'routes'       => [
    [
      'name'            => 'home',
      'path'            => '/',
      'middleware'      => LaccEM\Action\HomePageAction::class,
      'allowed_methods' => [ 'GET' ],
    ],
    [
      'name'            => 'api.ping',
      'path'            => '/api/ping',
      'middleware'      => LaccEM\Action\PingAction::class,
      'allowed_methods' => [ 'GET' ],
    ],
    [
      'name'            => 'teste',
      'path'            => '/teste',
      'middleware'      => LaccEM\Action\TestePageAction::class,
      'allowed_methods' => [ 'GET' ],
    ],
  ],
];
