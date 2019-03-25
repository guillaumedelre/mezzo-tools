<?php
namespace Tests\App\Service;

use App\Service\MyService;
use PHPUnit\Framework\TestCase;

class MyServiceTest extends TestCase
{
    public function testMyService()
    {
        $service = new MyService();
        $service->setDataBy('key', ['property' => 'value']);
        $this->assertEquals(['property' => 'value'], $service->getDataByKey('key'));
    }

    /**
     * @expectedException \LogicException
     */
    public function testMyServiceThrowsException()
    {
        $service = new MyService();
        $service->getDataByKey('not_found');
    }
}
