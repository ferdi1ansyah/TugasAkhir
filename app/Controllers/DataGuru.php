<?php 

namespace App\Controllers;
use CodeIgniter\Controller;

class DataGuru extends Controller{


    function index() {

        return view("admin/dataguru/V_dataGuru");
    }

    function index2() {
        return view("guru/datamateri/V_datamateri.php");
    }
}