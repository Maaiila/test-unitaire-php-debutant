<?php

use PHPUnit\Framework\TestCase;
use Src\Math;

class MathTest extends TestCase
{
    public function testAddition()
    {
        $math = new Math();
        $this->assertEquals(6, $math->addition(2, 3));
    }
}

