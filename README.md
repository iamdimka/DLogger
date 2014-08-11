# DLogger - Another Simple PHP Logger

Just simple php logger, that implements PSR-3 logging style

### Usage

Create logger via `new` operator:

```php
$logger = new DLogger(new DLogger\FileProvider('application.log'));
```

To log something use

```php

$logger->log('info', 'Logger started');

//you can also use variables in your log message
$logger->log('notice', 'This log posted by {provider}', ['provider'=> 'FileProvider']);
```

As you've seen first parameter is log level. Logger has 8 predefined levels:

* **emergency** - critical permanent error
* **alert** - maybe need notify someone about
* **critical** - critical temporary error
* **error** - just non-critical error
* **warning** - generic error detected
* **notice** - potential problems
* **info** - informative message
* **debug** - just debug message

And your logger can help you faster log it with predefined methods

```php
$logger->error('bad');
$logger->critical('worse');
$logger->emergency('The worst');
```