<?php

class AccountModel extends DB{
    public function Login($user ,$pass){
        $qr = "SELECT * FROM account where User = '".$user."' and password = '".$pass."' ";
        return $this->excute($qr);
    }

}
?>