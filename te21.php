<?php
/**
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 */
echo "_ DIR _=";__DIR__.PHP_EOL;
chdir(dirname(__DIR__));
