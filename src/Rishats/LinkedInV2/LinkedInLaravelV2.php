<?php
/**
 * Linkedin API for Laravel Framework
 *
 * @author    Rishat Sultanov <rihasultanov@gmail.com>
 * @license   https://opensource.org/licenses/MIT MIT License
 */

namespace Rishats\LinkedInV2;

use Rishats\LinkedIn\Client;

class LinkedInLaravelV2 extends Client
{

    /**
     * LinkedInLaravelV2 constructor.
     * @param string $clientId
     * @param string $clientSecret
     * @param string $redirectUri
     * @throws \Rishats\LinkedIn\Exception\RuntimeException
     */
    public function __construct(string $clientId, string $clientSecret,  string $redirectUri)
    {
        parent::__construct($clientId, $clientSecret, $redirectUri);
    }
}