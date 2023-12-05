<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InheritanceTest extends TestCase
{
    public function testParent()
    {
        $this->view("child", [])->assertSeeText("Application Name - Main Page")
            ->assertSeeText("Header Description")->assertSeeText("This is the main page")
            ->assertDontSeeText("Default Content");
    }
}
