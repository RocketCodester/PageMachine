<?php

namespace MyClasses;

use Symfony\Bundle\FrameworkBundle\Tests\TestCase;

class SecondClassTest extends TestCase
{
    /**
     * @test
     */
    public function doesWhatIsExpected() {
        $secondClassInstance = $this->getMockBuilder(SecondClass::class)
            ->setMethods(['callStatic'])
            ->getMock();

        $secondClassInstance
            ->method('callStatic')
            ->with(LocalizationUtility::class, 'translate', '2ndClassArgument')
            ->willReturn('translating 2ndClassArgument');

        $this->assertEquals('translating 2ndClassArgument', $secondClassInstance->doSomething());
    }
}
