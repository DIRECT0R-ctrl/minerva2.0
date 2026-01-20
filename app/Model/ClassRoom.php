<?php

class ClassRoom
{
    private $id;
    private $name;
    private $teacherId;

    public function __construct( $name, $teacherId)
    {
        $this->name = $name;
        $this->teacherId = $teacherId;
    }

    public function getName() { return $this->name; }
}
