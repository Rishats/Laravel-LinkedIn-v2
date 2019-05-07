<?php
/**
 * Linkedin API for Laravel Framework
 *
 * @author    Rishat Sultanov <rihasultanov@gmail.com>
 * @copyright Copyright (c) 2019, Rishat Sultanov <github.com/Rishats>
 * @license   https://opensource.org/licenses/MIT MIT License
 */

namespace Rishats\LinkedInV2\Facades;

use Illuminate\Support\Facades\Facade;

class LinkedInV2 extends Facade {

    protected static function getFacadeAccessor() {
        return 'linkedin-v2';
    }
}
