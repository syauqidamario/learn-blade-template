<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EachTest extends TestCase
{
    public function testEach()
    {
        $this->view("each", ["users" => [
            [
                "name" => "John",
                "hobbies" => ["Coding", "Gaming"]
            ],
            [
                "name" => "Djohan",
                "hobbies" => ["Coding", "Gaming"]
            ]
        ]])->assertSeeInOrder([".red", "John", "Coding", "Gaming", "Djohan", "Coding", "Gaming"]);
    }
}
