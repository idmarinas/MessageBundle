<?php

namespace FOS\MessageBundle\FormModel;

abstract class AbstractMessage
{
    /**
     * @var string
     */
    protected $body;

    /**
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param string
     * @param mixed $body
     */
    public function setBody($body)
    {
        $this->body = $body;
    }
}
