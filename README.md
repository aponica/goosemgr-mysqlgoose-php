# aponica/goosemgr-mysqlgoose-php

Goose Manager for Mysqlgoose Database Abstraction.

A "Goose Manager" provides a consistent way to access an object or
relational database. A "Mysqlgoose Manager" allows
[Mysqlgoose](https://aponica.com/docs/mysqlgoose-php)
to be managed consistently with other types of "Goose."

An equivalent JS package, 
[@aponica/goosemgr-mysqlgoose-js](https://aponica.com/docs/goosemgr-mysqlgoose-js), 
is maintained for consistency.

<a name="installation"></a>
## Installation

```sh
composer install aponica/goosemgr-mysqlgoose-php
```

<a name="usage"></a>
## Usage

### Step 1: Create Configuration Files

Create a database connection file and Mysqlgoose definitions file
according to the first two steps for 
<a href="https://aponica.com/docs/mysqlgoose-php">aponica/mysqlgoose-php</a>.

### Step 2: Use a Mysqlgoose Manager

Use class `cMysqlgooseMgr` to connect to your database and create the models,
then use the models as specified in the 
<a href="https://aponica.com/docs/mysqlgoose-php">aponica/mysqlgoose-php</a>
documentation:

```php
use \Aponica\MysqlgooseMgr\cMysqlgooseMgr;

$mgr = new \Aponica\MysqlgooseMgr\cMysqlgooseMgr(
  json_decode( file_get_contents( 'definitions.json', true ), true ) );
  
$mgr->fConnect( json_decode( 
  file_get_contents( 'mysql.json', true ), true ) );

$mgr->fiModel( 'customer' )->findById( 1234 );
```

## Please Donate!

Help keep a roof over our heads and food on our plates! 
If you find aponica® open source software useful, please 
**[click here](https://www.paypal.com/biz/fund?id=BEHTAS8WARM68)** 
to make a one-time or recurring donation via *PayPal*, credit 
or debit card. Thank you kindly!

## Unit Testing

The [PHPUnit](https://phpunit.de/) unit tests require the test database
and configuration as specified for
[aponica/mysqlgoose-php](https://aponica.com/docs/mysqlgoose-php). 

## Contributing

Please [contact us](https://aponica.com/contact/) if you believe this package
is missing important functionality that you'd like to provide.

Under the covers, the code is **heavily commented** and uses a form of
[Hungarian notation](https://en.wikipedia.org/wiki/Hungarian_notation) 
for data type guidance. If you submit a pull request, please try to maintain
the (admittedly unusual) coding style, which is the product of many decades
of programming experience.

## Copyright

Copyright 2019-2022 Opplaud LLC and other contributors.

## License

MIT License.

## Trademarks

OPPLAUD and aponica are registered trademarks of Opplaud LLC.

## Related Links

Official links for this project:

* [Home Page & Online Documentation
    ](https://aponica.com/docs/goosemgr-mysqlgoose-php/)
* [GitHub Repository](https://github.com/aponica/goosemgr-mysqlgoose-php)
* [Packagist](https://packagist.org/packages/aponica/goosemgr-mysqlgoose-php)
  
Related projects:

* [Mysqlgoose (aponica/mysqlgoose-php)
    ](https://aponica.com/docs/mysqlgoose-php/)
* [Goose Manager (aponica/goosemgr-php)
    ](https://aponica.com/docs/goosemgr-php/)
* [JS Version (@aponica/goosemgr-mysqlgoose-js)
    ](https://aponica.com/docs/goosemgr-mysqlgoose-js/)
