# ColorBundle

The ColorBundle offer utilities to add color fields to your forms.

It's a small utility bundle for the moment but I plan to add a lot of features wich concern colors manipulating in a web development.

## Installation

For the moment, your only possibility is to clone the repository in your Symfony 2 **src** folder.

Add to your **AppKernel**


	class AppKernel extends Kernel
	{
    	public function registerBundles()
    	{
        	$bundles = array(
        			...
        		
        		new JT\ColorBundle\JTColorBundle(),
        	)
        }
    }

## Usage

### Manage Forms

Create your FormType class and use the FormTypeInterface **color**.

	<?php
	namespace AppBundle\Form;

	use Symfony\Component\Form\AbstractType;
	use Symfony\Component\Form\FormBuilderInterface;
	use Symfony\Component\OptionsResolver\OptionsResolverInterface;

	class PostType extends AbstractType
	{
    	/**
	     * @param FormBuilderInterface $builder
    	 * @param array $options
	     */
	    public function buildForm(FormBuilderInterface $builder, array $options)
    	{
	        $builder
	            ->add('color', 'color')
	        ;
    	}
    }

To increase your page loading performance, I let you include the javascript plugin in your view. I'm using asset to get the script in this example.
	
	{% block body %}
		{{ form(form) }}
	{% endblock %}
	
	{% block javascripts %}
		<script src="{{ asset('bundles/jtcolor/js/jscolor.js') }}"></script>
	{% endblock javascripts %}

That's it ! Two step to easily

### Control validation

AppBundle\Entity\Post:
    properties:
        color:
            - HexaColor()