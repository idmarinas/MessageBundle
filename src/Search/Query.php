<?php

namespace FOS\MessageBundle\Search;

/**
 * Search term.
 */
class Query
{
    /**
     * @var string
     */
    protected $original;

    /**
     * @var string
     */
    protected $escaped;

    /**
     * @param string $original
     * @param string $escaped
     */
    public function __construct($original, $escaped)
    {
        $this->original = $original;
        $this->escaped  = $escaped;
    }

    /**
     * Converts to the original term string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->getOriginal();
    }

    /**
     * @return string original
     */
    public function getOriginal(): string
    {
        return $this->original;
    }

    /**
     * @param string $original
     */
    public function setOriginal($original)
    {
        $this->original = $original;
    }

    /**
     * @return string escaped
     */
    public function getEscaped()
    {
        return $this->escaped;
    }

    /**
     * @param string $escaped
     */
    public function setEscaped($escaped)
    {
        $this->escaped = $escaped;
    }

    public function isEmpty()
    {
        return empty($this->original);
    }
}
