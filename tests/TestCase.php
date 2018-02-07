<?php

namespace MMollick\Drip\Tests;

use MMollick\Drip\Auth;
use MMollick\Drip\HttpClient\HttpClientInterface;

class TestCase extends \PHPUnit_Framework_TestCase
{
    protected static $testData;

    public function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->auth = new Auth('123', 'abc');
    }

    protected function getData($key)
    {
        if (!self::$testData) {
            self::$testData = loadTestData(__DIR__ . '/data');
        }
        
        return self::$testData[$key];
    }

    protected function getMockHttpClient()
    {
        $mock = $this->createMock(HttpClientInterface::class);
        return $mock;
    }
}
