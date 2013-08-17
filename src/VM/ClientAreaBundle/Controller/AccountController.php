<?php

namespace VM\ClientAreaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccountController extends Controller
{
    public function viewProfileAction()
    {

        return $this->render('VMClientAreaBundle:Account:view-profile.html.twig');
    }
    
    public function switchRoleAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$user = $this->get('security.context')->getToken()->getUser();
    	$request = $this->getRequest();
    	
    	$current_role = '';
    	if ($user->hasRole('ROLE_ADMIN')) {
    		$current_role = 'ROLE_ADMIN';
    	} elseif ($user->hasRole('ROLE_DEV')) {
    		$current_role = 'ROLE_DEV';
    	} elseif ($user->hasRole('ROLE_CLIENT')) {
    		$current_role = 'ROLE_CLIENT';
    	}
    	
    	if ($request->isMethod('post')) {
    		$new_role = $request->request->get('role');
    		
    		$user->removeRole($current_role);
    		$user->addRole($new_role);
    		$em->persist($user);
    		$em->flush();
    		
    	} 
    	
    	return $this->redirect($request->headers->get('referer'));
    }
}
