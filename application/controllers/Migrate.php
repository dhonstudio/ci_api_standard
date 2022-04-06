<?php

class Migrate extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();

        /*
        | -------------------------------------------------------------------
        |  Set up this API User Database, Migration Database, and Migration Class
        | -------------------------------------------------------------------
        */
        $api_db             = 'project';
        $this->database     = 'project';
        $this->migration    = 'project';

        require_once __DIR__ . '/../../assets/ci_libraries/DhonAuth.php';
        require_once __DIR__ . '/../../assets/ci_libraries/DhonJSON.php';
        require_once __DIR__ . '/../../assets/ci_libraries/DhonMigrate.php';
		$this->dhonauth     = new DhonAuth;
		$this->dhonjson     = new DhonJSON;

        $this->dhonauth->auth($api_db);
    }

    public function index()
    {
        $this->dhonmigrate = new DhonMigrate($this->database);
        $this->dhonmigrate->version = 20220127090401;
        $this->dhonmigrate->migrate($this->migration);

        $response   = 'Migration success';
        $status     = '200';
        $this->dhonjson->send($response, $status);
    }
}