# get-ip
Get a user's IP address.

```php
namespace Jstewmc\GetIp;

// instantiate the service
$service = new GetIp();

$service('foo');      // returns null
$service('1.2.3.4');  // returns '1.2.3.4'
```

This library is very simple. If the request's IP address is valid, this library will return it. If not, this library will return `null`.

## Author

[Jack Clayton](mailto:clayjs0@gmail.com)

## License

[MIT](https://github.com/jstewmc/get-ip/blob/master/LICENSE)

## Version

### 0.1.0, November 24, 2016

* Initial release
