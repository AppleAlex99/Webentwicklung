<?php namespace App\Controllers;


class Personen extends BaseController
{
    public function index()
    {
        $data['hw'] = 'Hello World';
        echo view('Personen', $data);
    }






}