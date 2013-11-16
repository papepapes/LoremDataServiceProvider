<?php

namespace Papepapes;

use Silex\Application;
use Silex\ServiceProviderInterface;
use Faker\Factory;

/**
 * A Fake Data generator service provider for Silex based on Faker
 *
 * @author GUEYE mamadou <papepapes@gmail.com>
 * @link http://silex.sensiolabs.org/doc/providers.html#creating-a-provider Creating a provider
 * @link https://github.com/fzaninotto/Faker
 */
class LoremDataServiceProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {
        
    }

    public function boot(Application $app)
    {
        $app['faker'] = $app->share(function(){
            return Factory::create($app['locale']);
        });
    }
}
