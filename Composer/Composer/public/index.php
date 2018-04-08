<?php
require "../vendor/autoload.php";

use HelloWorld;
use hello;

$HelloWorld = new Hello();
echo $HelloWorld->talk();
echo SayHello::world();