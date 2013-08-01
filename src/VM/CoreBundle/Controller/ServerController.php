<?php

namespace VM\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ServerController extends Controller
{
    public function loadPageAction($page)
    {
        $template = sprintf("VMCoreBundle:Page:%s.html.twig", $page);    
		
        if (! $this->get('templating')->exists($template))
        	throw new NotFoundHttpException("The specified page does not exist.");

        return $this->render($template);
    }
}
