<?php

namespace FOS\MessageBundle\Validator;

use FOS\MessageBundle\Security\ParticipantProviderInterface;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class SelfRecipientValidator extends ConstraintValidator
{
    /**
     * @var ParticipantProviderInterface
     */
    protected $participantProvider;

    public function __construct(ParticipantProviderInterface $participantProvider)
    {
        $this->participantProvider = $participantProvider;
    }

    /**
     * Indicates whether the constraint is valid.
     *
     * @param object $recipient
     */
    public function validate($recipient, Constraint $constraint)
    {
        if ($recipient === $this->participantProvider->getAuthenticatedParticipant())
        {
            $this->context->addViolation($constraint->message);
        }
    }
}
