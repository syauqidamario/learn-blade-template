<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IfTestStatement extends TestCase
{
    public function testIfStatement()
    {
        $this->view("if", ["hobbies" => []])->assertSeeText("My hobby is a secret for you!", false);
        $this->view("if", ["hobbies" => ["Coding"]])->assertSeeText("I have one hobby!");
        $this->view("if", ["hobbies" => ["Coding", "Cooking"]])->assertSeeText("I have multiple hobbies!");
    }
}
