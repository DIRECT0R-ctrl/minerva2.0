<?php
require_once 'User.php';

class Student extends User
{
    private $classId;

    public function __construct( $name, $email, $password, $classId)
    {
        parent::__construct( $name, $email, $password, 'student');
        $this->classId = $classId;
    }

    public function getClassId()
    {
        return $this->classId;
    }
}
