<?php

namespace MyClasses;

use Symfony\Bundle\FrameworkBundle\Tests\TestCase;

class MyClassTest extends TestCase
{
    /**
     * @test
     */
    public function doesWhatIsExpected() {
        $myClassInstance = $this->getMockBuilder(MyClass::class)
            ->setMethods(['callStatic'])
            ->getMock();

        $myClassInstance
            ->method('callStatic')
            ->with(LocalizationUtility::class, 'translate', 'foo')
            ->willReturn('translating foo');

        $this->assertEquals('translating foo', $myClassInstance->doSomething());
    }
}
