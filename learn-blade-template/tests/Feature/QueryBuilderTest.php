<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class QueryBuilderTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        DB::delete("delete from categories");
    }

    public function testInsert()
    {
        DB::table("categories")->insert([
            'id' => 'GADGET',
            'name' => 'Gadget'
        ]);
        DB::table("categories")->insert([
            'id' => 'FOOD',
            'name' => 'Food'
        ]);
        $result = DB::select("SELECT COUNT(id) as total FROM categories");
        self::assertEquals(2, $result[0]->total);
    }

    public function testSelect()
    {
        $this->testInsert();

        $collection = DB::table("categories")->select(["id", "name"])->get();
        self::assertNotNull($collection);

        $collection->each(function ($record) {
            Log::info(json_encode($record));
        });
    }
}
