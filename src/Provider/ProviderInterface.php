<?php

namespace FOS\MessageBundle\Provider;

use FOS\MessageBundle\Model\ThreadInterface;

/**
 * Provides threads for the current authenticated user.
 *
 * @author Thibault Duplessis <thibault.duplessis@gmail.com>
 */
interface ProviderInterface
{
    /**
     * Gets the thread in the inbox of the current user.
     *
     * @return ThreadInterface[]
     */
    public function getInboxThreads();

    /**
     * Gets the thread in the sentbox of the current user.
     *
     * @return ThreadInterface[]
     */
    public function getSentThreads();

    /**
     * Gets the deleted threads of the current user.
     *
     * @return ThreadInterface[]
     */
    public function getDeletedThreads();

    /**
     * Gets a thread by its ID
     * Performs authorization checks
     * Marks the thread as read.
     *
     * @param mixed $threadId
     *
     * @return ThreadInterface
     */
    public function getThread($threadId);

    /**
     * Tells how many unread messages the authenticated participant has.
     *
     * @return int the number of unread messages
     */
    public function getNbUnreadMessages();
}
