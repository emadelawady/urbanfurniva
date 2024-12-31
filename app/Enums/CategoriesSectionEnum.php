<?php

namespace App\Enums;

use Illuminate\Database\Eloquent\Collection;

enum CategoriesSectionEnum
{
    case KITCHEN;
    case Furniture;
    case Furnitures;


    public function getData ($routeName, $translate, $param, $model, $recordsNumber = 6) : array
    {



        return match ($this)
        {
            CategoriesSectionEnum::KITCHEN => [$routeName, $translate, $param, Collection::make($model::all()->take($recordsNumber))],
            CategoriesSectionEnum::Furniture => [$routeName, $translate, $param, Collection::make($model::all()->take($recordsNumber))],
        };
    }
}
