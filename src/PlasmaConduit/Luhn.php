<?php
namespace PlasmaConduit;
use PlasmaConduit\Map;

class Luhn {

    static private $_map = [0,2,4,6,8,1,3,5,7,9];

    static public function checksum($number) {
        $numbers = new Map(str_split(strrev($number)));
        $sum     = $numbers->reduce(0, function($sum, $value, $key) {
            if ($key % 2) {
                return $sum + self::$_map[$value];
            } else {
                return $sum + $value;
            }
        });
        return $sum % 10;
    }

    static public function getCheckDigit($number) {
        $check = self::checksum($number * 10);
        return ($check == 0) ? 0 : 10 - $check;
    }

    static public function validate($number) {
        if (is_numeric($number)) {
            return self::checksum($number) === 0;
        } else {
            return false;
        }
    }

}