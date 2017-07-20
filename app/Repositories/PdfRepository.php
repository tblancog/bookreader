<?php
namespace App\Repositories;
use \Spatie\PdfToText\Pdf as ReadPdf;

class PdfRepository{

  private $file;
  private $folder;
  private $storage;
  private $plainContent;

  public function __construct(){
    $this->folder = 'pdfs';
    $this->storage = storage_path().'/app/';
  }

  public function handle($file){
    $this->file = $file;
    $a = $this->storeFile();
    $this->plainContent = $this->getPlainText();
    return $this->countUniqueValues();
  }
  public function storeFile(){
    $this->path = $this->file->store( $this->folder );
  }
  public function getPlainText(){
    return ReadPdf::getText(
      $this->storage . $this->path
    );
  }

  public function countUniqueValues(){
    $text = strtolower($this->plainContent);
    return $list_reps = array_count_values(
      str_word_count($text, 1)
    );
  }
}
