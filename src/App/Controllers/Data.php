<?php

namespace Migrator\App\Controllers;

class Data
{
    private $dataPath;
    private $dataFilename;

    /**
     * Data constructor.
     * Initialises data folder path and data filename.
     */
    public function __construct()
    {
        $this->dataPath = dirname(dirname(dirname(dirname(__FILE__))));
        $this->dataFilename = 'data.json';
    }

    /**
     * Gets data.json
     * returns @Array
     */
    public function getDataFromJson()
    {
        $fileContentss = file_get_contents($this->dataPath.'\\'.$this->dataFilename);
        //echo $this->dataPath.'\\'.$this->dataFilename;
        return json_decode($fileContentss);
    }

    public function getDataFromS3()
    {

    }
}