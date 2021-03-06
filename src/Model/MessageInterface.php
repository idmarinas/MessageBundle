<?php

namespace FOS\MessageBundle\Model;

/**
 * Message model.
 *
 * @author Thibault Duplessis <thibault.duplessis@gmail.com>
 */
interface MessageInterface extends ReadableInterface
{
    /**
     * Gets the message unique id.
     *
     * @return mixed
     */
    public function getId();

    /**
     * @return ThreadInterface
     */
    public function getThread();

    /**
     * @param  ThreadInterface
     */
    public function setThread(ThreadInterface $thread);

    /**
     * @return \DateTime
     */
    public function getCreatedAt();

    /**
     * @return string
     */
    public function getBody();

    /**
     * @param  string
     * @param mixed $body
     */
    public function setBody($body);

    /**
     * @return ParticipantInterface
     */
    public function getSender();

    /**
     * @param  ParticipantInterface
     */
    public function setSender(ParticipantInterface $sender);
}
