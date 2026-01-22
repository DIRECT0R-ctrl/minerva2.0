<?php

class Submission
{
    private $id;
    private $workId;
    private $studentId;
    private $content;
   

    public function __construct( $workId, $studentId, $content)
    {
       
        $this->workId = $workId;
        $this->studentId = $studentId;
        $this->content = $content;
    
    }
}
