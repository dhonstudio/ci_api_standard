<?php
defined('BASEPATH') OR exit('No direct script access allowed');

date_default_timezone_set('Asia/Jakarta');

class Api extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('libraries');

		$this->dhonauth = new DhonAuth;
		$this->dhonjson = new DhonJSON;
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