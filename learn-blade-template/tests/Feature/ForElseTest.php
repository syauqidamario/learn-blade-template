<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ForElseTest extends TestCase
{
    public function testForElse()
    {
        $this->view("forelse", ["hobbies" => []])
            ->assertSeeText("No Hobbies Here");
        $this->view("forelse", ["hobies" => ["Coding", "Gaming"]])
            ->assertSeeText("Coding")
            ->assertSeeText("Gaming");
    }
}
