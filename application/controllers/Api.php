<?php
defined('BASEPATH') OR exit('No direct script access allowed');

date_default_timezone_set('Asia/Jakarta');

class Api extends CI_Controller {

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
		
		load_library(['dhonauth', 'dhonjson']);
	}

	public function index()
	{
		// unset($_SERVER['PHP_AUTH_USER']);
		
		/*
        | -------------------------
        |  Set up API User Database
        | -------------------------
        */
		$this->dhonauth->auth('custom');
		$this->dhonjson->collect();
	}
}