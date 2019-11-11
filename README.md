LocalStellars Buy/Sell Trading Platform
========================

![logo](https://raw.githubusercontent.com/algobasket/localstellar-ci/master/public/images/localstellars-logo.png?token=AB7ENWJNLCJZUEEHJ2TBAZ252KCDU)

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

  * Change development to production in index.php;
  * Change database info in database.php inside config folder;

```bash
$ cd www/public_html/html
$ git clone https://github.com/algobasket/localstellar-ci.git .
$ sudo chmod 777 -R . OR sudo chmod 777 -R *
```

Usage
-----

There's no need to configure anything to run the application. If you have
installed in your local machine, run this command to run the built-in
web server and access the application in your browser at <http://localhost:8001>:

```bash
$ cd $HOME
$ git clone https://github.com/algobasket/localstellar-ci.git
$ cd localstellar-ci
$ localstellar-ci > php -S localhost:8001 
```

Tests
-----

Execute this command to run tests:

```bash
$ cd localstellar-ci/
$ ./bin/phpunit
```

[1]: https://www.php.net/downloads.php
[2]: https://httpd.apache.org/download.cgi
[3]: https://dev.mysql.com/downloads/mysql/
[4]: https://www.stellar.org/developers/guides/concepts/test-net.html
[5]: http://testnet.stellarchain.io/
