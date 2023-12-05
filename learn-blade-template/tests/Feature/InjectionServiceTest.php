<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InjectionServiceTest extends TestCase
{
    public function testServiceInjection()
    {
        $this->view("service-injections", ["name" => "Syauqi"])->assertSeeText("Hello Syauqi");
    }
}
