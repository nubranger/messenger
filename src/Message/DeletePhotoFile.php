<?php

namespace App\Message;

class DeletePhotoFile
{
    private $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function getFilename(): string
    {
        return $this->filename;
    }
}