<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeTest extends TestCase
{
    public function testLayout()
    {

        $this->view("include", [])
            ->assertSeeText("Programmer Zaman Now")
            ->assertSeeText("Welcome to our website")
            ->assertSeeText("Welcome to the Web");

        $this->view("include", ["title" => "Syauqi"])
            ->assertSeeText("Syauqi")
            ->assertSeeText("Welcome to our website")
            ->assertSeeText("Welcome to the Web");
    }
}
