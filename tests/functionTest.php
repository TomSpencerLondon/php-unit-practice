<?php


use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase
{
    public function testAddReturnsTheCorectSum(){
        require 'functions.php';

        $this->assertEquals(4, add(2, 2));
    }
}
