<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use HelloWorld\SayHello;

echo SayHello::world();
echo " ";
echo SayHello::to_me('Daniel');