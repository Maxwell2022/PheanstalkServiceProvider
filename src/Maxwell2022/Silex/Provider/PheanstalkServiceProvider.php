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
        // Default value
        $app['pheanstalk.port'] = \Pheanstalk_Pheanstalk::DEFAULT_PORT;
        $app['pheanstalk.timeout'] = 30;

        // Register pheanstalk service
        $app['pheanstalk'] = $app->share(function($app) {
            if (!isset($app['pheanstalk.host'])) {
                throw new \Exception('missing host parameter for pheanstalk service');
            }
            return new \Pheanstalk_Pheanstalk($app['pheanstalk.host'], $app['pheanstalk.port'], $app['pheanstalk.timeout']);
        });
    }

    public function boot(Application $app)
    {
    }
}
