<?php
    
    require_once "core.php";
    
    class modelo
    {
        protected $_db;
        
        public function __construct(){
            $this->_db = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME,DB_PORT);
            if ($this->_db->connect_errno) {
                echo "Fallo al conectar MySQL: ".$this->_db->connect_error;
                return;
            }
            $this->_db->set_charset(DB_CHARSET);
        }
    }

?>