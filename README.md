Luhn
====

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