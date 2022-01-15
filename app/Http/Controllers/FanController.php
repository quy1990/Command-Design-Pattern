<?php

namespace App\Http\Controllers;

use App\Http\Services\Fans\Fan;
use App\Http\Services\Fans\Remote;
use App\Http\Services\Fans\TurnOffCommand;
use App\Http\Services\Fans\TurnOnCommand;

class FanController extends Controller
{
    public function index(): void
    {
        $fan = new Fan();

        $turnOnCommand = new TurnOnCommand($fan);
        $turnOffCommand = new TurnOffCommand($fan);

        $remote = new Remote($turnOnCommand, $turnOffCommand);

        $remote->TurnOnButtonClick();
        $remote->TurnOffButtonClick();
    }
}
