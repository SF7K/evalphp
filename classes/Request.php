<?
    try {
        $db = new PDO('mysql:hots=localhost;dbname=users;charset=utf8','root','root');
    } catch(Exception $e) {
        die('Error in ' . $e->getMessage());
    };

    trait Request {
        
        static function createUser($username, $name, $password) {
            global $db;
    
            $newUser = new User($username, $name, $password);

            $req = $db->prepare('INSERT INTO users(username, name, password) VALUES(:username, :name, :password)');
            $req->execute(array(
                'username' => $newUser->_username,
                'name' => $newUser->_name,
                'password' => $newUser->_password,
            ));
        }

        static function findUser($username) {
            global $db;
    
            $user = $db->query("SELECT * FROM `users` WHERE `username` LIKE '".$username."'");
            $foundUser = $user->fetch();
    
            if($foundUser['username']) {
                return $foundUser;
            } else {
                return false;
            }
        }
        
        static function displayUsers() {
            global $db;
    
            $users = $db->query('SELECT * FROM users');        
            echo "~~~~~~~~~~~~~~~";
            echo "<br/>";

            foreach ($users as $user) {
                echo "Username :" . $user['username'] ."<br/>";
                echo "Name :" . $user['name'] ."<br/>";
                echo "~~~~~~~~~~~~~~~";
                echo "<br/>";
            }
        }
    };





?>