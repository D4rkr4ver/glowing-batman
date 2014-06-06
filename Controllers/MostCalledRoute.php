<?php

namespace Controllers;

class MostCalledRoute
{
    public $mostCalledRoute = array();

    /**
     * Calculates the most called route
     *
     * @param array $list
     */
    public function calculateMostCalledRoute(array $list)
    {
        $routes = array();
        $mostCalledRoute = array(
            'route' => '',
            'count' => 0,
        );

        foreach ($list as $key => $value) {
            if (isset($routes[$value[2]])) {
                $routes[$value[2]]++;
            } else {
                $routes[$value[2]] = 1;
            }
        }

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
