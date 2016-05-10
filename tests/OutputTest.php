<?php echo "Hello, Code Louisville" ?>

class OutputTest extends PHPUnit_Framework_TestCase
{
    public function testExpectOutput()
    {
        $this->expectOutputString('Hello, Code Louisville!');
        require 'hello.php';
    }
}
