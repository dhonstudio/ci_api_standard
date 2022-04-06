<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BackupDB extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

        $this->load->helper('file');
        $this->load->helper('download');
	}

    public function index()
    {
        $db         = $_GET['db'];

        if (!is_dir('./backup')) {
            mkdir('./backup', 0777, true);
        }

        // $fileUpload = fopen('./backup/db_'.$db.'-'.date('YmdHis', time()).'.sql', "w");
        $fileUpload = fopen('./backup/db_'.$db.'.sql', "w");

        $select_db 	= $this->load->database($db, TRUE);
        $tables     = $select_db->list_tables();

        $myutil     = $this->load->dbutil($select_db, TRUE);        

        $prefs = array(
            'tables'     => $tables,
            'ignore'     => array(),
            'format'     => 'txt',
            'filename'   => 'db_'.$db.'.sql',
            'add_drop'   => TRUE, 
            'add_insert' => TRUE,
            'newline'    => "\n"
        );

        $backup = $myutil->backup($prefs);

        fwrite($fileUpload, $backup);
        fclose($fileUpload);
    }
}