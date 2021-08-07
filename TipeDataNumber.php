<?php

// Tipe data Integer
echo "Decimal : ";
var_dump(1234);

echo "Octal : ";
var_dump(01234);

echo "Hexadecimal : ";
var_dump(0x1A);

echo "Binary : ";
var_dump(0b111111);

echo "Underscore di Number : ";
var_dump(1_234_567);

// Tipe data Float
echo "Floating Point : ";
var_dump(1.234);

echo "Floating Point dengan E Notation : (1.7 x 1000) : ";
var_dump(1.7e3);

echo "Floating Point dengan E Notation minus : (1.7 x 0.001) : ";
var_dump(1.7e-3);

echo "Underscore Floating Point : ";
var_dump(1_123.123);

// kapasitas batas integer pada PHP komputer 32bit
echo "Integer Overflow 32bit : ";
var_dump(2147483647);

// kapasitas batas integer pada PHP komputer 64bit
echo "Integer Overflow 64bit : ";
var_dump(9223372036854775808);