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
namespace LaccEM\Action;

use Doctrine\ORM\EntityManager;
use LaccEM\Entity\Category;
use LaccEM\Entity\Client;
use LaccEM\Entity\Address;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\HtmlResponse;
use Zend\Expressive\Template;

class TestePageAction
{
    private $template;

    /**
     * @var EntityManager
     */
    private $manager;

    public function __construct( EntityManager $manager, Template\TemplateRendererInterface $template = null )
    {
        $this->manager  = $manager;
        $this->template = $template;
    }

    public function __invoke( ServerRequestInterface $request, ResponseInterface $response, callable $next = null )
    {
        $category = new Category();
        $category->setName( 'Category 01' );
        $this->manager->persist( $category );
        $this->manager->flush();
        $categories = $this->manager->getRepository( Category::class )->findAll();
        //
        $client = new Client();
        $client->setName( 'Luis Alberto Concha' )
          ->setCpf( '12345678909' )
          ->setEmail( 'luvett11222@gmail.com' );
        $this->manager->persist( $client );
        $this->manager->flush();
        //
        if ( $client->getId() ) {
            $address = new Address();
            $address->setCep( '45124578' )
              ->setAddress( 'Av Sem número 13' )
              ->setCity( 'Outra cidade' )
              ->setState( 'Outro Estado' )
              ->setClient( $client );
            $this->manager->persist( $address );
            $this->manager->flush();
        }
        //
        $clients = $this->manager->getRepository( Client::class )->findAll();
        $address = $this->manager->getRepository( Address::class )->findAll();
        
        return new HtmlResponse( $this->template->render( "app::teste",
          [
            'categories'  => $categories,
            'clients'     => $clients,
            'addressList' => $address,
          ]
        ) );
    }
}
