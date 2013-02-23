Luhn
====

[![Build Status](https://travis-ci.org/JosephMoniz/php-luhn.png?branch=master)](https://travis-ci.org/JosephMoniz/php-luhn)

An implementation of the Luhn algorithm for verifying the checksum of credit
card numbers.

```php
<?php
use PlasmaConduit\Luhn;

echo "The '4012888888881881' CC# is ";
if (Luhn::validate("4012888888881881")) {
    echo "valid\n";
} else {
    echo "invalid\n";
}
```

Public Interface
----------------
```php
namespace PlasmaConduit;

class Luhn {

    /**
     * Takes a number and calculates the Luhn checksum of it
     *
     * @param {Int} $number - The number to calculate the checksum for
     * @return {Int}        - The computed checksum
     */
    static public function checksum($number);

    /**
     * Given an incomplete Luhn this calculates the check digit
     *
     * @param {Int} $number - The incomplete number to derive the check digit
     * @return {Int}        - The derived check digit
     */
    static public function getCheckDigit($number);

    /**
     * Given a complete Luhn this function returns true if it's valid
     *
     * @param {Int} $number - The Luhn to validate
     * @return {Boolean}    - True on valid false otherwise
     */
    static public function validate($number);
}
```