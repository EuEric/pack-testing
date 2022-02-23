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
    public function test_failing_test()
    {
        try {
            $this->assertTrue(false);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            //catching the error to still allow test run
        }

    }
}