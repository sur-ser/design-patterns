<?php

namespace DesignPatterns\Behavioral\Visitor;

/**
 * Class Group
 * @package DesignPatterns\Behavioral\Visitor
 */
class Group implements Role
{
    /**
     * @var string
     */
    private $name;

    /**
     * Group constructor.
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
        return sprintf('Group: %s', $this->name);
    }

    /**
     * @param RoleVisitorInterface $visitor
     *
     * @return void
     */
    public function accept(RoleVisitorInterface $visitor)
    {
        $visitor->visitGroup($this);
    }
}
