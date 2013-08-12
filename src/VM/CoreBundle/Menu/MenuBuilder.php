<?php
namespace VM\CoreBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\HttpFoundation\Request;

class MenuBuilder
{
    private $factory;

    /**
     * @param FactoryInterface $factory
     */
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function createMainMenu(Request $request)
    {
        $menu = $this->factory->createItem('main');

        $menu->addChild('our company', array('route' => 'static',
        									 'routeParameters' => array('page' => 'homepage')));
        
        $menu->addChild('portfolio', array('route' => 'static',
        		'routeParameters' => array('page' => '#')));
        
        $menu->addChild('products & services', array('route' => 'static',
        		'routeParameters' => array('page' => '#')));
        
        $menu->addChild('quote request', array('route' => 'static',
        		'routeParameters' => array('page' => 'quote_request')));
        
        $menu->addChild('client area', array('route' => 'static',
        		'routeParameters' => array('page' => '#')));

        return $menu;
    }
}