<?php
require_once 'user.php';
class teacher extends user {
    public function __constact($name,$email,$password)
    {
        parent::__construct($name,$email,$password);
    }
}