<?php

/**
 * Linkedin API for Laravel Framework
 *
 * @author    Rishat Sultanov <rihasultanov@gmai.com>
 * @license   https://opensource.org/licenses/MIT MIT License
 */

return [
    'api_key' => env('LINKEDIN_V2_KEY','yourapikey'),
    'api_secret' => env('LINKEDIN_V2_SECRET','yourapisecret'),
    'api_redirect_uri' => env('LINKEDIN_V2_REDIRECT_URI','yourredirecturi'),
];
