<?php

namespace Maxwell2022\Silex\Provider;

use Silex\Application;
use Silex\ServiceProviderInterface;

class PheanstalkServiceProvider implements ServiceProviderInterface
{
    /**
     * Create a config key in the app storing the configuration in an array
     *
     * @param Application $app
     */
    public function register(Application $app)
    {
    }

    public function boot(Application $app)
    {
    }
}
