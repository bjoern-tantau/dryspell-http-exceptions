<?php
namespace Dryspell\Http\Test;

use Dryspell\Http\Exception;
use PHPUnit\Framework\TestCase;

/**
 * Tests for \Dryspell\Http\Exception
 *
 * @package Dryspell\Http\Test
 */
class ExceptionTest extends TestCase
{

    /**
     * Ensure that default error message is set.
     *
     * @test
     */
    public function testIsDefaultMessageInternalServerError()
    {
        $object = new Exception();
        $expected = 'Internal Server Error';
        $actual = $object->getMessage();
        $this->assertEquals($expected, $actual);
    }

    /**
     * Ensure that default error code is set.
     *
     * @test
     */
    public function testIsDefaultCode500()
    {
        $object = new Exception();
        $expected = 500;
        $actual = $object->getCode();
        $this->assertEquals($expected, $actual);
    }

    /**
     * Ensure that the message can be changed.
     *
     * @test
     */
    public function testCanSetMessage()
    {
        $expected = 'Foo';
        $object = new Exception($expected);
        $actual = $object->getMessage();
        $this->assertEquals($expected, $actual);
    }

    /**
     * Ensure that the message can be changed.
     *
     * @test
     */
    public function testCanSetCode()
    {
        $expected = 123;
        $object = new Exception(null, $expected);
        $actual = $object->getCode();
        $this->assertEquals($expected, $actual);
    }
}