<?php

namespace Controllers;

final class AvgLoadTimeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_should_calculate_the_average_load_time()
    {
        $list = [
            [0.2, 500, 'routeA'],
            [0.4, 300, 'routeA'],
            [0.3, 3500, 'routeB'],
            [0.7, 700, 'routeA'],
            [0.1, 800, 'routeB'],
            [0.1, 900, 'routeA'],
            [0.1, 100, 'routeB'],
            [0.05, 250, 'routeC'],
            [1.2, 400, 'routeA'],
        ];

        $avgLoadTime = new AvgLoadTime();

        $avgLoadTime->calculateAvgLoadTime($list, 100);
        $result = $avgLoadTime->getAvgLoadTime();

        $expectedResult = [
            'memory'      => 100,
            'count'       => 8,
            'loadTime'    => 3.05,
            'avgLoadTime' => 0.38,
        ];

        $this->assertSame($expectedResult, $result);
    }
}
