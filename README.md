# symfony_form_bug_reproducer

* composer install
* run with `symfony serve` or `php -S 127.0.0.1:8000 -t ./public`

run with exception
==================

* open in browser and get Exception!

run without exception
=====================

* open `./src/Model/Color.php`
* add `public function __toString() {return '#ff0000'}`
* open in browser and get wrong rendered form
