Junty Plugin
============
This package constains the extension for Junty plugins.

## Usage
### Install on your package
```console
$ composer require junty/junty-plugin
```
### Creating the plugin
```php
namespace MyNamespace;

use Junty\Plugin\PluginInterface;

class MyPlugin implements PluginInterface
{
    public function getName() : string
    {
        return 'my_plugin';
    }

    public function getCallback() : callable
    {
        return function (array $streams) {
            //...
        };
    }
}
```