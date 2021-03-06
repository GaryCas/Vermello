<?php
namespace VM\CoreBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\HttpFoundation\Request;

class MenuBuilder
{
    private $factory;

    /**
     * @param FactoryInterface $factory,
     * @param Request $request
     */
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function createMainMenu(Request $request)
    {
        $menu = $this->factory->createItem('main');
		
        $menu->setCurrentUri($request->getRequestUri());
        
        $menu->addChild('our company', array('route' => 'homepage'));
        
        $menu->addChild('portfolio', array('route' => 'static',
        		'routeParameters' => array('page' => '#')));
        
        $menu->addChild('products & services', array('route' => 'static', //Toby fix itttt!!
        		'routeParameters' => array('page' => '#'))); // Toby fix ittt. Je ne sais pas! 
        
        $menu->addChild('quote request', array('route' => 'quote_request'));
        
        $menu->addChild('client area', array('route' => 'client_area_dashboard'))
        		->setAttribute('class', 'client_area');

        return $menu;
    }
}