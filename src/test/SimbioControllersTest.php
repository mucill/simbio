<?php
use PHPUnit\Framework\TestCase;

class SimbioControllersTest extends TestCase
{
    function setUp()
    {
        $this->controller = new \Simbio\SimbioControllers();
    }

    function testClassHasConfigAttribute()
    {
        $this->assertClassHasAttribute('config', '\Simbio\SimbioControllers');
        $this->assertArrayHasKey('site_base_url', $this->controller->config);
    }

    function testAssignMethod()
    {
        $expected = '/foo';
        $path = 'foo';
        $this->assertEquals($expected, $this->controller->url($path));
        $this->assertEmpty($this->controller->base_url());
        $this->assertEmpty($this->controller->site_base_url());
        $this->assertEmpty($this->controller->base_path());
    }


}
