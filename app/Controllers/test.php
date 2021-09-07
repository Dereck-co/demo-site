<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class test extends Controller
{
    public function index()
    {
    }
    public function tesfetch()
    {
        $postData = $this->request->getJSON();
        // echo '<pre>';
        // print_r($postData);
        // echo '</pre>';

        // echo json_encode($postData);
        return $this->response->setJSON($postData);
    }
    public function tesfetchView()
    {
        // return view('test/tesfetchView');
        // $pass ="f";
        $entiUse = new \App\Entities\User();
        // $entiUse->setPassword($pass);
        $entiUse->doLogin();
        print_r($entiUse);
    }
    public function savefile()
    {
       $q = $this->request->getPost();
       var_dump($q);
       return view('test/savefile');
    }
}
