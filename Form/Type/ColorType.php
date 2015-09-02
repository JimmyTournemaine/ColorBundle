<?php
namespace JT\ColorBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ColorType extends AbstractType
{
	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
				'max_length' => 7,
				'attr' => array(
						'class' => 'color',
						'placeholder' => '#FFFFFF'
				)
		));
	}
	
	public function getParent(){
		return 'text';
	}
	
	public function getName(){
		return 'color';
	}
}