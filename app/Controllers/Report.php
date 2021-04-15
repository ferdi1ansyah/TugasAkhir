<?php 

namespace App\Controllers;
use CodeIgniter\Controller;

class Report extends Controller{


    function index() {

        return view('admin/report/V_report');
    }
}