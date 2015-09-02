<?php
namespace JT\CommonBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 * @author Jimmy Tournemaine <jimmy.tournemaine@yahoo.fr>
 */
class HexaColor extends Constraint
{
	public $message = '"%string%" ne correspond pas à une couleur proposée.';
}