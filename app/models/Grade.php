<?php

class Grade
{
    private $id;
    private $submissionId;
    private $score;
    private $comment;

    public function __construct( $submissionId, $score, $comment)
    {
     
        $this->submissionId = $submissionId;
        $this->score = $score;
        $this->comment = $comment;
    }
}
