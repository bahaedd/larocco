<?php

namespace bahaeddine\larocco\Tests;

use bahaeddine\larocco\MarkdownParser;
use Orchestra\Testbench\TestCase as TestbenchTestCase;
use Parsedown;

class MarkdownTest extends TestbenchTestCase
{
    /** @test */
    public function simple_markdown_is_parsed()
    {
        $this->assertEquals('<h1>Heading</h1>', MarkdownParser::parse('# Heading'));
    }
}