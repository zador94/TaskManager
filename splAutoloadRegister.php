<?php
function splAutoload($name)
{
    include $name . '.php';
}

spl_autoload_register('splAutoload');