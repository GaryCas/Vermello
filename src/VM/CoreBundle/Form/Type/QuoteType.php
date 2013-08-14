<?php
namespace VM\CoreBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class QuoteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       $builder->add('project_name', 'text', array(
        	'label' => 'Project Name',
        ));
       
       $builder->add('description', 'textarea', array(
       		'label' => 'Description',
       ));
       
       $builder->add('pages', 'choice', array(
       		'label' => 'How many pages?',
    		'choices'   => array(
    			'a' => 'I don\'t know yet',
        		'b' => '~ 5 pages',
        		'c' => '~ 15 pages',
        		'd' => '~ 25 pages',
    			'e' => '> 20 pages',
   			 )
       ));
       
       $builder->add('logo', 'choice', array(
       		'label' => 'Do you need a logo?',
       		'choices'   => array('y' => 'Yes', 'n' => 'No'),
       		'expanded' => true
       ));
       
       $builder->add('cms', 'choice', array(
       		'label' => 'Do you need a CMS (Content Management System)?',
       		'choices'   => array('y' => 'Yes', 'n' => 'No'),
       		'expanded' => true
       ));
       
       $builder->add('ecommerce', 'choice', array(
       		'label' => 'Are you going to sell online?',
       		'choices'   => array('y' => 'Yes', 'n' => 'No'),
       		'expanded' => true
       ));
       
       $builder->add('due_date', 'choice', array(
       		'label' => 'When do you need this done?',
       		'choices'   => array(
       			'a' => 'I don\'t know yet',
        		'b' => 'As soon as possible, we\'re late!',
        		'c' => 'Within 2 weeks',
        		'd' => 'Within a month',
    			'e' => 'Over a month',
       			
   			 )
       ));
       
       $builder->add('budget', 'choice', array(
       		'label' => 'Your budget?',
       		'choices'   => array(
       				'a' => 'I don\'t know yet',
       				'b' => 'less than 500',
       				'c' => 'less than 1000',
       				'd' => 'less than 1500',
       				'e' => 'Over 2000',
       				
       		)
       ));
       
       $builder->add('domain', 'choice', array(
       		'label' => 'Do you need a domain name?',
       		'choices'   => array('y' => 'Yes', 'n' => 'No'),
       		'expanded' => true
       	));
       
       $builder->add('hosting', 'choice', array(
       		'label' => 'Do you need hosting?',
       		'choices'   => array('y' => 'Yes', 'n' => 'No'),
       		'expanded' => true
       	));
       
       $builder->add('additional_info', 'textarea', array(
       		'label' => 'Feel free to add anything that\'s on your mind.'
       ));
       
       $builder->add('first_name', 'text', array(
       		'label' => 'First Name',
       ));
        
       $builder->add('last_name', 'text', array(
       		'label' => 'Last Name',
       ));
       
       $builder->add('email', 'email', array(
       		'label' => 'Email',
       ));
       
       $builder->add('phone', 'number', array(
       		'label' => 'phone',
       ));
       
       $builder->add('method_contact', 'choice', array(
       		'label' => 'Preferred method of contact?',
       		'choices'   => array('email' => 'Email', 'phone' => 'Phone'),
       		'expanded' => true
       ));
       
    }

    public function getName()
    {
        return 'quote';
    }
}