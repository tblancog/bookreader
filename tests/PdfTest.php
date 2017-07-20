<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use  \Spatie\PdfToText\Pdf as ReadPdf;

class PageTest extends TestCase
{
    /**
     * Test page shows "Please upload a pdf file".
     *
     * @return void
     */
    // public function testShowsUploadFilePage()
    // {
    //     $this->visit('/')
    //         ->see('Please upload a pdf file')
    //         ->dontSee('Not Found')
    //         ->dontSee('Error');
    // }
    public function testAPdfFileExistsInStorage(){
      $dummyFile = storage_path().'/data/flow.pdf';

      $this->assertEquals(
        file_exists($dummyFile), true
      );
    }
    public function testPdfFileCanBeReadBy3rdPartyPlugin(){
      $dummyFile = storage_path().'/data/flow.pdf';
      $text = ReadPdf::getText($dummyFile);

      $this->assertNotEquals(
        $text,
        empty($text)
      );
    }
}
