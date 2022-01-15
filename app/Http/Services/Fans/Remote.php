<?php

namespace App\Http\Services\Fans;

class Remote
{
    private $turnOnCommand;
    private $turnOffCommand;

    public function __construct(Command $turnOnCommand, Command $turnOffCommand)
    {
        $this->turnOnCommand = $turnOnCommand;
        $this->turnOffCommand = $turnOffCommand;
    }

    public function TurnOnButtonClick(): void
    {
        $this->turnOnCommand->Execute();
    }

    public function TurnOffButtonClick(): void
    {
        $this->turnOffCommand->Execute();
    }
}
