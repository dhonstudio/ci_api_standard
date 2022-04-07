<?php

class Migration_Custom {

    public function __construct(string $database)
	{
        $this->migration =& get_instance();

        $this->migration->load->helper('libraries');
        
        $this->database = $database;
        $this->dev      = false;
        
		$this->migration->dhonmigrate = new DhonMigrate($this->database);
    }
    
    public function up()
    {
        /*
        | ----------------
        |  Api_users table
        | ----------------
        */
        $this->migration->dhonmigrate->table = 'api_users';
        $this->migration->dhonmigrate->ai()->field('id_user', 'INT');
        $this->migration->dhonmigrate->constraint('100')->unique()->field('username', 'VARCHAR');
        $this->migration->dhonmigrate->constraint('200')->field('password', 'VARCHAR');
        $this->migration->dhonmigrate->field('stamp', 'INT');
        $this->migration->dhonmigrate->add_key('id_user');
        $this->migration->dhonmigrate->create_table('force');

        $this->migration->dhonmigrate->insert([
            'username' => 'admin', 
            'password' => password_hash('admin', PASSWORD_DEFAULT)
        ]);

        if ($this->dev == false) $this->_dev();
    }

    private function _dev()
    {
        $this->migration->dhonmigrate = new DhonMigrate($this->database.'_dev');
        $this->dev = true;
        $this->up();
    }

    public function change()
    {
    }

    public function drop()
    {
    }
}