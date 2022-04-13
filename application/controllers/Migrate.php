<?php

class Migrate extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();

        $this->path = ENVIRONMENT == 'development' ? 		
		/*
        | -------------------------
        |  Set up Path to Assets
        | -------------------------
        */
		/* Development */	'/../../':
		/* Production */ 	'../../../../';
        
        $this->load->helper('libraries');

        load_library(['dhonauth', 'dhonjson', 'dhonmigrate']);

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
        /*
        | -------------------------
        |  Set up Migration Method ('', 'change', or 'drop')
        | -------------------------
        */
        $this->dhonmigrate->migrate($this->migration);

        $response   = 'Migration success';
        $status     = '200';
        $this->dhonjson->send($response, $status);
    }
}