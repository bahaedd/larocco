<?php

namespace bahaeddine\larocco\Tests;

use bahaeddine\larocco\LaroccoFileParser;
use Orchestra\Testbench\TestCase;

class LaroccoFileParserTest extends TestCase
{
   public function the_head_and_body_gets_split()
   {
       $laroccoFileParser = (new LaroccoFileParser(__DIR__.'/../blogs/MarkFile1.md'));

       $data = $laroccoFileParser->getData();

       $this->assertContains('Title: my title', $data[1]);
       $this->assertContains('Description: my description', $data[1]);
       $this->assertContains('Blog post body here', $data[2]);
   }
}