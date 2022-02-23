<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class FailingTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function failingTestCase()
    {
        $this->assertTrue(false);
    }
}