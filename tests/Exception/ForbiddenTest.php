<?php

namespace Dryspell\Http\Test\Exception;

use Dryspell\Http\Exception\Forbidden;
use PHPUnit\Framework\TestCase;

/**
 * Tests for \Dryspell\Http\Exception
 *
 * @package Dryspell\Http\Test
 */
class ForbiddenTest extends TestCase
{

    /**
     * Ensure that default error message is set.
     *
     * @test
     */
    public function testIsDefaultMessageForbidden()
    {
        $object = new Forbidden();
        $expected = 'Forbidden';
        $actual = $object->getMessage();
        $this->assertEquals($expected, $actual);
    }

    /**
     * Ensure that default error code is set.
     *
     * @test
     */
    public function testIsDefaultCode403()
    {
        $object = new Forbidden();
        $expected = 403;
        $actual = $object->getCode();
        $this->assertEquals($expected, $actual);
    }
}