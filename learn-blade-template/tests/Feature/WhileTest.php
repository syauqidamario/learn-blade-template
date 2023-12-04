<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WhileTest extends TestCase
{
    public function testWhile()
    {
        $this->view("while", ["i" => 0])
            ->assertSeeText("The current value is 10")
            ->assertSeeText("The current value is 50")
            ->assertSeeText("The current value is 90");
    }
}
