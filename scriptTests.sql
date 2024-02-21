use computacionnube_db1;

CALL add_film('SAW X', '');
CALL add_Sales(1,3,50);

INSERT INTO tbl_pelicula VALUES(NULL,'DEADPOOL 3', '', 1);

SELECT * FROM tbl_ope_venta;
SELECT * FROM tbl_ope_pelicula;
SELECT * FROM tbl_pelicula;