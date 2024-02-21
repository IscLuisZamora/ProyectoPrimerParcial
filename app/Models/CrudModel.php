<?php

namespace App\Models;

use CodeIgniter\Model;

class CrudModel extends Model
{
    public function getFilms()
    {
        $Nombres = $this->db->query("SELECT * FROM tbl_pelicula");
        return $Nombres->getResult();
    }
}
