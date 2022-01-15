<?php

namespace App\Http\Services\Fans;

class TurnOnCommand implements Command
{
    private $fan;

    public function __construct(Fan $fan)
    {
        $this->fan = $fan;
    }

    public function Execute(): void
    {
        $this->fan->turnOn();
    }

    public function Undo(): void
    {
        $this->fan->turnOff();
    }
}
