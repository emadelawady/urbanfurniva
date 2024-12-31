<?php

namespace App;

enum RouteNames : string
{
    case KITCHEN = 'kitchens';
    case FURNITURE = 'furniture';


    public static function get($arg)
    {

        return match($arg){

            self::KITCHEN->value => [
                'kitchens*',
                'range.hood*',
                'burner.gas*',
                'ovens*',
                'trolls*',
                'doorHandle*',
                'sinks*',

            ],
            self::FURNITURE->value => [
                'furniture*',
            ],
        };

    }





}
