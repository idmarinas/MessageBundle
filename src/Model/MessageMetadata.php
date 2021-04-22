<?php

namespace FOS\MessageBundle\Model;

abstract class MessageMetadata
{
    protected $participant;
    protected $isRead = false;

    /**
     * @return ParticipantInterface
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    public function setParticipant(ParticipantInterface $participant)
    {
        $this->participant = $participant;
    }

    /**
     * @return bool
     */
    public function getIsRead()
    {
        return $this->isRead;
    }

    public function setIsRead(bool $isRead)
    {
        $this->isRead = $isRead;
    }
}
