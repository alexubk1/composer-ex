<?php
require "../vendor/autoload.php";

use HelloWorld\SayHello;
use src\wcs\hello;

$HelloWorld = new Hello;
echo $HelloWorld->talk();
echo SayHello::world();