<?php

namespace Tartarus\App;

use Tartarus\App\Controllers\Account;
use Tartarus\App\Controllers\Server;


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
        return $this->server;
    }
}


