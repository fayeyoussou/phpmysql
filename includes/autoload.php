<?php
function autoloader($className) {
    include __DIR__ . '/../classes/'.str_replace('\\','/',$className).'.php';
}
spl_autoload_register('autoloader');