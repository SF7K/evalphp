<?
    include('Request.php');
    class User {
        public $_username;
        public $_name;
        public $_password;

        use Request;

        public function __construct($username, $name, $password) {
            $this->_username = $username;
            $this->_name = $name;
            $this->_password = $password;
        }

    }
?>









