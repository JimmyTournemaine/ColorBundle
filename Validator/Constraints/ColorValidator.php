<?php
namespace JT\ColorBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use JT\ColorBundle\Model\ColorValue;

class ColorValidator extends ConstraintValidator
{
	public function validate($value, Constraint $constraint)
	{
		if(!ColorValue::isColorValue($value))
		{
			$this->context->addViolation($constrint->message, array('%string%' => $value));
		}
	}
}