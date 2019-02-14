<?php
require __DIR__ . '/../../vendor/autoload.php';

use Migrator\App\Migration;

$migration = new Migration();
$migration->handle();