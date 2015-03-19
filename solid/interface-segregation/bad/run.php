<?php

require_once 'Memcached.php';
require_once 'MemcachedSessionHandler.php';

echo "Using Memcached handler...\n";
$session = new MemcachedSessionHandler();
$session->read(123);
