<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use \Spatie\PdfToText\Pdf as ReadPdf;

class PageTest extends TestCase
{
    /**
     * Test that a pdf can exist in storage.
     *
     * @return void
     */
    public function testAPdfFileExistsInStorage(){
      $dummyFile = storage_path().'/data/flow.pdf';

      $this->assertEquals(
        file_exists($dummyFile), true
      );
    }
    /**
     * Test that a 3rd party plugin can read pdf and extract text
     * @return [type] [description]
     */
    public function testPdfFileCanBeReadBy3rdPartyPlugin(){
      $dummyFile = storage_path().'/data/flow.pdf';
      $text = ReadPdf::getText($dummyFile);

      $this->assertNotEquals(
        $text,
        empty($text)
      );
    }
}
