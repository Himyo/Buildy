<?php

$foo = "la/er/ho/ei";

echo stripos($foo, '/');
echo strpos($foo, '/');
echo stripos($foo, '/', 2);
echo strripos($foo, '/');
echo strripos($foo, '/', 2);
