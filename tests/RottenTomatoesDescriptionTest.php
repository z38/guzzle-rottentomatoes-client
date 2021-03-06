<?php

namespace Devmachine\Tests\Guzzle\RottenTomatoes;

use Devmachine\Guzzle\RottenTomatoes\RottenTomatoesDescription;

class RottenTomatoesDescriptionTest extends \PHPUnit_Framework_TestCase
{
    public function testGetBaseUrl()
    {
        $description = new RottenTomatoesDescription();
        $this->assertEquals('http://api.rottentomatoes.com/api/public/v1.0/', $description->getBaseUrl());

        $description = new RottenTomatoesDescription('http://test-url');
        $this->assertEquals('http://test-url', $description->getBaseUrl());
    }
}
