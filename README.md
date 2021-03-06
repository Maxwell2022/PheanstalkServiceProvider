PheanstalkServiceProvider 
=========================

Silex Provider for pheanstalk 

[![Latest Stable Version](https://poser.pugx.org/maxwell2022/pheanstalkserviceprovider/v/stable.png)](https://packagist.org/packages/maxwell2022/pheanstalkserviceprovider) [![Total Downloads](https://poser.pugx.org/maxwell2022/pheanstalkserviceprovider/downloads.png)](https://packagist.org/packages/maxwell2022/pheanstalkserviceprovider) [![Latest Unstable Version](https://poser.pugx.org/maxwell2022/pheanstalkserviceprovider/v/unstable.png)](https://packagist.org/packages/maxwell2022/pheanstalkserviceprovider) [![License](https://poser.pugx.org/maxwell2022/pheanstalkserviceprovider/license.png)](https://packagist.org/packages/maxwell2022/pheanstalkserviceprovider)

# Installation

Using your composer.json:

```json
{
    "maxwell2022/pheanstalkserviceprovider": "dev-master"
}
```

```shell
$ ./composer.phar update
```

# Provider registration

```php
$app->register(new \Maxwell2022\Silex\Provider\PheanstalkServiceProvider(), array(
    'pheanstalk.host' => 'localhost'
));
```

You can specify the following additional options: `pheanstalk.port` (default to 11300) and `pheanstalk.timeout` default to 30 seconds
