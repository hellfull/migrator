<?php

namespace Migrator\App;

use Dotenv\Dotenv;
use Migrator\App\Controllers\Account;
use Migrator\App\Controllers\Data;
use Migrator\App\Controllers\Server;

class Migration
{
    private $dotenv;

    public function __construct()
    {

    }

    /**
     *  Handles the procedure of the Migration
     */
    public function handle()
    {
        $this->dotenv = Dotenv::create(dirname(dirname(__DIR__)));
        $this->dotenv->load();
        // gets the list of servers to loop on
        $data = new Data();
        $servers = $data->getDataFromJson();
        foreach($servers->data as $server)
        {
            // for each s3bucket download the backup
            $this->getBackups($server->s3bucket);
        }
    }

    public function getBackups($bucket)
    {
        $s3accesskey = getenv('S3_ACCESS_KEY');
        $s3secretkey = getenv('S3_SECRET_KEY');
        $today = date('Y-m-d');
        exec("s3cmd --no-check-certificate --access_key='".$s3accesskey."' --secret_key='".$s3secretkey."' get s3://$bucket/$today");
    }


}


