<?php

namespace Tests\Feature;

use App\Models\Root\File;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FileTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;

    public function test_file_create_model()
    {
        $files = factory(File::class, 100)->create();
        $this->assertTrue($files->count() > 50);
    }
}
