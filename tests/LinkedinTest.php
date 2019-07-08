<?php

/**
 * Linkedin API for Laravel Framework
 *
 * @author    Rishat Sultanov <rihasultanov@gmail.com>
 * @license   https://opensource.org/licenses/MIT MIT License
 */

namespace Rishats\LinkedInV2\Tests;
use Rishats\LinkedInV2\Facades\LinkedInV2;

class LinkedinTest extends AbstractTestCase
{
    /**
     * @test
     */
    public function test_bindings()
    {
        $bindings = [$this->app['linkedin-v2'], $this->app['LinkedInV2']];

        foreach($bindings as $binding) {
          $this->assertInstanceOf(
              \Rishats\LinkedIn\Client::class,
              $binding
          );
        }
    }

    /**
     * @test
     */
    public function test_facade()
    {
        $this->assertEquals(
            LinkedInV2::isAuthenticated(),
            false
        );
    }
}
