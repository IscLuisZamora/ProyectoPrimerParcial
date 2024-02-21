<?php

namespace App\Controllers;

use App\Models\CrudModel;

class Home extends BaseController
{
    public function index(): string
    {
        $Crud = new CrudModel();
        $datos = $Crud->getFilms();

        $data = [
            "datos" => $datos
        ];

        return view('UBAM/cineUbam', $data);
    }

    public function insertData()
    {
    }

    public function getIdFunction()
    {
    }
}
