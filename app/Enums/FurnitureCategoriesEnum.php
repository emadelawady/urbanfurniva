<?php

namespace App\Enums;

enum FurnitureCategoriesEnum
{
    case Furniture;
    case LivingRoom;



    public function getData () : array
    {
        return match ($this)
        {
            FurnitureCategoriesEnum::LivingRoom => [
                    [
                        'link' => 'furniture.livingroom.sofa',
                        'title' => __('messages.sofas'),
                        'image' => 'furniture/livingroom/sofa/1.jpg'
                    ],
                    [
                        'link' => 'furniture.livingroom.cupboard',
                        'title' => __('messages.cupboards'),
                        'image' => 'furniture/livingroom/cupboard/1/1_1.jpg'
                    ],
                    [
                        'link' => 'furniture.livingroom.table',
                        'title' => __('messages.tables'),
                        'image' => 'furniture/livingroom/Table/5/5_1.jpg'
                    ],
                    [
                        'link' => 'furniture.livingroom.chair',
                        'title' => __('messages.chairs'),
                        'image' => 'furniture/livingroom/chair/5.jpg'
                    ],

                    // [
                    //     'link' => 'furniture.livingroom.chair',
                    //     'title' => '',
                    //     'image' => 'furniture/livingroom/chair/5.jpg'
                    // ],
                    // [
                    //     'link' => 'furniture.livingroom.chair',
                    //     'title' => '',
                    //     'image' => 'furniture/livingroom/chair/5.jpg'
                    // ]
                ],
            FurnitureCategoriesEnum::Furniture => [
                    [
                        'link' => 'furniture.livingroom',
                        'title' => 'messages.living-room',
                        'image' => 'furniture/livingroom/1.jpg'
                    ],
                    [
                        'link' => 'furniture.bedroom',
                        'title' => 'messages.bedroom',
                        'image' => 'furniture/bedroom/1.jpg'
                    ],
                    [
                        'link' => 'furniture.diningroom',
                        'title' => 'messages.diningroom',
                        'image' => 'furniture/diningroom/1.jpg'
                    ],
                    [
                        'link' => 'furniture.officefurniture',
                        'title' => 'messages.officefurniture',
                        'image' => 'furniture/officefurniture/1.jpg'
                    ],
                    [
                        'link' => 'furniture.outdoorfurniture',
                        'title' => 'messages.outdoorfurniture',
                        'image' => 'furniture/outdoorfurniture/6.jpg'
                    ],
                    [
                        'link' => 'furniture.entrywayfurniture',
                        'title' => 'messages.entrywayfurniture',
                        'image' => 'furniture/entrywayfurniture/3.jpg'
                    ],

                ],
        };
    }
}
