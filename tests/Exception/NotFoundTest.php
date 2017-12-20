<?php

namespace Dryspell\Http\Test\Exception;

use Dryspell\Http\Exception\NotFound;
use PHPUnit\Framework\TestCase;

/**
 * Tests for \Dryspell\Http\Exception
 *
 * @package Dryspell\Http\Test
 */
class NotFoundTest extends TestCase
{

    /**
     * Ensure that default error message is set.
     *
     * @test
     */
    public function testIsDefaultMessageNotFound()
    {
        $object = new NotFound();
        $expected = 'Not Found';
        $actual = $object->getMessage();
        $this->assertEquals($expected, $actual);
    }

    /**
     * Ensure that default error code is set.
     *
     * @test
     */
    public function testIsDefaultCode404()
    {
        $object = new NotFound();
        $expected = 404;
        $actual = $object->getCode();
        $this->assertEquals($expected, $actual);
    }
}