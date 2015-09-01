[![Build Status](https://travis-ci.org/rgeraads/glowing-batman.svg?branch=develop)](https://travis-ci.org/rgeraads/glowing-batman)
[![StyleCI](https://styleci.io/repos/20097861/shield)](https://styleci.io/repos/20097861)

README
======
First test-project. Plain PHP with Composer, to get more knowledge of PHP functionality. Next project will likely be done in Symfony2.

INSTALLATION
------------
- php composer.phar install (only needed if you want to run testcases)

USAGE
-----
- Command line: call Command/Console.php for plain text
- Browser: go to web/index.php for HTML formatted text
- Vagrant: vagrant up, wait for it to finish, then go to http://localhost:5000 in the browser on your host machine

TESTING
-------
- bin/behat via command-line

TODO
----

- Behat tests for web-interface
- Commit hooks
- PHPUnit tests (TDD)
- Closures
- Bower
- Lambda's (anonymous functions)

DONE
----
- Autoloader
- Vagrant provisioning
