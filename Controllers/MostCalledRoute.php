<?php

namespace Controllers;

class MostCalledRoute
{
    public $routeCount = array();
    public $mostCalledRoute = array();

    /**
     * Calculates all stats for every route by name
     *
     * @param array $list
     */
    public function calculateRouteCount(array $list)
    {
        $routes = array();

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
     * Calculates the most called route
     *
     * @param array $list
     */
    public function calculateMostCalledRoute(array $list)
    {
        // TODO: make this independent
        $this->calculateRouteCount($list);
        $routes = $this->routeCount;

        $mostCalledRoute = array(
            'route' => '',
            'count' => 0,
        );

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
