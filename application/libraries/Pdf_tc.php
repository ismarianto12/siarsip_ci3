<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	error_reporting(0); 
require_once APPPATH.'third_party/tcpdf/tcpdf.php';  
class Pdf_tc extends TCPDF
{
    function __construct()
    {
        parent::__construct();
    }
}