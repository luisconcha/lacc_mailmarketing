<?php
/**
 * File: TestePageAction.php
 * Created by: Luis Alberto Concha Curay.
 * Email: luisconchacuray@gmail.com
 * Language: PHP
 * Date: 26/02/17
 * Time: 20:16
 * Project: lacc_php7
 * Copyright: 2017
 */
namespace App\Action;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Expressive\Template;

class TestePageAction
{
    private $template;

    public function __construct( Template\TemplateRendererInterface $template = null )
    {
        $this->template = $template;
    }

    public function __invoke( ServerRequestInterface $request, ResponseInterface $response, callable $next = null )
    {
        return new HtmlResponse( $this->template->render( "app::teste",
          [ 'data' => 'Minha primeira aplicação' ] ) );
    }
}
