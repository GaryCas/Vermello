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
       		'label' => 'What is it about?',
       ));
       
       $builder->add('pages', 'choice', array(
       		'label' => 'How many pages?',
    		'choices'   => array(
        		'a' => '~ 5 pages',
        		'b' => '~ 15 pages',
        		'c' => '~ 25 pages',
    			'd' => 'Over 20 pages',
    			'e' => 'I don\'t know yet'
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
        		'a' => 'As soon as possible, we\'re late!',
        		'b' => 'Within 2 weeks',
        		'c' => 'Within a month',
    			'd' => 'Over a month',
       			'e' => 'I don\'t know yet'
   			 )
       ));
       
       $builder->add('budget', 'choice', array(
       		'label' => 'Your budget?',
       		'choices'   => array(
       				'a' => 'less than 500',
       				'b' => 'less than 1000',
       				'c' => 'less than 1500',
       				'd' => 'Over 2000',
       				'e' => 'I don\'t know yet'
       		)
       ));
       
       $builder->add('domain', 'choice', array(
       		'label' => 'Do you need a domain?',
       		'choices'   => array('y' => 'Yes', 'n' => 'No'),
       		'expanded' => true
       	));
       
       $builder->add('hosting', 'choice', array(
       		'label' => 'Do you need hosting?',
       		'choices'   => array('y' => 'Yes', 'n' => 'No'),
       		'expanded' => true
       	));
       
       $builder->add('additional_info', 'textarea', array(
       		'label' => 'Feel free to add anything that is on your mind.'
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