<?php

class Result
{
    public bool $success;
    public $result;
    public string $message;

    public function __construct()
    {
        $this->success = false;
        $this->result = [];
        $this->message = '';
    }
}
