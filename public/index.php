<?php
use App\Wcs\Hello;

include __DIR__ . './../vendor/autoload.php';
$hello = new Hello();
echo $hello->text();

