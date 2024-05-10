<?php
require_once 'Model/UserClass.php';

 
class ReadAllController {
    private $result;

    public function __construct() {
        $this->result = new User();
    }

    public function index() {
        return $this->result->ReadAllRecords();
    }
}
?>
