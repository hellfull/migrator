<?php

namespace Tartarus\App\Controllers;

class Server
{
    public function getServers()
    {
        return json_encode(['tartarhost'=>'a list of servers']);
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
