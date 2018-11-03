<?php

namespace alexa\response\display\images;

require_once '../vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class dimensionsTest extends TestCase
{

    public function test__construct()
    {
        $dimensions = new dimensions(300, 400);
        $this->assertEquals(300, $dimensions->getWidth());
        $this->assertEquals(400, $dimensions->getHeight());
    }

    public function testGetWidth()
    {
        $dimensions = new dimensions(300, 400);
        $this->assertEquals(300, $dimensions->getWidth());
        $this->assertSame(300, $dimensions->getWidth());
        $this->assertNotSame('300', $dimensions->getWidth());
    }

    public function testGetHeight()
    {
        $dimensions = new dimensions(300, 400);
        $this->assertEquals(400, $dimensions->getHeight());
        $this->assertSame(400, $dimensions->getHeight());
        $this->assertNotSame('400', $dimensions->getHeight());
    }
}
