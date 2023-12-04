<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeConditionTest extends TestCase
{
    public function testIncludeCondition()
    {
        $this->view("include-condition", ["user" => [
            "name" => "Syauqi",
            "owner" => true
        ]])->assertSeeText("Welcome, Owner")->assertSeeText("Welcome, Syauqi");

        $this->view("include-condition", ["user" => [
            "name" => "Syauqi",
            "owner" => false
        ]])->assertDontSeeText("Welcome, Owner")->assertSeeText("Welcome, Syauqi");
    }
}
