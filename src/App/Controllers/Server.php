<?php

namespace Migrator\App\Controllers;

class Server
{
    public function getServers()
    {
        return json_encode(['servers'=>'a list of server ips']);
    }

    public function getServer($id)
    {
        // return servers basic information
    }

    public function getAccounts($serverId)
    {
        // return server's account
    }

    public function getAccount($id)
    {

    }
}
