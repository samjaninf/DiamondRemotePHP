<?php

  require_once 'vendor/autoload.php';

/*
 * Parse images from previews world and return the link with the proper Stock List code
 * 
 * 
 * 
 */
  class DiamondRemotePHP
  {
    
    private $username     = '';
    private $password     = '';
    private $custnumber   = '';
    private $download_dir = '';
  
    // Base wobsite urls
    public $ROOT_URL                      = 'https://retailerservices.diamondcomics.com';
    public $LOGIN_URL                     = 'https://retailerservices.diamondcomics.com/Login/Login';
    public $LOGOUT_URL                    = 'https://retailerservices.diamondcomics.com/Login/Logout';
    public $ITEM_URL_BASE                 = 'https://retailerservices.diamondcomics.com/ShoppingList/AddItem/';
    public $DEFAULT_URL                   = 'https://retailerservices.diamondcomics.com/';
    public $INVOICES_URL                  = 'https://retailerservices.diamondcomics.com/MyAccount/Invoices/List';
    public $TRUALL_URL                    = 'https://retailerservices.diamondcomics.com/FileExport/main_dynamic_b/truall.csv';
    public $CURRENT_URL_MASTER            = 'https://retailerservices.diamondcomics.com/FileExport/Misc/MasterDataFile-ITEMS.txt';
    public $CURRENT_URL_PREVIEW           = 'https://retailerservices.diamondcomics.com/FileExport/MonthlyToolsTXT/previewsDB.txt';
    public $ARCHIVE_DOWNLOAD_URL_MASTER   = "https://retailerservices.diamondcomics.com/Downloads/Archives/monthlytools/previews_master_data_file/MasterDataFile-Items_%4i%02i.txt";
    public $ARCHIVE_DOWNLOAD_URL_PREVIEW  = "https://retailerservices.diamondcomics.com/Downloads/Archives/monthlytools/previews_product_copy/previewsDB_%4i%02i.TXT";
    public $REORDERS_URL                  = 'https://retailerservices.diamondcomics.com/Reorder';
    public $REORDERS_UPLOAD_URL           = 'https://retailerservices.diamondcomics.com/Reorder/UploadReorder';
    public $REORDERS_REVIEW_URL           = 'https://retailerservices.diamondcomics.com/Reorder/Reorder';
    public $REORDERS_CONFIRM_URL          = 'https://retailerservices.diamondcomics.com/Reorder/ConfirmOrder';
    public $REORDERS_DELETE_URL           = 'https://retailerservices.diamondcomics.com/Reorder/DeleteOrder';
    // used in a view
    public $INITIAL_BASE_URL              = 'https://retailerservices.diamondcomics.com/InitialOrder';
    public $INITIAL_URL                   = 'https://retailerservices.diamondcomics.com/InitialOrder/Upload';
    
    public $ITEM_CODE_ROOT_REGEXP         = '/[A-Z]{3}[0-9]{2}/';
    public $ITEM_CODE_REGEXP              = '/^[A-Z]{3}[0-9]{6}$/';
    
    public $SUCCESS_EXPRESSIONS           = '[/Memphis thru Local/, /Memphis Backorder/, /Olive Branch thru Local/, /Memphis Stock/, /Olive Branch Stock/, /Olive Branch Backorder/, /Local Order Increase/, /Local Stock/, /Local Extras/, /Local Backorder/]';
    public $FAILURE_EXPRESSIONS = '[/Qty Unable to Order/]';

    function __construnct() {
      return;
    }

    // function get
  }