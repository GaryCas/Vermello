<?php 
namespace VM\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
	public function quoteRequestAction() {
		
		 return $this->render('VMCoreBundle:Quote:request.html.twig');
	}
	
}