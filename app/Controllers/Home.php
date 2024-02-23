<?php

namespace App\Controllers;

use App\Models\CrudModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('UBAM/cineUbam');
    }

    public function getFilmsAjax()
    {
        $Crud = new CrudModel();
        $datos = $Crud->getFilms();

        $response = [
            'success' => true,
            'data' => $datos,
        ];

        return $this->response->setJSON($response);
    }

    public function getFilmsDetails()
    {
        $idPelicula = $this->request->getGet('id_pelicula');
        $Crud = new CrudModel();
        $detallePelicula = $Crud->getFilmsId($idPelicula);

        $response = [
            'success' => true,
            'data' => $detallePelicula,
        ];

        return $this->response->setJSON($response);
    }

    public function insertDataFilms()
    {
        $nombrePelicula = $this->request->getPost('nombrePelicula');
        $imagen = $this->request->getFile('imagenPelicula');

        $imagenPath = $this->saveImage($imagen);

        $imagenRelativePath = '../public/img/movies/' . $imagenPath;

        $Crud = new CrudModel();
        $result = $Crud->insertFilm($nombrePelicula, $imagenRelativePath);

        $response = [
            'success' => $result,
        ];

        return $this->response->setJSON($response);
    }

    public function saveImage($imagen)
    {
        $newName = $imagen->getRandomName();
        $imagen->move(ROOTPATH . 'public/img/movies', $newName);

        return $newName;
    }
}
