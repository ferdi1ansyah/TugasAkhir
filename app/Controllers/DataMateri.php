<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class DataMateri extends Controller {

    function index () {

        return view("guru/datamateri/V_datamateri.php");
    }
}