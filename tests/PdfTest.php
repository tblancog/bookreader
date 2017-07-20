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

    /**
     * Test that it counts words from plain text
     * i'll be expecting an array of integers where the
     * keys are words being repeated
     * @return [type] [description]
     */
    public function testCountWordsInPlaintext(){
      $dummyFile = storage_path().'/data/flow.pdf';
      $text = ReadPdf::getText($dummyFile);
      $text = strtolower($text);
      $list_reps = array_count_values(
        str_word_count($text, 1)
      );
      $any_word = array_rand($list_reps);
      $any_rep = array_rand( array_keys($list_reps) );

      $this->assertInternalType('string', $any_word);
      $this->assertInternalType('integer', $any_rep);
    }

    
}
