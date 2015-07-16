<?php

namespace Controllers;

final class RouteWithMostTime
{
    /**
     * @var array
     */
    public $routeWithMostTime = [];

    /**
     * Calculates all stats for every route by time.
     *
     * @param array $list
     */
    public function calculateRouteTime(array $list)
    {
        $routes = [];

        foreach ($list as $key => $value) {
            if (isset($routes[$value[2]])) {
                $routes[$value[2]]['time'] += $value[0];
                $routes[$value[2]]['memory'] += $value[1];
            } else {
                $routes[$value[2]] = [
                    'time'   => $value[0],
                    'memory' => $value[1],
                ];
            }
        }

        $this->routeWithMostTime = $routes;
    }

    /**
     * Calculates route with most time.
     *
     * @param array $list
     */
    public function calculateRouteWithMostTime(array $list)
    {
        // TODO: make this independent
        $this->calculateRouteTime($list);
        $routes = $this->routeWithMostTime;

        $routeWithMostTime = [
            'route'  => '',
            'time'   => 0,
            'memory' => 0,
        ];

        foreach ($routes as $route => $array) {
            if ($array['time'] > $routeWithMostTime['time']) {
                $routeWithMostTime['route']  = $route;
                $routeWithMostTime['time']   = $array['time'];
                $routeWithMostTime['memory'] = $array['memory'];
            }

        }

        $this->routeWithMostTime = $routeWithMostTime;
    }

    public function getRouteWithMostTime()
    {
        return $this->routeWithMostTime;
    }
}
