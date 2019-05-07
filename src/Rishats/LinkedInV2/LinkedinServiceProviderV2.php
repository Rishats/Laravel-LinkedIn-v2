<?php
/**
 * Linkedin API for Laravel Framework
 *
 * @author    Rishat Sultanov <rihasultanov@gmail.com>
 * @license   https://opensource.org/licenses/MIT MIT License
 */

namespace Rishats\LinkedInV2;

use Illuminate\Support\ServiceProvider;

class LinkedinServiceProviderV2 extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        //Publish config file
        if(function_exists('config_path')){
            //If is not a Lumen App...
            $this->publishes([
                __DIR__ . '/config/linkedin-v2.php' => config_path('linkedin-v2.php'),
            ]);

            $this->mergeConfigFrom(
                __DIR__ . '/config/linkedin-v2.php', 'linkedin-v2'
            );
        }
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('LinkedInV2', function(){
            $linkedIn = new LinkedInLaravelV2(config('linkedin-v2.api_key'), config('linkedin-v2.api_secret'),  config('linkedin-v2.api_redirect_uri'));

            return $linkedIn;
        });

        $this->app->alias('LinkedInV2', 'linkedin-v2');
    }
}
