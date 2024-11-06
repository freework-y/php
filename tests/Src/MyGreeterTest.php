<?php

namespace Tests\Src;

use PHPUnit\Framework\TestCase;
use Src\MyGreeter;

date_default_timezone_set('Asia/Shanghai');

class MyGreeterTest extends TestCase
{
    private MyGreeter $greeter;

    public function setUp(): void
    {
        $this->greeter = new MyGreeter();
    }

    public function test_init()
    {
        $this->assertInstanceOf(
            MyGreeter::class,
            $this->greeter
        );
    }

    /**
     * 当前时间的测试用例
     * @return void
     */
    public function test_greeting()
    {
        $this->assertTrue(
            strlen($this->greeter->greeting()) > 0
        );
    }

//    /**
//     * 模拟上午6点的测试用例
//     * @return void
//     */
//    public function test_greeting_at_6am()
//    {
//        $hour = date('G', strtotime('06:00:00'));
//        $this->assertEquals(
//            "Good morning",
//            $this->greeter->greeting($hour)
//        );
//    }
//
//    /**
//     * 模拟中午12点的测试用例
//     * @return void
//     */
//    public function test_greeting_at_12pm()
//    {
//        $hour = date('G', strtotime('12:00:00'));
//        $this->assertEquals(
//            "Good afternoon",
//            $this->greeter->greeting($hour)
//        );
//    }
//
//    /**
//     * 模拟下午6点的测试用例
//     * @return void
//     */
//    public function test_greeting_at_6pm()
//    {
//        $hour = date('G', strtotime('18:00:00'));
//        $this->assertEquals(
//            "Good evening",
//            $this->greeter->greeting($hour)
//        );
//    }
}