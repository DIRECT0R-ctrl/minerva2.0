<?php

class Attendance
{
    private $id;
    private $studentId;
    private $date;
    private $status;

    public function __construct( $studentId, $date, $status)
    {
      
        $this->studentId = $studentId;
        $this->date = $date;
        $this->status = $status; // present / absent
    }
}
