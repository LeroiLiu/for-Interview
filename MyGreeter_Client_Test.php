<?php

include 'MyGreeter/Client.php';

/**
 * @covers Client
 */
class MyGreeter_Client_Test extends \PHPUnit\Framework\TestCase
{

    /**
     * usually such as @covers,@depends,@dataProvider and @expectedException should be covered
     */

    public function setUp()
    {
        $this->greeter = \MyGreeter\Client::Instance();
    }

    /**
     * @test
     */
    public function Instance()
    {
        $this->assertEquals(
            get_class($this->greeter),
            'MyGreeter\Client'
        );
    }

    /**
     * @depends Instance
     * @test
     */
    public function getGreeting()
    {
        $this->assertTrue(
            strlen($this->greeter->getGreeting()) > 0
        );
    }


    //also we can use phpunit like this
    public function test_Instance()
    {
        $this->assertEquals(
            get_class($this->greeter),
            'MyGreeter\Client'
        );
    }
    /**
     * @depends test_Instance
     */
    public function test_getGreeting()
    {
        $this->assertTrue(
            strlen($this->greeter->getGreeting()) > 0
        );
    }

}