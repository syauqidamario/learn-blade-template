<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundavention\Testing\WithFaker;
use Illuminate\Support\Facades\Blade;
use Tests\TestCase;

class InlineTest extends TestCase
{
    public function  testInlineBladeTemplate()
    {
        $response = Blade::render('Hello {{$name}}', ['name' => 'Syauqi']);
        self::assertEquals("Hello Syauqi", $response);
    }
}
