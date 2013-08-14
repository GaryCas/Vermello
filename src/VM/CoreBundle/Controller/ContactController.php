<?php 
namespace VM\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use VM\CoreBundle\Form\Type\QuoteType;

class ContactController extends Controller
{
	public function quoteRequestAction() {
		
		
		$form = $this->createForm(new QuoteType());
		
		return $this->render('VMCoreBundle:Quote:request.html.twig', array(
			'form' => $form->createView()	
		));
	}
	
}