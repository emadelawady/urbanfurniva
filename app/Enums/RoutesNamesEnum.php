<?php

namespace App\Enums;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Route;

enum RoutesNamesEnum
{
    case BurnerGas;



    public function getRoute ($message) : string
    {


        return match ($this)
        {
            RoutesNamesEnum::BurnerGas => $message == 'messages.burner-gas' ? 'burner.gas' : '',
            RoutesNamesEnum::BurnerGas => $message == 'messages.range-hood' ? 'range.hood' : '',
        };
    }
}
