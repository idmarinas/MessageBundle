<?php

namespace FOS\MessageBundle\MessageBuilder;

use Doctrine\Common\Collections\Collection;
use FOS\MessageBundle\Model\ParticipantInterface;

/**
 * Fluent interface message builder for new thread messages.
 *
 * @author Thibault Duplessis <thibault.duplessis@gmail.com>
 */
class NewThreadMessageBuilder extends AbstractMessageBuilder
{
    /**
     * The thread subject.
     *
     * @param  string
     * @param mixed $subject
     *
     * @return NewThreadMessageBuilder (fluent interface)
     */
    public function setSubject($subject)
    {
        $this->thread->setSubject($subject);

        return $this;
    }

    /**
     * @return NewThreadMessageBuilder (fluent interface)
     */
    public function addRecipient(ParticipantInterface $recipient)
    {
        $this->thread->addParticipant($recipient);

        return $this;
    }

    /**
     * @return NewThreadMessageBuilder
     */
    public function addRecipients(Collection $recipients)
    {
        foreach ($recipients as $recipient)
        {
            $this->addRecipient($recipient);
        }

        return $this;
    }
}
