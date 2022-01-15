<?php

namespace App\Http\Services\Fans;

interface Command
{
    public function Execute(): void;
    public function Undo(): void;
}
