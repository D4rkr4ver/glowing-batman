<?php

namespace Controllers;

final class MostCalledRoute
{
    /**
     * @var array
     */
    public $routeCount = [];

    /**
     * @var array
     */
    public $mostCalledRoute = [];

    /**
     * Calculates all stats for every route by name.
     *
     * @param array $list
     */
    public function calculateRouteCount(array $list)
    {
        $routes = [];

        foreach ($list as $key => $value) {
            if (isset($routes[$value[2]])) {
                $routes[$value[2]]++;
            } else {
                $routes[$value[2]] = 1;
            }
        }
        $this->routeCount = $routes;
    }

    /**
     * Calculates the most called route.
     *
     * @param array $list
     */
    public function calculateMostCalledRoute(array $list)
    {
        // TODO: make this independent
        $this->calculateRouteCount($list);
        $routes = $this->routeCount;

        $mostCalledRoute = [
            'route' => '',
            'count' => 0,
        ];

        foreach ($routes as $route => $count) {
            if ($count > $mostCalledRoute['count']) {
                $mostCalledRoute['route'] = $route;
                $mostCalledRoute['count'] = $count;
            }
        }

        $this->mostCalledRoute = $mostCalledRoute;
    }

    public function getMostCalledRoute()
    {
        return $this->mostCalledRoute;
    }
}
