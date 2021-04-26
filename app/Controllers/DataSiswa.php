<?php 

namespace App\Controllers;
use CodeIgniter\Controller;

class DataSiswa extends Controller{


    function index() {

        return view("admin/datasiswa/V_dataSiswa");
    }

 
}