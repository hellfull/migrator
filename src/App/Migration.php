<?php

namespace Migrator\App;

use Migrator\App\Controllers\Account;
use Migrator\App\Controllers\Server;

class Migration
{
    private $server;
    private $account;

    public function __construct()
    {
        $this->server = Server::getServers();
    }

    public function handle()
    {
        // TODO continue
        echo $this->server;
    }
}


