<?php

namespace MyClasses\thirdclass;

use Symfony\Bundle\FrameworkBundle\Tests\TestCase;
use MyClasses\LocalizationUtility;

class ThirdClassTest extends TestCase
{
    /**
     * @test
     */
    public function doesWhatIsExpected() {
        $thirdClassInstance = $this->getMockBuilder(ThirdClass::class)
            ->setMethods(['callStatic'])
            ->getMock();

        $thirdClassInstance
            ->method('callStatic')
            ->with(LocalizationUtility::class, 'translate', '3rdClassArgument')
            ->willReturn('translating 3rdClassArgument');

        $this->assertEquals('translating 3rdClassArgument', $thirdClassInstance->doSomething());
    }
}
