<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DirectiveFormTest extends TestCase
{
    public function testForm()
    {
        $this->view("form", ["user" => [
            "premium" => true,
            "name" => "Syauqi",
            "admin" => true
        ]])->assertSee("checked")->assertSee("Syauqi")->assertDontSee("readonly");
    }
}
