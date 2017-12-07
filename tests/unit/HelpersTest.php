<?php

use Codeception\Test\Unit;

use Phalcon\DiInterface;
use Phalcon\DispatcherInterface;

class HelpersTest extends Unit
{
    /**
     * UnitTester Object
     * @var \UnitTester
     */
    protected $tester;

    protected $appPath;
    protected $cachePath;
    protected $configPath;

    public function _before()
    {
        parent::_before();

        $this->appPath = dirname(dirname(__DIR__)) . '/app';
        $this->cachePath = dirname(dirname(__DIR__)) . '/storage/cache';
        $this->configPath = dirname(dirname(__DIR__)) . '/config';
    }

    public function testAppPath()
    {
        $this->assertEquals($this->appPath, app_path());
        $this->assertEquals($this->appPath . '/foo', app_path('foo'));
        $this->assertEquals($this->appPath . '/bar/', app_path('bar/'));

        $this->tester->amInPath(dirname(app_path()));
        $this->tester->seeFileFound('config.php', 'config');
    }

    public function testCachePath()
    {
        $this->assertEquals($this->cachePath, cache_path());
        $this->assertEquals($this->cachePath . '/foo', cache_path('foo'));
        $this->assertEquals($this->cachePath . '/bar/', cache_path('bar/'));

        $this->tester->amInPath(dirname(app_path()));
        $this->tester->seeFileFound('storage/cache');
    }

    public function testConfigPath()
    {
        $this->assertEquals($this->configPath, config_path());
        $this->assertEquals($this->configPath . '/foo', config_path('foo'));
        $this->assertEquals($this->configPath . '/bar/', config_path('bar/'));

        $this->tester->amInPath(dirname(app_path()));
        $this->tester->seeFileFound('config');
    }

    public function testContainerFacade()
    {
        $this->assertInstanceOf(DiInterface::class, container());
        $this->assertInstanceOf(DispatcherInterface::class, container('dispatcher'));
    }

    public function testValueFacade()
    {
        $this->assertNull(value(null));
        $this->assertFalse(value(false));
        $this->assertEquals('', value(''));
        $this->assertEquals('foo', value(function () { return 'foo'; }));
    }

    public function testEnvFacade()
    {
        $this->assertNull(env('non-existent-key-here'));
        $this->assertTrue(env('non-existent-key-here', true));
        $this->assertEquals($_ENV['APP_URL'], env('APP_URL'));
    }

    public function testEnvironmentFacade()
    {
        $this->assertFalse(environment('non-existent-environment-here'));
        $this->assertFalse(environment(['non-existent-environment-here', 'non-existent-environment-here']));
        $this->assertFalse(environment([]));
        $this->assertFalse(environment(false));
        $this->assertFalse(environment(null));
        $this->assertFalse(environment('production'));
        $this->assertFalse(environment('staging'));
        $this->assertFalse(environment(['staging', 'production']));

        $this->assertTrue(environment(['staging', 'production', 'development', 'testing']));
        $this->assertTrue(environment([env('APP_ENV')]));
        $this->assertTrue(environment([$_ENV['APP_ENV']]));
        $this->assertTrue(environment() === env('APP_ENV'));
        $this->assertTrue(environment() === $_ENV['APP_ENV']);
    }
}
