use computacionnube_db1;

CALL add_film('SAW X', '');
CALL add_Sales(1,3,50);

INSERT INTO tbl_pelicula VALUES(NULL,'DEADPOOL 3', '', 1);
UPDATE tbl_pelicula SET imagenRuta_pelicula='../public/img/movies/sawx.jpg' WHERE id_pelicula=1;

SELECT * FROM tbl_ope_venta;
SELECT * FROM tbl_ope_pelicula;
SELECT * FROM tbl_pelicula;

UPDATE tbl_pelicula SET imagenRuta_pelicula='../public/img/movies/1708652836_2f1aaa5eac211563cd5f.jpg' WHERE id_pelicula=3;
DELETE FROM tbl_pelicula WHERE id_pelicula>0;