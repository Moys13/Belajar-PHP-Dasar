<?php

function sayHello(string $nama, callable $filter)
{
    $finalname = call_user_func($filter, $nama);
    echo "Hello $finalname" . PHP_EOL; 
}

Sayhello("bagas", function ($nama) {return strtoupper($nama);});
sayhello("babaa", fn($nama) => strtoupper($nama));
sayhello("indah", "strtoupper");
sayhello("indah", "strtolower");