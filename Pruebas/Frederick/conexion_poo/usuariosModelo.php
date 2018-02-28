<?php
    
    require_once "Modelo.php";
    
    class usuariosModelo extends Modelo
    {
        public function __construct(){
            parent::__construct();
        }
        
        public function get_users(){
            $result = $this->_db->query('SELECT * FROM usuario');
            $users = $result->fetch_all(MYSQLI_ASSOC);
            return $users;
        }
    }

?>