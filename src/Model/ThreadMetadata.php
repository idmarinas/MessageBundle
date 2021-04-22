<?php

namespace FOS\MessageBundle\Model;

abstract class ThreadMetadata
{
    protected $participant;
    protected $isDeleted = false;

    /**
     * Date of last message written by the participant.
     *
     * @var \DateTime
     */
    protected $lastParticipantMessageDate;

    /**
     * Date of last message written by another participant.
     *
     * @var \DateTime
     */
    protected $lastMessageDate;

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
    public function getIsDeleted()
    {
        return $this->isDeleted;
    }

    public function setIsDeleted(bool $isDeleted)
    {
        $this->isDeleted = $isDeleted;
    }

    /**
     * @return \DateTime
     */
    public function getLastParticipantMessageDate()
    {
        return $this->lastParticipantMessageDate;
    }

    public function setLastParticipantMessageDate(\DateTime $date)
    {
        $this->lastParticipantMessageDate = $date;
    }

    /**
     * @return \DateTime
     */
    public function getLastMessageDate()
    {
        return $this->lastMessageDate;
    }

    public function setLastMessageDate(\DateTime $date)
    {
        $this->lastMessageDate = $date;
    }
}
