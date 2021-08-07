<?php

$nilai = "D";

switch($nilai){
    case "A":
        echo "anda lulus dengan nilai terbaik!" . PHP_EOL;
        break;
    case "B":
    case "c":
        echo "anda lulus " . PHP_EOL;
        break;
    case "D":
        echo "anda tidak lulus" . PHP_EOL;
        break;
    default:
        echo "anda mungkin salah jurusan" . PHP_EOL;
}