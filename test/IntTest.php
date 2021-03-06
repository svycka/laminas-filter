<?php

/**
 * @see       https://github.com/laminas/laminas-filter for the canonical source repository
 * @copyright https://github.com/laminas/laminas-filter/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-filter/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\Filter;

use Laminas\Filter\Int as IntFilter;
use PHPUnit\Framework\TestCase;

class IntTest extends TestCase
{
    public function setUp()
    {
        if (version_compare(PHP_VERSION, '7.0', '>=')) {
            $this->markTestSkipped('Cannot test Int filter under PHP 7; reserved keyword');
        }
    }

    public function testRaisesNoticeOnInstantiation()
    {
        $this->expectException('PHPUnit_Framework_Error_Deprecated');
        new IntFilter();
    }
}
