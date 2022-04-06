<?php

class Migration_Project {

    public function __construct(string $database)
	{
        $this->migration =& get_instance();
        
        $this->database = $database;
        $this->dev      = false;
        require_once __DIR__ . '/../../assets/ci_libraries/DhonMigrate.php';
		$this->migration->dhonmigrate = new DhonMigrate($this->database);
    }
    
    public function up()
    {
        // /*
        // | -------------------------------------------------------------------
        // |  Api_users table
        // | -------------------------------------------------------------------
        // */
        // $this->migration->dhonmigrate->table = 'api_users';
        // $this->migration->dhonmigrate->ai()->field('id_user', 'INT');
        // $this->migration->dhonmigrate->constraint('100')->unique()->field('username', 'VARCHAR');
        // $this->migration->dhonmigrate->constraint('200')->field('password', 'VARCHAR');
        // $this->migration->dhonmigrate->field('stamp', 'INT');
        // $this->migration->dhonmigrate->add_key('id_user');
        // $this->migration->dhonmigrate->create_table();

        // $this->migration->dhonmigrate->insert(['username' => 'admin', 'password' => password_hash('admin', PASSWORD_DEFAULT)]);
        
        // /*
        // | -------------------------------------------------------------------
        // |  Kesku table
        // | -------------------------------------------------------------------
        // */
        // $this->migration->dhonmigrate->table = 'kesku_akun';
        // $this->migration->dhonmigrate->ai()->field('id_akun', 'INT');
        // $this->migration->dhonmigrate->field('id_book', 'INT');
        // $this->migration->dhonmigrate->constraint('200')->field('akunName', 'VARCHAR', 'nullable');
        // $this->migration->dhonmigrate->constraint('1')->field('akunType', 'INT');
        // $this->migration->dhonmigrate->constraint('13,2')->default(0.00)->field('budgeted', 'DECIMAL');
        // $this->migration->dhonmigrate->constraint('2')->default(0)->field('periode', 'INT');
        // $this->migration->dhonmigrate->default(0)->field('position', 'INT');
        // $this->migration->dhonmigrate->default(1)->field('is_active', 'INT');
        // $this->migration->dhonmigrate->field('stamp', 'INT');
        // $this->migration->dhonmigrate->add_key('id_akun');
        // $this->migration->dhonmigrate->create_table();

        // $this->migration->dhonmigrate->table = 'kesku_trx';
        // $this->migration->dhonmigrate->ai()->field('id_trx', 'INT');
        // $this->migration->dhonmigrate->field('id_book', 'INT');
        // $this->migration->dhonmigrate->default(0)->field('id_akun', 'INT');
        // $this->migration->dhonmigrate->default(0)->field('to_akun', 'INT');
        // $this->migration->dhonmigrate->constraint('500')->field('note', 'VARCHAR', 'nullable');
        // $this->migration->dhonmigrate->constraint('13,2')->default(0.00)->field('debit', 'DECIMAL');
        // $this->migration->dhonmigrate->constraint('13,2')->default(0.00)->field('kredit', 'DECIMAL');
        // $this->migration->dhonmigrate->field('stamp', 'INT');
        // $this->migration->dhonmigrate->add_key('id_trx');
        // $this->migration->dhonmigrate->create_table();

        // /*
        // | -------------------------------------------------------------------
        // |  Tbl_alumni table
        // | -------------------------------------------------------------------
        // */
        // $this->migration->dhonmigrate->table = 'tbl_alumni';
        // $this->migration->dhonmigrate->ai()->field('id_alumni', 'INT');
        // $this->migration->dhonmigrate->constraint('200')->field('fullName', 'VARCHAR');
        // $this->migration->dhonmigrate->constraint('100')->field('email', 'VARCHAR');
        // $this->migration->dhonmigrate->constraint('50')->field('phone', 'VARCHAR');
        // $this->migration->dhonmigrate->field('stamp', 'INT');
        // $this->migration->dhonmigrate->add_key('id_alumni');
        // $this->migration->dhonmigrate->create_table();

        // $this->migration->dhonmigrate->insert(['fullName' => 'Muhammad Ramadhon', 'email' => 'muhammad_r@email.com', 'phone' => '62812345678']);
        // $this->migration->dhonmigrate->insert(['fullName' => 'Muhammad Ibrahim', 'email' => 'm_ibrahim@email.com', 'phone' => '628156789012']);
        // $this->migration->dhonmigrate->insert(['fullName' => 'Shireen Haura', 'email' => 'shireen_h@email.com', 'phone' => '628116789022']);
        // $this->migration->dhonmigrate->insert(['fullName' => 'Intan Yanti', 'email' => 'intan_y@email.com', 'phone' => '628218901233']);
        // $this->migration->dhonmigrate->insert(['fullName' => 'Rikpan Maulana', 'email' => 'rmaulana@email.com', 'phone' => '628111223456']);

        // /*
        // | -------------------------------------------------------------------
        // |  User table
        // | -------------------------------------------------------------------
        // */
        // $this->migration->dhonmigrate->table = 'user_ci';
        // $this->migration->dhonmigrate->ai()->field('id', 'INT');
        // $this->migration->dhonmigrate->constraint('255')->unique()->field('email', 'VARCHAR');
        // $this->migration->dhonmigrate->constraint('200')->field('fullName', 'VARCHAR');
        // $this->migration->dhonmigrate->constraint('32')->field('auth_key', 'VARCHAR');
        // $this->migration->dhonmigrate->constraint('255')->field('password_hash', 'VARCHAR');
        // $this->migration->dhonmigrate->constraint('255')->default(null)->field('password_reset_token', 'VARCHAR', 'nullable');
        // $this->migration->dhonmigrate->constraint('6')->default('10')->field('status', 'smallint');
        // $this->migration->dhonmigrate->field('created_at', 'INT');
        // $this->migration->dhonmigrate->field('updated_at', 'INT');
        // $this->migration->dhonmigrate->constraint('255')->default(null)->field('verification_token', 'VARCHAR', 'nullable');
        // $this->migration->dhonmigrate->constraint('30')->field('google_id', 'VARCHAR', 'nullable');
        // $this->migration->dhonmigrate->constraint('200')->field('google_name', 'VARCHAR', 'nullable');
        // $this->migration->dhonmigrate->constraint('200')->field('google_picture', 'VARCHAR', 'nullable');
        // $this->migration->dhonmigrate->constraint('20')->field('google_gender', 'VARCHAR', 'nullable');
        // $this->migration->dhonmigrate->constraint('200')->field('google_link', 'VARCHAR', 'nullable');
        // $this->migration->dhonmigrate->constraint('30')->field('fb_id', 'VARCHAR', 'nullable');
        // $this->migration->dhonmigrate->constraint('200')->field('fb_name', 'VARCHAR', 'nullable');
        // $this->migration->dhonmigrate->constraint('200')->field('fb_picture', 'VARCHAR', 'nullable');
        // $this->migration->dhonmigrate->add_key('id');
        // $this->migration->dhonmigrate->create_table();

        // $this->migration->dhonmigrate->table = 'user_device';
        // $this->migration->dhonmigrate->ai()->field('id', 'INT');
        // $this->migration->dhonmigrate->default('0')->field('id_user', 'INT');
        // $this->migration->dhonmigrate->default('0')->field('id_device', 'INT');
        // $this->migration->dhonmigrate->default('0')->field('id_address', 'INT');
        // $this->migration->dhonmigrate->field('stamp', 'INT');
        // $this->migration->dhonmigrate->field('last_login', 'INT');
        // $this->migration->dhonmigrate->add_key('id');
        // $this->migration->dhonmigrate->create_table();

        // $this->migration->dhonmigrate->table = 'devices';
        // $this->migration->dhonmigrate->ai()->field('id_device', 'INT');
        // $this->migration->dhonmigrate->constraint('1000')->unique()->field('htmlentities', 'VARCHAR', 'nullable');
        // $this->migration->dhonmigrate->constraint('100')->field('device_name', 'VARCHAR', 'nullable');
        // $this->migration->dhonmigrate->add_key('id_device');
        // $this->migration->dhonmigrate->create_table();

        // $this->migration->dhonmigrate->table = 'addresses';
        // $this->migration->dhonmigrate->ai()->field('id_address', 'INT');
        // $this->migration->dhonmigrate->constraint('50')->unique()->field('ip_address', 'VARCHAR', 'nullable');
        // $this->migration->dhonmigrate->constraint('1500')->field('ip_info', 'VARCHAR', 'nullable');
        // $this->migration->dhonmigrate->add_key('id_address');
        // $this->migration->dhonmigrate->create_table();

        // $this->migration->dhonmigrate->table = 'items';
        // $this->migration->dhonmigrate->ai()->field('id_item', 'INT');
        // $this->migration->dhonmigrate->constraint('100')->unique()->field('barcode', 'VARCHAR', 'nullable');
        // $this->migration->dhonmigrate->constraint('200')->field('item_name', 'VARCHAR', 'nullable');
        // $this->migration->dhonmigrate->field('price', 'INT');
        // $this->migration->dhonmigrate->field('stamp', 'INT');
        // $this->migration->dhonmigrate->add_key('id_item');
        // $this->migration->dhonmigrate->create_table();

        // /*
        // | -------------------------------------------------------------------
        // |  User Yii Table
        // | -------------------------------------------------------------------
        // */
        // $this->migration->dhonmigrate->table = 'user_yii';
        // $this->migration->dhonmigrate->ai()->field('id', 'INT');
        // $this->migration->dhonmigrate->constraint('255')->unique()->field('username', 'VARCHAR');
        // $this->migration->dhonmigrate->constraint('32')->field('auth_key', 'VARCHAR');
        // $this->migration->dhonmigrate->constraint('255')->field('password_hash', 'VARCHAR');
        // $this->migration->dhonmigrate->constraint('255')->unique()->default(null)->field('password_reset_token', 'VARCHAR', 'nullable');
        // $this->migration->dhonmigrate->constraint('255')->unique()->field('email', 'VARCHAR');
        // $this->migration->dhonmigrate->constraint('6')->default('10')->field('status', 'SMALLINT');
        // $this->migration->dhonmigrate->field('created_at', 'INT');
        // $this->migration->dhonmigrate->field('updated_at', 'INT');
        // $this->migration->dhonmigrate->constraint('255')->default(null)->field('verification_token', 'VARCHAR', 'nullable');
        // $this->migration->dhonmigrate->add_key('id');
        // $this->migration->dhonmigrate->create_table();

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