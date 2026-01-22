<?php

class Work
{
    private $id;
    private $title;
    private $description;
    private $classId;
   

    public function __construct($title, $description, $classId)
    {
       
        $this->title = $title;
        $this->description = $description;
        $this->classId = $classId;
        
    }
}
