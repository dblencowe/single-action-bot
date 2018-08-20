<?php

namespace Dblencowe\SABot;

class Bot
{
    private $command;

    public function __construct(Callable $command)
    {
        $this->command = $command;
    }

    public function process()
    {
        return call_user_func_array($this->command, func_get_args());
    }
}