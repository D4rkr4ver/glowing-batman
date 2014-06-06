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
        foreach($list as $key => $value) {
            $routes[] = $value[2];
        }
        $routes = array_count_values($routes);
        $mostCalledRoute = array_keys($routes, max($routes));
        $this->mostCalledRoute['route'] = array_shift($mostCalledRoute);
        $this->mostCalledRoute['count'] = max(array_values($routes));
    }

    public function getMostCalledRoute()
    {
        return $this->mostCalledRoute;
    }
}
