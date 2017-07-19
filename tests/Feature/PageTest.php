<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PageTest extends TestCase
{
    /**
     * Test page shows "Please upload a pdf file".
     *
     * @return void
     */
    public function testShowsUploadFilePage()
    {
        $this->visit('/')
            ->see('Please upload a pdf file')
            ->dontSee('Not Found')
            ->dontSee('Error');
    }
}
