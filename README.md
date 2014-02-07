PheanstalkServiceProvider 
=========================

Silex Provider for pheanstalk 

[![Latest Stable Version](https://poser.pugx.org/maxwell2022/pheanstalkserviceprovider/v/stable.png)](https://packagist.org/packages/maxwell2022/pheanstalkserviceprovider) [![Total Downloads](https://poser.pugx.org/maxwell2022/pheanstalkserviceprovider/downloads.png)](https://packagist.org/packages/maxwell2022/pheanstalkserviceprovider)

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
$app->register(new \Maxwell2022\Silex\Provider\PheanstalkServiceProvider());

```
