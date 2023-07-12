<?php
include  'Database.php';
class User extends Database{
    public function saveUser($data){
        $strData = '';
        foreach($data as $key => $value){
            $strData = $strData."?,";
        }
        $strData = rtrim($strData,',');
        $sql = "INSERT INTO users (username, email, password) VALUES ($strData)";
        $this->dataWrite($sql, $data);
    }

    public function loginCheck($username, $password){
        $password = md5($password);
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        return $this->dataRead($sql);
    }
}
?>
