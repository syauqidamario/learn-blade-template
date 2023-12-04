<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SwitchTest extends TestCase
{
    public function testSwitch()
    {
        $this->view("switch", ["value" => "O"])->assertSeeText("Outstanding");
        $this->view("switch", ["value" => "E"])->assertSeeText("Exceeds Expectations");
        $this->view("switch", ["value" => "A"])->assertSeeText("Acceptable");
        $this->view("switch", ["value" => "D"])->assertSeeText("Not Pass");
    }
}
