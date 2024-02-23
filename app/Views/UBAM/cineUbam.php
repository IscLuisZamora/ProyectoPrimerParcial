<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

    <!-- bosstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">

    <!-- STYLES -->

    <style {csp-style-nonce}>
        /*STILOS DE CINE UBAM*/

        * {
            margin: 0;
            top: 0;
            box-sizing: border-box;
        }

        /*Diseño*/
        body {
            font-family: 'Arial';
        }

        header {
            width: 100%;
            height: 80vh;
            padding: 0.1px;
            color: aliceblue;
            background-image: linear-gradient(60deg, #29323c9a 0%, #485563bf 100%), url('https://images.unsplash.com/photo-1478720568477-152d9b164e26?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        .tittle {
            margin: 250px auto;
            text-align: center;
            font-size: 6rem;
        }

        .tittle2 {
            margin: 0px auto;
            text-align: center;
            font-size: 25px;
            color: azure;
            padding-top: 5px;
            padding-bottom: 15px;
        }

        .container,
        .container-fluid {
            height: auto;
            background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);
        }

        .imgs-container {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            margin: 0px auto;
            width: 80%;
            text-align: center;
        }

        .card {
            display: block;
            border-radius: 15px 15px 20px 20px;
            /*box-shadow: 1px 1px 10px snow;*/
        }

        .imagen {
            width: 250px;
            height: 300px;
            border: 1px solid transparent;
            border-radius: 15px 15px 0 0;
            background-size: contain;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: scroll;
        }

        .image-div {
            display: inline-block;
            text-align: center;
            margin: 20px 50px;
        }

        .txt-btn {
            padding: 0px;
        }


        /* Estilo para el estado normal */
        .txt-btn button {
            width: 100%;
            padding: 15px 0;
            background-color: rgb(211, 211, 211);
            color: black;
            border: transparent;
            text-decoration: none;
            border-radius: 0px 0px 20px 20px;
            transition: 0.5s ease-in-out;
        }

        .txt-btn>svg {
            fill: rgba(0, 0, 0, 1);
            transition: .5s;
        }

        /* Aplicación de la animación en el estado de hover */
        .txt-btn a:hover {
            background-color: #C088F8;
            color: snow;
            transition: 0.5s;
        }

        .txt-btn:hover svg {
            fill: rgb(255, 255, 255);
            transition: .5s;
        }

        .img-1 {
            background-image: url('https://imageio.forbes.com/blogs-images/markhughes/files/2019/04/AVENGERS-ENDGAME-poster-DOLBY-CINEMA-1.jpg?height=1039&width=711&fit=boundsg');
        }

        .img-2 {
            background-image: url('https://m.media-amazon.com/images/I/71dcqYNTKmL._AC_UF894,1000_QL80_.jpg');
        }

        .img-3 {
            background-image: url('https://i.redd.it/kymw3pwhyzgc1.jpeg');
        }

        .img-4 {
            background-image: url('https://s3.cine3.com/2023/08/the-nun-ii-poster-oficial-03.jpg');
        }

        .img-5 {
            background-image: url('https://dx35vtwkllhj9.cloudfront.net/lionsgateus/saw-x/images/regions/us/updates/onesheet.jpg');
        }

        .img-6 {
            background-image: url('https://www.aceprensa.com/wp-content/uploads/2023/05/la-sirenita-691x1024.jpg');
        }

        .img-7 {
            background-image: url('https://es.web.img3.acsta.net/medias/nmedia/18/85/19/61/19777360.jpg');
        }

        .img-8 {
            background-image: url('https://lumiere-a.akamaihd.net/v1/images/p_coco_19736_fd5fa537.jpeg?region=0,0,540,810');
        }

        .img-9 {
            background-image: url('https://www.debate.com.mx/__export/1704137482785/sites/debate/img/2024/01/01/aguas_siniestras.jpg_520823437.jpg');
        }

        .modal .film-modal {
            background-color: #0A2E36ab;
            color: snow;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- Modal -->
                <div class="modal fade" id="modal_insert" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <form id="insertForm">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">REGISTRAR</h1>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h2 style="font-weight: 700; margin: 10px auto; text-align:center;">Agregar Función</h2>
                                        </div>
                                        <div class="col-md-12 gy-2">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="nombrePelicula">Nombre: </label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="text" name="nombrePelicula" id="nombrePelicula" autocomplete="no">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 gy-4">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="imagenPelicula">Imagen: </label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input class="form-control" type="file" name="imagenPelicula" id="imagenPelicula">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="resetData()">CANCELAR</button>
                                    <button type="submit" class="btn btn-warning">AGREGAR PELÍCULA</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="col-md-12">
                <div class="table table-responsive">
                    <table class="table table-hover table-bordered">
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>URL</th>
                            <th>Estado</th>
                        </tr>
                        <?php //foreach ($datos as $key) : 
                        ?>
                            <tr>
                                <td><?php //echo $key->id_pelicula 
                                    ?></td>
                                <td><?php //echo $key->pelicula_pelicula 
                                    ?></td>
                                <td><?php //echo $key->imagenRuta_pelicula 
                                    ?></td>
                                <td><?php //echo $key->activo_pelicula 
                                    ?></td>
                                <td><a href="" class="btn btn-warning btn-sm">Editar</a></td>
                                <td><a href="" class="btn btn-danger btn-sm">Eliminar</a></td>
                            </tr>
                        <?php //endforeach; 
                        ?>
                    </table>
                </div>
            </div> -->
        </div>
        <header>
            <h1 class="tittle">CINE UBAM</h1>
        </header>
        <div class="row">
            <div class="col-md-12" style="text-align: right;">
                <button type="button" class="btn btn-info" style="padding: 10px 20px; margin: 10px 0;" data-bs-toggle="modal" data-bs-target="#modal_insert">
                    Agregar Funcion
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="30"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z" />
                    </svg>
                </button>
            </div>
            <div class="tittle2">
                <h2 class="title">Galería de Estrenos</h2>
            </div>
            <div class="imgs-container">
            </div>

            <div class="col-12">
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content film-modal">
                            <!-- <form id="formSale"> -->
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Taquilla</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2 class="film-title" style="font-weight: 800; margin: 10px auto; text-align:center; background-color: #FFFFFF; padding: 20px 5px; margin: 10px 0 20px; color: black; border-radius: 5px;"></h2>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="ticket-size">Entradas: </label>
                                        <input class="form-control" type="number" name="ticket-size" id="ticket-size">
                                        <br>
                                        <button class="btn btn-secondary" onclick="calcularPrecio()">Calcular Precio</button>
                                    </div>
                                    <div class="col-md-12" style="margin-top: 20px; margin-bottom: 20px;">
                                        <p><strong>Total a pagar: $</strong>
                                            <span id="ticket-cost">0.00</span>
                                        </p>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="ticket-money">Pagar con: </label>
                                        <input class="form-control" type="number" name="ticket-money" id="ticket-money">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="resetData()">CANCELAR</button>
                                <button type="submit" class="btn btn-primary" onclick="pagoEfectivo()">ADQUIRIR BOLETOS</button>
                            </div>
                            <!-- </form> -->
                        </div>
                    </div>
                </div>
            </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- Agrega este bloque de script al final de tu archivo .php antes de cerrar el cuerpo </body> -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="/framework_ci4/framework_ci4/public/js/script.js"></script>
<script>
    $(document).ready(function() {
        fetchData();

        function fetchData() {
            $.ajax({
                type: "GET",
                url: "<?php echo base_url('Home/getFilmsAjax'); ?>",
                dataType: "json",
                success: function(response) {
                    if (response.success) {
                        $(".imgs-container").empty();

                        $.each(response.data, function(index, film) {
                            var filmHtml = `
                            <div class="col-sm-12 col-md-4">
                                <div class="row" style="margin: 0 20px;">
                                    <div class="col-md-12">
                                        <h3 style="color: snow; font-weight: 700; padding: 5px 0; background-color: transparent; border-top:none; border-bottom: 5px solid snow;">${film.pelicula_pelicula}</h3>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="image-div">
                                            <div class="card">
                                                <div class="imagens">
                                                    <img class="imagen" src="${film.imagenRuta_pelicula}" alt="">
                                                </div>
                                                <div class="txt-btn">
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="   ${film.id_pelicula}" onclick="openModal(${film.id_pelicula})">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 576 512">
                                                            <path d="M64 64C28.7 64 0 92.7 0 128v64c0 8.8 7.4 15.7 15.7 18.6C34.5 217.1 48 235 48 256s-13.5 38.9-32.3 45.4C7.4 304.3 0 311.2 0 320v64c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V320c0-8.8-7.4-15.7-15.7-18.6C541.5 294.9 528 277 528 256s13.5-38.9 32.3-45.4c8.3-2.9 15.7-9.8 15.7-18.6V128c0-35.3-28.7-64-64-64H64zm64 112l0 160c0 8.8 7.2 16 16 16H432c8.8 0 16-7.2 16-16V176c0-8.8-7.2-16-16-16H144c-8.8 0-16 7.2-16 16zM96 160c0-17.7 14.3-32 32-32H448c17.7 0 32 14.3 32 32V352c0 17.7-14.3 32-32 32H128c-17.7 0-32-14.3-32-32V160z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `;

                            $(".imgs-container").append(filmHtml);
                        });
                    } else {
                        console.error("Error al obtener datos de películas.");
                    }
                },
                error: function() {
                    console.error("Error al realizar la solicitud Ajax.");
                }
            });
        }

        $('#insertForm').submit(function(e) {
            e.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                type: "POST",
                url: "<?php echo base_url('Home/insertDataFilms'); ?>",
                data: formData,
                dataType: "json",
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.success) {
                        $('#insertForm')[0].reset();
                        swal("Hecho", "¡Pelicula Agregada!", "success");
                        fetchData();
                    } else {
                        console.error("Error al insertar la película.");
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Error en la solicitud Ajax: " + xhr.responseText);
                }
            });
        });

    });


    function pagoEfectivo() {
        efectivo = $('#ticket-money').val()
        precio = parseInt($('#ticket-cost').text())
        cambio = efectivo - precio
        if (cambio < 0) {
            swal("Ups!", "¡Fondos Insuficientes!", "error");
        } else {
            swal("Hecho", "¡Compra realizada con éxito!", "success");
        }
    }

    function openModal(idPelicula) {
        $.ajax({
            type: "GET",
            url: "<?php echo base_url('Home/getFilmsDetails'); ?>",
            data: {
                id_pelicula: idPelicula
            },
            dataType: "json",
            success: function(response) {
                if (response.success) {
                    var selectedFilm = response.data.find(film => film.id_pelicula == idPelicula);

                    if (selectedFilm) {
                        $('.film-title').text(selectedFilm.pelicula_pelicula);
                    } else {
                        console.error("No se encontró la película con el ID proporcionado.");
                    }
                } else {
                    console.error("Error al obtener detalles de la película.");
                }
            },
            error: function(xhr, status, error) {
                console.error("Error en la solicitud Ajax: " + xhr.responseText);
            }
        });
    }
</script>

</html>