<?php

namespace App\Controllers;


use CodeIgniter\Controller;

class Menu extends Controller {


    protected $session;

    function __construct() {

        $this->session = \Config\Services::session();

    }

    public function index()

    {
        return view('Auth/menu');
    }






}