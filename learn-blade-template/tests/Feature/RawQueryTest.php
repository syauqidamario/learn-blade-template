<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class RawQueryTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        DB::delete('DELETE FROM categories');
    }

    public function test_example(): void
    {
        DB::insert("INSERT INTO categories(id, name, description, created_at) VALUES(?, ?, ?, ?)", [
            'GADGET', 'Gadget', 'Gadget Category', '2020-01-01 00:00:00'
        ]);

        $results = DB::select("SELECT * FROM categories WHERE id = ?", ['GADGET']);

        self::assertEquals(1, count($results));
        self::assertEquals('GADGET', $results[0]->id);
        self::assertEquals('Gadget', $results[0]->name);
        self::assertEquals('Gadget Category', $results[0]->description);
        self::assertEquals('2020-01-01 00:00:00', $results[0]->created_at);
    }

    public function testNamedBinding(): void
    {
        DB::insert("INSERT INTO categories(id, name, description, created_at) VALUES (:id, :name, :description, :created_at)", [
            "id" => 'GADGET',
            "name" => 'Gadget',
            "description" => 'Gadget Category',
            "created_at" => '2020-01-01 00:00:00'
        ]);

        $results = DB::select("SELECT * FROM categories WHERE id = :id", [
            "id" => 'GADGET'
        ]);
        self::assertEquals(1, count($results));
        self::assertEquals('GADGET', $results[0]->id);
        self::assertEquals('Gadget', $results[0]->name);
        self::assertEquals('Gadget Category', $results[0]->description);
        self::assertEquals('2020-01-01 00:00:00', $results[0]->created_at);
    }
}
