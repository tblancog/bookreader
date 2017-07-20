<?php
namespace App\Repositories;
use \Spatie\PdfToText\Pdf as ReadPdf;

class PdfRepository{

  private $file;
  private $path;
  private $folder;
  private $plainContent;

  public function handle($file){
    $this->file = $file;
    $this->storeFile();
    $this->plainContent = $this->getPlainText();
  }
  public function storeFile(){
    return $path = $this->file->store( $folder );
  }
  public function getPlainText(){
    return ReadPdf::getText(
      storage_path().'/'.$this->path
    );
  }
}
