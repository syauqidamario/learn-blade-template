<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ExtensionTest extends TestCase
{
    public function testExtendingBlade()
    {
        $this->view("extending", ["name" => "Syauqi"])->assertSeeText("Hello Syauqi");
    }
}
