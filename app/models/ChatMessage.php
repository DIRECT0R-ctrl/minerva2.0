<?php

class ChatMessage
{
    private $id;
    private $userId;
    private $classId;
    private $message;
    private $createdAt;

    public function __construct( $userId, $classId, $message, $createdAt)
    {
       
        $this->userId = $userId;
        $this->classId = $classId;
        $this->message = $message;
        $this->createdAt = $createdAt;
    }
}
