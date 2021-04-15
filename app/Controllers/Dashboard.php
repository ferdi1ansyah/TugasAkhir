<?php 

namespace App\Controllers;
use CodeIgniter\Controller;

class Dashboard extends Controller {

    /**
     * 
     *  View dashboard
     * 
     */
    function index() {

        return view('admin/dashboard/V_dashboard');
    }
}