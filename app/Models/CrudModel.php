<?php

namespace App\Models;

use CodeIgniter\Model;

class CrudModel extends Model
{
    public function getFilms()
    {
        $Nombres = $this->db->query("CALL showFilms()");
        return $Nombres->getResult();
    }
    public function getFilmsId($id_film)
    {
        $Nombres = $this->db->query("CALL show_FilmTPeliculaId(" . $id_film . ")");
        return $Nombres->getResult();
    }
    public function insertFilm($pelicula, $rutaImagen)
    {
        $sql = "CALL add_TPelicula('$pelicula','$rutaImagen')";
        $this->db->query($sql);
        return $this->db->affectedRows();
    }
}
