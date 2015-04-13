<?php

namespace DesignPatterns\Behavioral\Command;

/**
 * Invoker is using the command given to it.
 * Example : an Application in SF2
 */
class Invoker
{
    /**
     * @var CommandInterface
     */
    protected $command;

    /**
     * In the invoker we find this kind of method for subscribing the command.
     * There can be also a stack, a list, a fixed set...
     *
     * @param CommandInterface $cmd
     */
    public function setCommand(CommandInterface $cmd)
    {
        $this->command = $cmd;
    }

    /**
     * executes the command
     */
    public function run()
    {
        // here is a key feature of the invoker
        // the invoker is the same whatever is the command
        $this->command->execute();
    }
}
