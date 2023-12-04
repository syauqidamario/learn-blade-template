<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IssetTest extends TestCase
{
    public function testIssetAndEmpty()
    {
        $this->view("issetempty", [])->assertDontSeeText("Hello");
        $this->view("issetempty", ["name" => "Syauqi"])->assertSeeText("Hello, my name is Syauqi", false)->assertSeeText("Not in a relationship.", false);
        $this->view("issetempty", ["name" => "Syauqi", "hobbies" => ["Coding"]])->assertSeeText("Hello, my name is Syauqi", false)->assertDontSeeText("Not in a relationship.", false);
    }
}
