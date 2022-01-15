<?php

namespace App\Http\Services\Fans;

class TurnOffCommand implements Command
{
    private $fan;

    public function __construct(Fan $fan)
    {
        $this->fan = $fan;
    }

    public function Execute(): void
    {
        $this->fan->turnOff();
    }

    public function Undo(): void
    {
        $this->fan->turnOn();
    }
}
