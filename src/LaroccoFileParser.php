<?php

namespace bahaeddine\larocco;

use Illuminate\Support\Facades\File;

class LaroccoFileParser
{
    protected $filename;

    protected $data;

    public function __construct($filename)
    {
        $this->filename = $filename;

        $this->splitFile();
    }

    public function getData()
    {
        return $this->data;
    }

    protected function splitFile()
    {
        preg_match('/^\-{3}(.*?)\-{3}(.*)/s', 
        File::get($this->filename), 
        $this->data);

        // dd($this->data);
    }
}