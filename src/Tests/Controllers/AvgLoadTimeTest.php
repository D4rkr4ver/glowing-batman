<?php

Namespace Controllers;


class AvgLoadTimeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function calculateAvgLoadTime()
    {
        $list = array(
            array(0.2, 500, 'routeA'),
            array(0.4, 300, 'routeA'),
            array(0.3, 3500, 'routeB'),
            array(0.7, 700, 'routeA'),
            array(0.1, 800, 'routeB'),
            array(0.1, 900, 'routeA'),
            array(0.1, 100, 'routeB'),
            array(0.05, 250, 'routeC'),
            array(1.2, 400, 'routeA'),
        );

        $avgLoadTime = new AvgLoadTime();

        $avgLoadTime->calculateAvgLoadTime($list, 100);
        $result = $avgLoadTime->getAvgLoadTime();

        $expectedResult = array(
            'memory' => 100,
            'count' => 8,
            'loadTime' => 3.05,
            'avgLoadTime' => 0.38,
        );

        $this->assertSame($expectedResult, $result);
    }
}
