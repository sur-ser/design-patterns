<?php

namespace DesignPatterns\Behavioral\Visitor;

/**
 * Class User
 * @package DesignPatterns\Behavioral\Visitor
 */
class User implements Role
{
    /**
     * @var string
     */
    private $name;

    /**
     * User constructor.
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return sprintf('User %s', $this->name);
    }

    /**
     * @param RoleVisitorInterface $visitor
     *
     * @return void
     */
    public function accept(RoleVisitorInterface $visitor)
    {
        $visitor->visitUser($this);
    }
}
