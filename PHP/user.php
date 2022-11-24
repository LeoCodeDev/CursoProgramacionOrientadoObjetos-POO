<?php
require_once('account.php');
class User extends Car {

    public function __construct($name ,$document){
        parent::__construct($name ,$document);
    }
}