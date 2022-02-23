<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class PassingTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_passing_test()
    {
        try {
            $this->assertTrue(true);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            //catching the error to still allow test run
        }

    }
}