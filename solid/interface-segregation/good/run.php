<?php

require_once 'Memcached.php';
require_once 'SessionCrudInterface.php';
require_once 'GarbageCollectionInterface.php';
require_once 'FileSessionHandler.php';
require_once 'MemcachedSessionHandler.php';

echo "Using Memcached handler...\n";
$session = new MemcachedSessionHandler();
$session->read(123);
