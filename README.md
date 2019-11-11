LocalSellars Buy/Sell Trading Platform
========================

The "Symfony Demo Application" is a reference application created to show how
to develop applications following the [Symfony Best Practices][1].

Requirements
------------
  * PHP 7.1.3 or higher;
  * Latest MYSQL;
  * Apache 2.0.0

Installation
------------

Local Installation:

```bash
$ cd $HOME
$ git clone https://github.com/algobasket/localstellar-ci.git
$ cd localstellar-ci
$ localstellar-ci > php -S localhost:8001
```

Live Production Installation:

```bash
$ composer create-project symfony/symfony-demo my_project
```

Usage
-----

There's no need to configure anything to run the application. If you have
installed the [Symfony client][4] binary, run this command to run the built-in
web server and access the application in your browser at <http://localhost:8000>:

```bash
$ cd my_project/
$ symfony serve
```

Tests
-----

Execute this command to run tests:

```bash
$ cd my_project/
$ ./bin/phpunit
```

[1]: https://www.php.net/downloads.php
[2]: https://httpd.apache.org/download.cgi
[3]: https://dev.mysql.com/downloads/mysql/
[4]: https://www.stellar.org/developers/guides/concepts/test-net.html
[5]: http://testnet.stellarchain.io/ 
