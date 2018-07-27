<?php
  require_once 'vendor/autoload.php';

 /*
  * Parse previews world for their pictures.
  * 
  * 
  * 
  */ 

  class PrewviewsWorldPHP
  {
    public $ROOT_URL    = 'https://previewsworld.com';
    public $CATALOG_URL = 'https://previewsworld.com/Catalog/';
    public $STOCK_URL   = 'https://previewsworld.com/SiteImage/CatalogImage/';

    function __construct() {
      $this->root_url     = $ROOT_URL;
      $this->catalogUrl   = $CATALOG_URL;
      $this->stockUrl     = $STOCK_URL;
    }

    function getProduct($diamondID, $stockID = null) {
      if (!$diamondID){
        throw new Exception("No diamond ID. This requires a diamon ID as the first argument.");
      }

      if (!stockID) {
        $url = $this->catalogUrl . $diamondID;
        return $url;
      }
      else {
        $url = $this->stockUrl . $stockID;
        return $url;
      }
    }
  }
  