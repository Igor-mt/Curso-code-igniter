<?php
defined('BASEPATH') OR exit('No direct script access allwed');

class Pagina extends CI_Controller {

    function __construct(){
        parent::__construct();
    }

    public function index(){
        echo 'tudo ok';
    }
}
