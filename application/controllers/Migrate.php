<?php

class Migrate extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();

        $this->load->helper('libraries');

        /*
        | ------------------------------------------------------------------
        |  Set up API User Database, Migration Database, and Migration Class
        | ------------------------------------------------------------------
        */
        $api_db             = 'custom';
        $this->database     = 'custom';
        $this->migration    = 'custom';

        $this->dhonmigrate  = new DhonMigrate($this->database);

        /*
        | -------------------------
        |  Set up Migration Version
        | -------------------------
        */
        $this->dhonmigrate->version = 202204060859;

        $this->dhonauth->auth($api_db);
    }

    public function index()
    {
        $this->dhonmigrate->migrate($this->migration);

        $response   = 'Migration success';
        $status     = '200';
        $this->dhonjson->send($response, $status);
    }
}