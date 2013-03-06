<?php
class Frame_Model_App extends model {

    protected $sqls = array(
        'select' => 'select * from mini_app;',
    );
    
    public function __construct(){
        parent::__construct();
    }

    public function select($sql,$data){
        return mysql::fetch($sql, $data);
    }

}