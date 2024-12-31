<?php


if (! function_exists('getAllRouteSubNames')) {

    function getAllRouteSubNames($route = null) {

        return \App\RouteNames::get($route);
    }

}
